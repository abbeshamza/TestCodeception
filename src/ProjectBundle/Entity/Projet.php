<?php

namespace ProjectBundle\Entity;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\PreSerialize;
/**
 *
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\ProjetRepository")
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
     * @ORM\Column(name="date_creation", type="datetime")
     * @var DateTime
     */
    private $dateCreation;

    /**
     * @ORM\Column(name="date_livraison", type="datetime")
     * @var DateTime
     */
    private $dateLivraison;
    /**
     *
     * @ORM\Column(name="statut", type="string", length=255, nullable=true)
     */
    private $statut;

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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Projet
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
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

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Projet
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }
}
