<?php

namespace App\Entity;

use App\Repository\NovedadesRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * @ORM\Entity(repositoryClass=NovedadesRepository::class)
 */
class Novedades
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $noticias;
    /**
     * @ORM\Column(type="datetime")
     */
    protected $createdAt ;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $updatedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNoticias(): ?string
    {
        return $this->noticias;
    }

    public function setNoticias(string $noticias): self
    {
        $this->noticias = $noticias;

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

}
