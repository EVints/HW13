<?php

namespace App\Modules\Controller;

class Weather extends BaseController
{

    public function getPage()
    {
        include("/app/pages/constModules/header.php");
        include("/app/pages/constPages/weather.html");
        include("/app/pages/constModules/footer.php");
    }
}
