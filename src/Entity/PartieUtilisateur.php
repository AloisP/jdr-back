<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PartieUtilisateur
 *
 * @ORM\Table(name="partie_utilisateur", indexes={@ORM\Index(name="partie_id", columns={"partie_id"}), @ORM\Index(name="utilisateur_id", columns={"utilisateur_id"}), @ORM\Index(name="personnage_id", columns={"personnage_id"})})
 * @ORM\Entity
 */
class PartieUtilisateur
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
     * @var int
     *
     * @ORM\Column(name="partie_id", type="integer", nullable=false)
     */
    private $partieId;

    /**
     * @var int
     *
     * @ORM\Column(name="utilisateur_id", type="integer", nullable=false)
     */
    private $utilisateurId;

    /**
     * @var int
     *
     * @ORM\Column(name="personnage_id", type="integer", nullable=false)
     */
    private $personnageId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPartieId(): ?int
    {
        return $this->partieId;
    }

    public function setPartieId(int $partieId): self
    {
        $this->partieId = $partieId;

        return $this;
    }

    public function getUtilisateurId(): ?int
    {
        return $this->utilisateurId;
    }

    public function setUtilisateurId(int $utilisateurId): self
    {
        $this->utilisateurId = $utilisateurId;

        return $this;
    }

    public function getPersonnageId(): ?int
    {
        return $this->personnageId;
    }

    public function setPersonnageId(int $personnageId): self
    {
        $this->personnageId = $personnageId;

        return $this;
    }


}
