<?php

namespace App\Modules\Controller;

class RegSuccess extends BaseController
{

    public function getPage()
    {
        include("/app/pages/constModules/header.php");
        include("/app/pages/constPages/reg_successfull.php");
        include("/app/pages/constModules/footer.php");
    }
}
