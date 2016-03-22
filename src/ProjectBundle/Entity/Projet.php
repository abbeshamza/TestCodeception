<?php

namespace ProjectBundle\Entity;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * User
 *
 * @ORM\Table("projets")
 * @ORM\Entity
 */
class Projet extends Bundle
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @Assert\NotBlank(message="Nom projet requis")
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;
    /**
     * @ORM\Column(name="nom_dossier", type="string", length=255, nullable=true)
     */
    private $nomDossier;


    /**
     * @ORM\Column(name="dateCreation", type="datetime")
     * @var DateTime
     */
    private $dateCreqtion;


    /**
     * @ORM\Column(name="dateLivraison", type="datetime")
     * @var DateTime
     */
    private $dateLivraison;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Projet
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nomDossier
     *
     * @param string $nomDossier
     *
     * @return Projet
     */
    public function setNomDossier($nomDossier)
    {
        $this->nomDossier = $nomDossier;

        return $this;
    }

    /**
     * Get nomDossier
     *
     * @return string
     */
    public function getNomDossier()
    {
        return $this->nomDossier;
    }

    /**
     * Set dateCreqtion
     *
     * @param \DateTime $dateCreqtion
     *
     * @return Projet
     */
    public function setDateCreqtion($dateCreqtion)
    {
        $this->dateCreqtion = $dateCreqtion;

        return $this;
    }

    /**
     * Get dateCreqtion
     *
     * @return \DateTime
     */
    public function getDateCreqtion()
    {
        return $this->dateCreqtion;
    }

    /**
     * Set dateLivraison
     *
     * @param \DateTime $dateLivraison
     *
     * @return Projet
     */
    public function setDateLivraison($dateLivraison)
    {
        $this->dateLivraison = $dateLivraison;

        return $this;
    }

    /**
     * Get dateLivraison
     *
     * @return \DateTime
     */
    public function getDateLivraison()
    {
        return $this->dateLivraison;
    }
}
