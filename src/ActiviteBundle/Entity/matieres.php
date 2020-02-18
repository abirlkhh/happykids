<?php

namespace ActiviteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * matieres
 *
 * @ORM\Table(name="matieres")
 * @ORM\Entity(repositoryClass="ActiviteBundle\Repository\matieresRepository")
 */
class matieres
{
    /**
     * @var int
     *
     * @ORM\Column(name="idMatiere", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idMatiere;

    /**
     * @var string
     *@Assert\Type("alpha")
     * @ORM\Column(name="nomMatiere", type="string", length=255)
     */
    private $nomMatiere;

    /**
     * @var string
     *
     * @ORM\Column(name="sections", type="string", length=255)
     */
    private $sections;
    /**
     * @return int
     */
    public function getIdMatiere()
    {
        return $this->idMatiere;
    }




    /**
     * Set nomMatiere
     *
     * @param string $nomMatiere
     *
     * @return matieres
     */
    public function setNomMatiere($nomMatiere)
    {
        $this->nomMatiere = $nomMatiere;

        return $this;
    }

    /**
     * Get nomMatiere
     *
     * @return string
     */
    public function getNomMatiere()
    {
        return $this->nomMatiere;
    }

    /**
     * Set sections
     *
     * @param string $sections
     *
     * @return matieres
     */
    public function setSections($sections)
    {
        $this->sections = $sections;

        return $this;
    }

    /**
     * Get sections
     *
     * @return string
     */
    public function getSections()
    {
        return $this->sections;
    }




}

