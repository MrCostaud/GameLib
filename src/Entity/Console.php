<?php

namespace App\Entity;

use App\Repository\ConsoleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConsoleRepository::class)]
class Console
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idConsole = null;

    #[ORM\Column(length: 255)]
    private ?string $nomConsole = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imgConsole = null;

    #[ORM\ManyToOne]
    private ?etat $post = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdConsole(): ?int
    {
        return $this->idConsole;
    }

    public function setIdConsole(int $idConsole): static
    {
        $this->idConsole = $idConsole;

        return $this;
    }

    public function getNomConsole(): ?string
    {
        return $this->nomConsole;
    }

    public function setNomConsole(string $nomConsole): static
    {
        $this->nomConsole = $nomConsole;

        return $this;
    }

    public function getImgConsole(): ?string
    {
        return $this->imgConsole;
    }

    public function setImgConsole(?string $imgConsole): static
    {
        $this->imgConsole = $imgConsole;

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
