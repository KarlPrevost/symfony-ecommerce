<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\PaysLivrableRepository")
 */
class PaysLivrable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $idLivreur;

    /**
     * @ORM\Column(type="integer")
     */
    private $idPays;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdLivreur(): ?int
    {
        return $this->idLivreur;
    }

    public function setIdLivreur(int $idLivreur): self
    {
        $this->idLivreur = $idLivreur;

        return $this;
    }

    public function getIdPays(): ?int
    {
        return $this->idPays;
    }

    public function setIdPays(int $idPays): self
    {
        $this->idPays = $idPays;

        return $this;
    }
}
