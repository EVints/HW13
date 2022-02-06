<?php

namespace App\Modules\Controller;

use App\Modules\View\Login as LoginView;
use App\Modules\System\Post;


class Login extends BaseController
{
  private $view;

  public function __construct()
  {
    $this->view = new LoginView();
  }




  public function getPage()
  {
    $post = new Post();
    $file = file("/app/database/users.csv");

    if ($post->isFormSended()) {
      return $this->checkAuth($file, $post);
    } else {
      $this->view->render();
    }
  }

  private function checkAuth($file, $post)
  {
    foreach ($file as $value) {
      if (trim($post->getValue('userEmail')) == trim(str_getcsv($value, ";")[2]) &&  md5(trim($post->getValue('userPassword'))) == trim(str_getcsv($value, ";")[3])) {
        setcookie('userReg', md5($post->getValue('userEmail')), time() + 3600, "/");
        header("Location: {$_SERVER['HTTP_ORIGIN']}");
      }
    }
    $this->view->render();
  }
}
