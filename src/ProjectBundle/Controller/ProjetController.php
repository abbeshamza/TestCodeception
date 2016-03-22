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
class ProjetController extends Controller
{

    public function getAction(Request $req)
    {
        var_dump($req);
    }
}