<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\CommandeRepository")
 */
class Commande
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
    private $idListe;

    /**
     * @ORM\Column(type="integer")
     */
    private $idUser;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateCommande;

    /**
     * @ORM\Column(type="integer")
     */
    private $idLivreur;

    /**
     * @ORM\Column(type="integer")
     */
    private $fraisPort;

    /**
     * @ORM\Column(type="integer")
     */
    private $prixOrFrais;

    /**
     * @ORM\Column(type="integer")
     */
    private $idAdresseFacturation;

    /**
     * @ORM\Column(type="integer")
     */
    private $idAdresseLivraison;

    /**
     * @ORM\Column(type="integer")
     */
    private $etat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdListe(): ?int
    {
        return $this->idListe;
    }

    public function setIdListe(int $idListe): self
    {
        $this->idListe = $idListe;

        return $this;
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

    public function getDateCommande(): ?\DateTimeInterface
    {
        return $this->dateCommande;
    }

    public function setDateCommande(\DateTimeInterface $dateCommande): self
    {
        $this->dateCommande = $dateCommande;

        return $this;
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

    public function getFraisPort(): ?int
    {
        return $this->fraisPort;
    }

    public function setFraisPort(int $fraisPort): self
    {
        $this->fraisPort = $fraisPort;

        return $this;
    }

    public function getPrixOrFrais(): ?int
    {
        return $this->prixOrFrais;
    }

    public function setPrixOrFrais(int $prixOrFrais): self
    {
        $this->prixOrFrais = $prixOrFrais;

        return $this;
    }

    public function getIdAdresseFacturation(): ?int
    {
        return $this->idAdresseFacturation;
    }

    public function setIdAdresseFacturation(int $idAdresseFacturation): self
    {
        $this->idAdresseFacturation = $idAdresseFacturation;

        return $this;
    }

    public function getIdAdresseLivraison(): ?int
    {
        return $this->idAdresseLivraison;
    }

    public function setIdAdresseLivraison(int $idAdresseLivraison): self
    {
        $this->idAdresseLivraison = $idAdresseLivraison;

        return $this;
    }

    public function getEtat(): ?int
    {
        return $this->etat;
    }

    public function setEtat(int $etat): self
    {
        $this->etat = $etat;

        return $this;
    }
}
