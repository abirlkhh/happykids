<?php

namespace ActiviteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * parascolaire
 *
 * @ORM\Table(name="parascolaire")
 * @ORM\Entity(repositoryClass="ActiviteBundle\Repository\parascolaireRepository")
 */
class parascolaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_parascolaire", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idParascolaire;

    /**
     * @var string
     * @ORM\Column(name="type_parascolaire", type="string", length=255)
     */
    private $typeParascolaire;

    /**
     * @var string
     * @Assert\NotBlank(message="le lieu est obligatoire")
     * @Assert\Length(min=4,max=255)
     * @ORM\Column(name="lieu_parascolaire", type="string", length=255)
     */
    private $lieuParascolaire;

    /**
     * @var \DateTime
     * @Assert\GreaterThanOrEqual("today")

     * @ORM\Column(name="dateDebut_parascolaire", type="datetime")
     */
    private $dateDebutParascolaire;

    /**
     * @var \DateTime
     * @Assert\GreaterThan(propertyPath="dateDebutParascolaire")
     * @ORM\Column(name="dateFin_parascolaire", type="datetime")
     *
     */
    private $dateFinParascolaire;

    /**
     * @ORM\ManyToOne(targetEntity="enfant")
     * @ORM\JoinColumn(name="id_enfant",referencedColumnName="id_enfant")
     */
    private $enfant;

    /**
     * @return int
     */
    public function getIdParascolaire()
    {
        return $this->idParascolaire;
    }



    /**
     * Set typeParascolaire
     *
     * @param string $typeParascolaire
     *
     * @return parascolaire
     */
    public function setTypeParascolaire($typeParascolaire)
    {
        $this->typeParascolaire = $typeParascolaire;

        return $this;
    }

    /**
     * Get typeParascolaire
     *
     * @return string
     */
    public function getTypeParascolaire()
    {
        return $this->typeParascolaire;
    }

    /**
     * Set lieuParascolaire
     *
     * @param string $lieuParascolaire
     *
     * @return parascolaire
     */
    public function setLieuParascolaire($lieuParascolaire)
    {
        $this->lieuParascolaire = $lieuParascolaire;

        return $this;
    }

    /**
     * Get lieuParascolaire
     *
     * @return string
     */
    public function getLieuParascolaire()
    {
        return $this->lieuParascolaire;
    }

    /**
     * Set dateDebutParascolaire
     *
     * @param \DateTime $dateDebutParascolaire
     *
     * @return parascolaire
     */
    public function setDateDebutParascolaire($dateDebutParascolaire)
    {
        $this->dateDebutParascolaire = $dateDebutParascolaire;

        return $this;
    }

    /**
     * Get dateDebutParascolaire
     *
     * @return \DateTime
     */
    public function getDateDebutParascolaire()
    {
        return $this->dateDebutParascolaire;
    }

    /**
     * Set dateFinParascolaire
     *
     * @param \DateTime $dateFinParascolaire
     *
     * @return parascolaire
     */
    public function setDateFinParascolaire($dateFinParascolaire)
    {
        $this->dateFinParascolaire = $dateFinParascolaire;

        return $this;
    }

    /**
     * Get dateFinParascolaire
     *
     * @return \DateTime
     */
    public function getDateFinParascolaire()
    {
        return $this->dateFinParascolaire;
    }

    /**
     * @return mixed
     */
    public function getEnfant()
    {
        return $this->enfant;
    }

    /**
     * @param mixed $enfant
     */
    public function setEnfant($enfant)
    {
        $this->enfant = $enfant;
    }

}

