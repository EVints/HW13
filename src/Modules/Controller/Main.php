<?php

namespace App\Modules\Controller;

class Main extends BaseController
{

  public function getPage()
  {
    include("/app/pages/constModules/header.php");
    include("/app/pages/constPages/main.php");
    include("/app/pages/constModules/footer.php");
  }

}
