<?php

namespace App\Entity;

use App\Repository\PeliculaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PeliculaRepository::class)]
class Pelicula
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    public ?int $id = null;

    #[ORM\Column(length: 255)]
    public ?string $titulo = null;

    #[ORM\Column(length: 255, nullable: true)]
    public ?string $fecha_publicacion = null;

    #[ORM\Column(length: 255, nullable: true)]
    public ?string $valoracion = null;

    public function __construct($titulo, $fecha_publicacion, $valoracion)
    {
        $this->titulo = $titulo;
        $this->fecha_publicacion = $fecha_publicacion;
        $this->valoracion = $valoracion;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): static
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getFechaPublicacion(): ?string
    {
        return $this->fecha_publicacion;
    }

    public function setFechaPublicacion(?string $fecha_publicacion): static
    {
        $this->fecha_publicacion = $fecha_publicacion;

        return $this;
    }

    public function getValoracion(): ?string
    {
        return $this->valoracion;
    }

    public function setValoracion(?string $valoracion): static
    {
        $this->valoracion = $valoracion;

        return $this;
    }
}
