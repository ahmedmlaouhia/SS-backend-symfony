<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\UniversitiesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UniversitiesRepository::class)]
#[ApiResource]
class Universities
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false, referencedColumnName: 'id')]
    private ?users $user_id = null;

    #[ORM\Column(length: 255)]
    private ?string $full_name = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?users
    {
        return $this->user_id;
    }

    public function setUserId(users $user_id): static
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getFullName(): ?string
    {
        return $this->full_name;
    }

    public function setFullName(string $full_name): static
    {
        $this->full_name = $full_name;

        return $this;
    }
}
