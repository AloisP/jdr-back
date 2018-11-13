<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonnageObjet
 *
 * @ORM\Table(name="personnage_objet", indexes={@ORM\Index(name="personnage_id", columns={"personnage_id"}), @ORM\Index(name="objet_id", columns={"objet_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\PersonnageObjetRepository")
 */
class PersonnageObjet
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="personnage_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $personnageId;

    /**
     * @var int
     *
     * @ORM\Column(name="objet_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $objetId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPersonnageId(): ?int
    {
        return $this->personnageId;
    }

    public function getObjetId(): ?int
    {
        return $this->objetId;
    }


}
