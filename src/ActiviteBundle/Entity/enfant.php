<?php

namespace ActiviteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * enfant
 *
 * @ORM\Table(name="enfant")
 * @ORM\Entity(repositoryClass="ActiviteBundle\Repository\enfantRepository")
 */
class enfant
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_enfant", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_enfant", type="string", length=255)
     */
    private $nomEnfant;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_enfant", type="string", length=255)
     */
    private $prenomEnfant;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer")
     */
    private $age;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datenaiss", type="datetime")
     */
    private $datenaiss;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string", length=255)
     */
    private $niveau;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomEnfant
     *
     * @param string $nomEnfant
     *
     * @return enfant
     */
    public function setNomEnfant($nomEnfant)
    {
        $this->nomEnfant = $nomEnfant;

        return $this;
    }

    /**
     * Get nomEnfant
     *
     * @return string
     */
    public function getNomEnfant()
    {
        return $this->nomEnfant;
    }

    /**
     * Set prenomEnfant
     *
     * @param string $prenomEnfant
     *
     * @return enfant
     */
    public function setPrenomEnfant($prenomEnfant)
    {
        $this->prenomEnfant = $prenomEnfant;

        return $this;
    }

    /**
     * Get prenomEnfant
     *
     * @return string
     */
    public function getPrenomEnfant()
    {
        return $this->prenomEnfant;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return enfant
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set datenaiss
     *
     * @param \DateTime $datenaiss
     *
     * @return enfant
     */
    public function setDatenaiss($datenaiss)
    {
        $this->datenaiss = $datenaiss;

        return $this;
    }

    /**
     * Get datenaiss
     *
     * @return \DateTime
     */
    public function getDatenaiss()
    {
        return $this->datenaiss;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return enfant
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set niveau
     *
     * @param string $niveau
     *
     * @return enfant
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return string
     */
    public function getNiveau()
    {
        return $this->niveau;
    }
}

