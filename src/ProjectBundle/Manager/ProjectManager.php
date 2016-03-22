<?php
/**
 * Created by PhpStorm.
 * User: hab
 * Date: 22/03/16
 * Time: 12:22
 */

namespace ProjectBundle\Manager;
use AppBundle\Manager\BaseManager;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;


class ProjectManager extends BaseManager
{
    protected $em;
    protected $container;

    public function __construct(EntityManager $em, $container)
    {
        $this->em = $em;
        $this->container = $container;
    }

    public function getRepository()
    {
        return $this->em->getRepository('ProjectBundle:Projet');
    }

    public function loadProjetById($id){
        return $this->getRepository()->findOneBy(array('id' => $id));
    }

    public function loadProjetByName($name){
        return $this->getRepository()->findOneBy(array('name' => $name));
    }

    public function addProjet($projet){
        $this->persistAndFlush($projet);
    }


}