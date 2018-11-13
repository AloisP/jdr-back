<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partie
 *
 * @ORM\Table(name="partie", indexes={@ORM\Index(name="mj", columns={"mj"})})
 * @ORM\Entity(repositoryClass="App\Repository\PartieRepository")
 */
class Partie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=120, nullable=false)
     */
    private $titre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_joueur", type="integer", nullable=false)
     */
    private $nbJoueur;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ouvert", type="boolean", nullable=true, options={"default"="1"})
     */
    private $ouvert = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="mj", type="integer", nullable=false)
     */
    private $mj;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getNbJoueur(): ?int
    {
        return $this->nbJoueur;
    }

    public function setNbJoueur(int $nbJoueur): self
    {
        $this->nbJoueur = $nbJoueur;

        return $this;
    }

    public function getOuvert(): ?bool
    {
        return $this->ouvert;
    }

    public function setOuvert(?bool $ouvert): self
    {
        $this->ouvert = $ouvert;

        return $this;
    }

    public function getMj(): ?int
    {
        return $this->mj;
    }

    public function setMj(int $mj): self
    {
        $this->mj = $mj;

        return $this;
    }


}
