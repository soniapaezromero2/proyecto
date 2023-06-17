<?php

namespace App\Entity;

use App\Repository\PedidoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Timestampable\Traits\TimestampableEntity;


/**
 * @ORM\Entity(repositoryClass="App\Repository\PedidoRepository", repositoryClass=PedidoRepository::class)
 */
class Pedido
{
    use TimestampableEntity;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $referencia;
    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
      protected $createdAt ;

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
      protected $updatedAt;


    /**
     * @ORM\ManyToOne(targetEntity=Cliente::class, inversedBy="pedidosCliente")
     * @ORM\JoinColumn(nullable=false)
     */
    private $clientePedido;


    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $total;

    /**
     * @ORM\OneToOne(targetEntity=Order::class, inversedBy="pedido", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $order;



    /**
     * @ORM\ManyToOne(targetEntity=Estado::class, inversedBy="pedido")
     */
    private $estado;

    /**
     * @ORM\ManyToMany(targetEntity=Producto::class, inversedBy="pedidos")
     */
    private $productos;

    /**
     * @ORM\OneToMany(targetEntity=OrderItem::class, mappedBy="pedido", orphanRemoval=true)
     */
    private $items;



    public function __construct()
    {
        $this->productos = new ArrayCollection();
        $this->items = new ArrayCollection();
    }






    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReferencia(): ?int
    {
        return $this->referencia;
    }

    public function setReferencia(int $referencia): self
    {
        $this->referencia = $referencia;

        return $this;
    }

    public function getClientePedido(): ?Cliente
    {
        return $this->clientePedido;
    }

    public function setClientePedido(?Cliente $clientePedido): self
    {
        $this->clientePedido = $clientePedido;

        return $this;
    }


    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param mixed $updatedAt
     */
    public function setUpdatedAt($updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }


    /**
     * @return string
     */
    public function __toString()
    {

        return  (string)$this->referencia;

    }

    public function getEstado(): ?Estado
    {
        return $this->estado;
    }

    public function setEstado(?Estado $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(?float $total): self
    {

        $this->total = $total;

        return $this;
    }

    public function getOrder(): ?Order
    {
        return $this->order;
    }

    public function setOrder(Order $order): self
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @param ArrayCollection $productos
     */
    public function getProductos(): Collection
    {
        return $this->productos;
    }

    public function addProducto(Producto $producto): self
    {
        if (!$this->productos->contains($producto)) {
            $this->productos[] = $producto;
        }

        return $this;
    }

    public function removeProducto(Producto $producto): self
    {
        $this->productos->removeElement($producto);

        return $this;
    }

    /**
     * @return Collection<int, OrderItem>
     */
    public function getItems(): Collection
    {
        return $this->items;
    }

    public function addItem(OrderItem $item): self
    {
        if (!$this->items->contains($item)) {
            $this->items[] = $item;
            $item->setPedido($this);
        }

        return $this;
    }

    public function removeItem(OrderItem $item): self
    {
        if ($this->items->removeElement($item)) {
            // set the owning side to null (unless already changed)
            if ($item->getPedido() === $this) {
                $item->setPedido(null);
            }
        }

        return $this;
    }

    /**
     * @param ArrayCollection $items
     */
    public function setItems(ArrayCollection $items): void
    {
        $this->items = $items;
    }




}
