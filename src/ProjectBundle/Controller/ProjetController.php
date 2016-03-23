<?php
/**
 * Created by PhpStorm.
 * User: hab
 * Date: 22/03/16
 * Time: 11:38
 */

namespace ProjectBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations\RouteResource;

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
     * Get contract
     *
     * @ApiDoc(
     *     section="20. Contract Services",
     *     description="Get contract",
     *     requirements={
     *      {"name"="id", "requirement"="\d+", "dataType"="integer", "required"=true, "description"="contract id"},
     *    },
     *     statusCodes={
     *        200={
     *            "200"="The request has succeeded"
     *            },
     *        400={
     *             "40074"="Contract not found",
     *            },
     *        403={
     *             "40311"="Denied access to contract"
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
       // $data = $req->parameters("username");
        die($req->get('username'));
    }
}