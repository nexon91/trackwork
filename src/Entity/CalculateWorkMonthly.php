<?php

namespace App\Entity;

use App\Repository\CalculateWorkMonthlyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CalculateWorkMonthlyRepository::class)
 */
class CalculateWorkMonthly
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $OreTotalePerVia;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Mese;

    /**
     * @ORM\Column(type="integer")
     */
    private $OreTotalePerMese;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOreTotalePerVia(): ?int
    {
        return $this->OreTotalePerVia;
    }

    public function setOreTotalePerVia(int $OreTotalePerVia): self
    {
        $this->OreTotalePerVia = $OreTotalePerVia;

        return $this;
    }

    public function getMese(): ?string
    {
        return $this->Mese;
    }

    public function setMese(string $Mese): self
    {
        $this->Mese = $Mese;

        return $this;
    }

    public function getOreTotalePerMese(): ?int
    {
        return $this->OreTotalePerMese;
    }

    public function setOreTotalePerMese(int $OreTotalePerMese): self
    {
        $this->OreTotalePerMese = $OreTotalePerMese;

        return $this;
    }
}
