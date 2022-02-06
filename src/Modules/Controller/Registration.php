<?php

namespace App\Modules\Controller;

use App\Modules\View\Registration as RegistrationView;
use App\Modules\System\Post;
use App\DTO\User;
use App\Modules\DataBase\DB;

class Registration extends BaseController
{
  private $view;

  public function __construct()
  {
    $this->view = new RegistrationView();   //Здесь добавляется форма регистрации с функцией Рендер()
  }

  public function getPage()
  {
    $post = new Post();


    if ($post->isFormSended()) {
      $this->fixData($post);
    } else {
      $this->view->render();
    }
  }


  private function checkAuth($file, $post)
  {
    foreach ($file as $value) {
      if ($post->getValue('user_email') == str_getcsv($value, ";")[2]) {
        return true;
      }
    }
  }


  private function fixData(Post $post)
  {
    $user = new User();

    $file = file("/app/database/users.csv");

    if ($this->checkAuth($file, $post) == true) {
      $this->view->render();
      return false;
    } else {


      $user->setId((int) end($file)[0] + 1);

      $user->setName($post->getValue('user_name'));

      $user->setLogin($post->getValue('user_email'));

      $user->setPassword($post->getValue('user_password'));


      $db = new DB();

      $db->saveUser($user);
    }
  }
}
