<?php

namespace App\Entity;

use App\Repository\JeuRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JeuRepository::class)]
class Jeu
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idJeu = null;

    #[ORM\Column(length: 255)]
    private ?string $nomJeu = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imgJeu = null;

    #[ORM\ManyToOne(inversedBy: 'jeus')]
    private ?console $post = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?etat $postjeu = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdJeu(): ?int
    {
        return $this->idJeu;
    }

    public function setIdJeu(int $idJeu): static
    {
        $this->idJeu = $idJeu;

        return $this;
    }

    public function getNomJeu(): ?string
    {
        return $this->nomJeu;
    }

    public function setNomJeu(string $nomJeu): static
    {
        $this->nomJeu = $nomJeu;

        return $this;
    }

    public function getImgJeu(): ?string
    {
        return $this->imgJeu;
    }

    public function setImgJeu(?string $imgJeu): static
    {
        $this->imgJeu = $imgJeu;

        return $this;
    }

    public function getPost(): ?console
    {
        return $this->post;
    }

    public function setPost(?console $post): static
    {
        $this->post = $post;

        return $this;
    }

    public function getPostjeu(): ?etat
    {
        return $this->postjeu;
    }

    public function setPostjeu(?etat $postjeu): static
    {
        $this->postjeu = $postjeu;

        return $this;
    }
}
