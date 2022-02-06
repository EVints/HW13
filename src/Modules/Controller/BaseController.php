<?php

namespace App\Modules\Controller;

abstract class BaseController
{

  abstract function getPage();


  public function someFunction()
  {
    echo 'some function';
    $this->getPage();
  }
}
