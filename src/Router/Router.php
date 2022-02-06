<?php

namespace App\Router;

class Router
{
  private $map = [];

  public function addRoute($key, $controller)
  {
    $this->map[$key] = $controller;
  }

  public function getRoute($key)
  {
    return $this->map[$key] ?? $this->map['/'];
  }
}
