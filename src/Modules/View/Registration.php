<?php

namespace App\Modules\View;

class Registration
{
  public function render()
  {

    include("/app/pages/constModules/header.php");
    include("/app/pages/constPages/registration_form.php");
    include("/app/pages/constModules/footer.php");


  }
}
