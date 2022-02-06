<?php

namespace App\Modules\Controller;



class Logout extends BaseController
{

    public function getPage()
    {

        setcookie("userReg", "", time() - 3600, "/");

        header("Location: http://{$_SERVER['HTTP_HOST']}");
    }
}
