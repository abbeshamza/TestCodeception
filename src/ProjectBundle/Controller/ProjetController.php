<?php
/**
 * Created by PhpStorm.
 * User: hab
 * Date: 22/03/16
 * Time: 11:38
 */

namespace ProjectBundle\Controller;
use ProjectBundle\Entity\Projet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use ProjectBundle\Form\ProjetType;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use AppBundle\Core\ApiResponse;

/**
 * Class ApiLegalController for legal pages
 *
 * @package Controller
 * @author Fondative <devteam@fondative.com>
 * @copyright 2015-2016 Fondative
 * @version 1.0.0
 * @since Class available since Release 1.0.0
 *
 */
/**
 * @RouteResource("projet")
 */
class ProjetController extends Controller
{
    /**
     * Post Project
     *
     * @ApiDoc(
     *     section="2. Projet Services",
     *     description="Post Project",
     *      parameters={
     *      {"name"="name", "dataType"="string", "required"=true, "description"="Name of project"},
     *      {"name"="status", "dataType"="string", "required"=true, "description"="Status of project : open / closed"},
     *       },
     *
     *     statusCodes={
     *        200={
     *            "200"="The request has succeeded"
     *            },
     *        400={
     *             "40074"="Project not found",
     *            },
     *        403={
     *             "40311"="Denied access to Project"
     *            },
     *        500={
     *            "5001"="An internal error has occurred"
     *            }
     *
     *     }
     * )
     */

    public function postAction(Request $req)
    {
        $projectManager = $this->get('test_project.projet_manager');
        $project = $projectManager->createProjectFromRequest($req);
        if ( $projectManager->projectValidation($project) )
        {
            $projectManager->addProjet($project);
            return new ApiResponse( $project);
        }

        else
            return new ApiResponse( $project, 401);


    }

}