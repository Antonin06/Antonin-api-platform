<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\BookRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BookRepository::class)
 */
#[ApiResource]
class Book
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
<<<<<<< HEAD
     * @ORM\Column(type="string", length=255, nullable=true)
=======
     * @ORM\Column(type="string", length=255)
>>>>>>> 99bd18fcb8674b8c5bc7af296ea9d07cb3627302
     */
    private $name;

    /**
<<<<<<< HEAD
     * @ORM\Column(type="string", length=255, nullable=true)
=======
     * @ORM\Column(type="string", length=255)
>>>>>>> 99bd18fcb8674b8c5bc7af296ea9d07cb3627302
     */
    private $author;

    /**
<<<<<<< HEAD
     * @ORM\Column(type="date", nullable=true)
=======
     * @ORM\Column(type="date")
>>>>>>> 99bd18fcb8674b8c5bc7af296ea9d07cb3627302
     */
    private $datePublished;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

<<<<<<< HEAD
    public function setName(?string $name): self
=======
    public function setName(string $name): self
>>>>>>> 99bd18fcb8674b8c5bc7af296ea9d07cb3627302
    {
        $this->name = $name;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

<<<<<<< HEAD
    public function setAuthor(?string $author): self
=======
    public function setAuthor(string $author): self
>>>>>>> 99bd18fcb8674b8c5bc7af296ea9d07cb3627302
    {
        $this->author = $author;

        return $this;
    }

    public function getDatePublished(): ?\DateTimeInterface
    {
        return $this->datePublished;
    }

<<<<<<< HEAD
    public function setDatePublished(?\DateTimeInterface $datePublished): self
=======
    public function setDatePublished(\DateTimeInterface $datePublished): self
>>>>>>> 99bd18fcb8674b8c5bc7af296ea9d07cb3627302
    {
        $this->datePublished = $datePublished;

        return $this;
    }
}
