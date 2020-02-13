<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\AdresseFacturationRepository")
 */
class AdresseFacturation
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
    private $idUser;

    /**
     * @ORM\Column(type="integer")
     */
    private $idAdresse;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isPrincipale;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getIdAdresse(): ?int
    {
        return $this->idAdresse;
    }

    public function setIdAdresse(int $idAdresse): self
    {
        $this->idAdresse = $idAdresse;

        return $this;
    }

    public function getIsPrincipale(): ?bool
    {
        return $this->isPrincipale;
    }

    public function setIsPrincipale(bool $isPrincipale): self
    {
        $this->isPrincipale = $isPrincipale;

        return $this;
    }
}
