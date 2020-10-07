<?php

namespace App\Entity;

use App\Repository\AddWorkRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AddWorkRepository::class)
 */
class AddWork
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $via;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $giorno;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVia(): ?string
    {
        return $this->via;
    }

    public function setVia(string $via): self
    {
        $this->via = $via;

        return $this;
    }

    public function getGiorno(): ?string
    {
        return $this->giorno;
    }

    public function setGiorno(string $giorno): self
    {
        $this->giorno = $giorno;

        return $this;
    }
}
