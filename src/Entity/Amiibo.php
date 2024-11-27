<?php

namespace App\Entity;

use App\Repository\AmiiboRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AmiiboRepository::class)]
class Amiibo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idAmiibo = null;

    #[ORM\Column(length: 255)]
    private ?string $nomAmiibo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imgAmiibo = null;

    #[ORM\ManyToOne]
    private ?etat $post = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdAmiibo(): ?int
    {
        return $this->idAmiibo;
    }

    public function setIdAmiibo(int $idAmiibo): static
    {
        $this->idAmiibo = $idAmiibo;

        return $this;
    }

    public function getNomAmiibo(): ?string
    {
        return $this->nomAmiibo;
    }

    public function setNomAmiibo(string $nomAmiibo): static
    {
        $this->nomAmiibo = $nomAmiibo;

        return $this;
    }

    public function getImgAmiibo(): ?string
    {
        return $this->imgAmiibo;
    }

    public function setImgAmiibo(?string $imgAmiibo): static
    {
        $this->imgAmiibo = $imgAmiibo;

        return $this;
    }

    public function getPost(): ?etat
    {
        return $this->post;
    }

    public function setPost(?etat $post): static
    {
        $this->post = $post;

        return $this;
    }
}
