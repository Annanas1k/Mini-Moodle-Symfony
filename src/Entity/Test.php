<?php

namespace App\Entity;

use App\Repository\TestRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TestRepository::class)]
class Test
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $da = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDa(): ?string
    {
        return $this->da;
    }

    public function setDa(string $da): static
    {
        $this->da = $da;

        return $this;
    }
}
