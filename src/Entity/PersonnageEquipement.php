<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonnageEquipement
 *
 * @ORM\Table(name="personnage_equipement")
 * @ORM\Entity
 */
class PersonnageEquipement
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
     * @ORM\Column(name="equipement_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $equipementId;

    /**
     * @var bool
     *
     * @ORM\Column(name="equiper", type="boolean", nullable=false)
     */
    private $equiper;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPersonnageId(): ?int
    {
        return $this->personnageId;
    }

    public function getEquipementId(): ?int
    {
        return $this->equipementId;
    }

    public function getEquiper(): ?bool
    {
        return $this->equiper;
    }

    public function setEquiper(bool $equiper): self
    {
        $this->equiper = $equiper;

        return $this;
    }


}
