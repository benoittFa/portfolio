<?php

namespace App\Entity;

use App\Repository\ArtworkRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArtworkRepository::class)]
class Artwork
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $title;

    #[ORM\Column(type: 'text')]
    private $picture;

    #[ORM\Column(type: 'integer')]
    private $format1;

    #[ORM\Column(type: 'integer')]
    private $format2;

    #[ORM\Column(type: 'string', length: 255)]
    private $categorie;

    #[ORM\Column(type: 'date')]
    private $creationDate;

    #[ORM\ManyToOne(targetEntity: Administrator::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $admin;

    #[ORM\Column(type: 'boolean')]
    private $type;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getFormat(): ?int
    {
        return $this->format1;
    }

    public function setFormat(int $format1): self
    {
        $this->format1 = $format1;

        return $this;
    }
    public function getFormat2(): ?int
    {
        return $this->format2;
    }

    public function setFormat2(int $format2): self
    {
        $this->format2 = $format2;

        return $this;
    }
    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creationDate;
    }

    public function setCreationDate(\DateTimeInterface $creationDate): self
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getAdmin(): ?Administrator
    {
        return $this->admin;
    }

    public function setAdmin(?Administrator $admin): self
    {
        $this->admin = $admin;

        return $this;
    }

    public function getType(): ?bool
    {
        return $this->type;
    }

    public function setType(bool $type): self
    {
        $this->type = $type;

        return $this;
    }

    
}
