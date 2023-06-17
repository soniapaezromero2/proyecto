<?php

namespace App\Entity;

use App\Repository\ProductoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * @ORM\Entity(repositoryClass=ProductoRepository::class)
 * @Vich\Uploadable
 */
class Producto
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;
    /**
     * @ORM\Column(type="text")
     */
    private $description;
    /**
     * @ORM\ManyToOne(targetEntity=Categoria::class, inversedBy="procutos")
     */
    private $categorias;

    /**
     * @ORM\OneToOne(targetEntity=Stock::class, mappedBy="producto", cascade={"persist", "remove"})
     */
    private $stock;


    /**
     * @ORM\Column(type="string")
     */
    private  $imageFile ;


    /**
     * @ORM\Column(nullable="true")
     */
    private ?string $imageName=null ;

    /**
     * @ORM\Column(nullable="true")
     */
    private ?int $imageSize=null ;

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private  $updatedAt = null;

    /**
     * parameter(type="integer")
     */
    private  $cantidadProducto ;
    /**
     * @ORM\Column(type="float")
     */
    private $precio;
    /**
     * @ORM\ManyToMany(targetEntity=Pedido::class, mappedBy="productos")
     */
      private $pedidos;

    /**
     * @ORM\OneToMany (targetEntity=OrderItem::class, mappedBy="product")
     */
    private $items;


    public function __construct()
    {
        $this->items = new ArrayCollection();
        $this->pedidos = new ArrayCollection();
    }


    public function setImageName(?string $imageName): void
    {
        $this->imageName = $imageName;
    }

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function setImageSize(?int $imageSize): void
    {
        $this->imageSize = $imageSize;
    }

    public function getImageSize(): ?int
    {
        return $this->imageSize;
    }




    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCategorias(): ?Categoria
    {
        return $this->categorias;
    }

    public function setCategorias(?Categoria $categorias): self
    {
        $this->categorias = $categorias;

        return $this;
    }

    public function getStock(): ?Stock
    {
        return $this->stock;
    }

    public function setStock(?Stock $stock): self
    {
        // unset the owning side of the relation if necessary
        if ($stock === null && $this->stock !== null) {
            $this->stock->setProducto(null);
        }

        // set the owning side of the relation if necessary
        if ($stock !== null && $stock->getProducto() !== $this) {
            $stock->setProducto($this);
        }

        $this->stock = $stock;

        return $this;
    }



    public function getPrecio(): ?float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param mixed $imageFile
     */
    public function setImageFile($imageFile): void
    {
        $this->imageFile = $imageFile;
    }

    /**
     * @return null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param null $updatedAt
     */
    public function setUpdatedAt($updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    public function __toString()
    {
        return $this->name."". $this->precio ;
    }


    /**
     * @return mixed
     */
    public function getCantidadProducto()
    {
        return $this->cantidadProducto;
    }

    /**
     * @param mixed $cantidadProducto
     */
    public function setCantidadProducto($cantidadProducto): void
    {
        $this->cantidadProducto = $cantidadProducto;
    }

     /**
     * @param ArrayCollection $pedidos
     */
    public function getPedidos(): Collection
    {
        return $this->pedidos;
    }

    public function addPedido(Pedido $pedido): self
    {
        if (!$this->pedidos->contains($pedido)) {
            $this->pedidos[] = $pedido;
            $pedido->addProducto($this);
        }

        return $this;
    }

    public function removePedido(Pedido $pedido): self
    {
        if ($this->pedidos->removeElement($pedido)) {
            $pedido->removeProducto($this);
        }

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
        foreach ($this->getItems() as $existingItem) {
            // The item already exists, update the quantity
            if ($existingItem->equals($item)) {
                $existingItem->setQuantity(
                    $existingItem->getQuantity() + $item->getQuantity()
                );
                return $this;
            }
        }

        $this->items[] = $item;
        $item->setOrderRef($this);

        return $this;
    }

    public function removeItem(OrderItem $item): self
    {
        foreach ($this->getItems() as $item) {
            $this->removeItem($item);
        }

        return $this;
    }


}
