<?php

namespace ActiviteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * moniteur
 *
 * @ORM\Table(name="moniteur")
 * @ORM\Entity(repositoryClass="ActiviteBundle\Repository\moniteurRepository")
 */
class moniteur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_moniteur", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idMoniteur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_moniteur", type="string", length=255)
     */
    private $nomMoniteur;

    /**
     * @return int
     */
    public function getIdMoniteur()
    {
        return $this->idMoniteur;
    }



    /**
     * Set nomMoniteur
     *
     * @param string $nomMoniteur
     *
     * @return moniteur
     */
    public function setNomMoniteur($nomMoniteur)
    {
        $this->nomMoniteur = $nomMoniteur;

        return $this;
    }

    /**
     * Get nomMoniteur
     *
     * @return string
     */
    public function getNomMoniteur()
    {
        return $this->nomMoniteur;
    }
}

