<?php

namespace App\Modules\Controller;

class Movies extends BaseController
{

    public function getPage()
    {
        include("/app/pages/constModules/header.php");
        include("/app/pages/constPages/movies_search.html");
        include("/app/pages/constModules/footer.php");
    }
}
