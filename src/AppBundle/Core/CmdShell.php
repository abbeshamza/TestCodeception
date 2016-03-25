<?php
/**
 * Created by PhpStorm.
 * User: hab
 * Date: 25/03/16
 * Time: 09:06
 */

namespace AppBundle\Core;


class CmdShell

{

    public function createFolder($path , $name)
    {
        shell_exec('cd ../tests/'.$path.' ; mkdir '.$name.' ;');
    }
    public function createBootstrapTest($path)
    {
        shell_exec('cd ../tests/'.$path.' ; php bin/codecept bootstrap ;');
    }
    public function createFunctionnalTest($path , $name)
    {
        shell_exec('cd ../tests/functional/'.$path.' ;php bin/codecept g:cest functional '.$name .' ;');
    }
}