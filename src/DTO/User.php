<?php

namespace App\DTO;


class User 
{   
    /**
     * @var integer
     */
    private $id;
    /**
     * @var string
     */
    private $login;
    /**
     * @var string
     */
    private $password;
    /**
     * @var string
     */
    private $name;


    public function setId(int $id) {
        $this->id = $id;
    }

    public function getId(): int    // двоеточие значит выход должен быть int,  если мы пишем где параметры в функции то это значит вход int
    {
        return $this->id;
    }

    public function setLogin(string $login) {
        $this->login = $login;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function setPassword(string $password)
     {
        $this->password = md5($password);
    }
    public function getPassword(): string
     {
        return $this->password;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function getName():string 
    {
        return $this->name;
    }
}