<?php

namespace App\Modules\View;

class Login
{
  public function render()
  {

    include("/app/pages/constModules/header.php");
    include("/app/pages/constPages/login.php");
    include("/app/pages/constModules/footer.php");


  }
}