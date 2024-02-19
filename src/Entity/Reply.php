<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\ReplyRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReplyRepository::class)]
class Reply
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotBlank(message: 'La date de réponse ne peut pas être vide')]
    private ?\DateTimeInterface $repdate = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: 'Le contenu ne peut pas être vide')]
    private ?string $content = null;

    #[ORM\ManyToOne(inversedBy: 'replies')]
    private ?Reclamation $reclamation = null;

    public function __construct()
    {
        $this->repdate = new \DateTime(); // Initialise la date de réponse à la date et l'heure actuelles lors de la création de l'entité
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRepdate(): ?\DateTimeInterface
    {
        return $this->repdate;
    }

    public function setRepdate(\DateTimeInterface $repdate): static
    {
        $this->repdate = $repdate;
        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;
        return $this;
    }

    public function getReclamation(): ?Reclamation
    {
        return $this->reclamation;
    }

    public function setReclamation(?Reclamation $reclamation): static
    {
        $this->reclamation = $reclamation;
        return $this;
    }
}
