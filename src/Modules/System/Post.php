<?php

namespace App\Modules\System;

class Post
{
  private $data;

    public function __construct()
    {
      $this->data = $_POST;
    }
    public function isFormSended(): bool
    {
      return array_key_exists('submit', $this->data);
    }
    public function getValue($val) 
    {
      return $this->data[$val];
    }
}
