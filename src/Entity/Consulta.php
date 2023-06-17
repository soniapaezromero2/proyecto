<?php

namespace App\Entity;

use App\Repository\ConsultaRepository;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass=ConsultaRepository::class)
 */
class Consulta
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=166)
     */
    private $email;

    /**
     * @ORM\Column(type="string",)
     */
    private $consulta;
    /**
     * @ORM\Column(type="string",)
     */
    private $asunto;


    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getConsulta()
    {
        return $this->consulta;
    }

    /**
     * @param mixed $consulta
     */
    public function setConsulta($consulta): void
    {
        $this->consulta = $consulta;
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

    /**
     * @return mixed
     */
    public function getAsunto()
    {
        return $this->asunto;
    }

    /**
     * @param mixed $asunto
     */
    public function setAsunto($asunto): void
    {
        $this->asunto = $asunto;
    }


}
