<?php

namespace ProjectBundle\Entity;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\PreSerialize;
use JMS\Serializer\Annotation as Serialiser ;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
/**
 * @ExclusionPolicy("all")
 *
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\ProjetRepository")
 * @ORM\Table("projets")
 * @ORM\Entity
 */
class Projet extends Bundle
{

    /**
     * @Expose
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @Expose
     * @Assert\NotBlank(message="Nom projet requis")
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;
    /**
     * @ORM\Column(name="nom_dossier", type="string", length=255, nullable=true)
     */
    private $nomDossier;


    /**
     * @Expose
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
