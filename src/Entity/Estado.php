<?php

namespace App\Entity;

use App\Repository\EstadoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EstadoRepository::class)
 */
class Estado
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $estado;

    /**
     * @ORM\OneToMany(targetEntity=Pedido::class, mappedBy="estado")
     */
    private $pedido;

    public function __construct()
    {
        $this->pedido = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(?string $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * @return Collection<int, Pedido>
     */
    public function getPedido(): Collection
    {
        return $this->pedido;
    }

    public function addPedido(Pedido $pedido): self
    {
        if (!$this->pedido->contains($pedido)) {
            $this->pedido[] = $pedido;
            $pedido->setEstado($this);
        }

        return $this;
    }

    public function removePedido(Pedido $pedido): self
    {
        if ($this->pedido->removeElement($pedido)) {
            // set the owning side to null (unless already changed)
            if ($pedido->getEstado() === $this) {
                $pedido->setEstado(null);
            }
        }

        return $this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->estado;
    }

}
