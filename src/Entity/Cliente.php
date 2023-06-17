<?php

namespace App\Entity;

use App\Repository\ClienteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClienteRepository::class)
 */
class Cliente
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=166)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $TlfContacto;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $direccionEnvio;

    /**
     * @ORM\OneToMany(targetEntity=Pedido::class, mappedBy="clientePedido")
     */
    private $pedidosCliente;

    /**
     * @ORM\OneToOne(targetEntity=User::class, inversedBy="cliente", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $usuario;


    public function __construct()
    {
        $this->pedidosCliente = new ArrayCollection();
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTlfContacto(): ?string
    {
        return $this->TlfContacto;
    }

    public function setTlfContacto(?string $TlfContacto): self
    {
        $this->TlfContacto = $TlfContacto;

        return $this;
    }

    public function getDireccionEnvio(): ?string
    {
        return $this->direccionEnvio;
    }

    public function setDireccionEnvio(?string $direccionEnvio): self
    {
        $this->direccionEnvio = $direccionEnvio;

        return $this;
    }


    public function __toString()
    {
        return $this->name;
    }

    /**
     * @return Collection<int, Pedido>
     */
    public function getPedidosCliente(): Collection
    {
        return $this->pedidosCliente;
    }

    public function addPedidosCliente(Pedido $pedidosCliente): self
    {
        if (!$this->pedidosCliente->contains($pedidosCliente)) {
            $this->pedidosCliente[] = $pedidosCliente;
            $pedidosCliente->setClientePedido($this);
        }

        return $this;
    }

    public function removePedidosCliente(Pedido $pedidosCliente): self
    {
        if ($this->pedidosCliente->removeElement($pedidosCliente)) {
            // set the owning side to null (unless already changed)
            if ($pedidosCliente->getClientePedido() === $this) {
                $pedidosCliente->setClientePedido(null);
            }
        }

        return $this;
    }

    public function getUsuario(): ?User
    {
        return $this->usuario;
    }

    public function setUsuario(User $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }
}
