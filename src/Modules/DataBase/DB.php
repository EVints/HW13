<?php

namespace App\Modules\DataBase;

use App\DTO\User;
use App\Modules\Controller\RegSuccess;


class DB
{

    private $dbPath = '/app/database/users.csv';

    public function __construct()
    {
        if (!is_file($this->dbPath)) {
            touch($this->dbPath);
        }
    }

    public function saveUser(User $user)
    {

        $string = strtr(
            '%id;%name;%login;%password',
            [
                '%id' => $user->getId(),
                '%login' => $user->getLogin(),
                '%password' => $user->getPassword(),
                '%name' => $user->getName(),
            ]
        );

        file_put_contents($this->dbPath, $string . PHP_EOL, FILE_APPEND);

        $regSuccess = new RegSuccess();

        $regSuccess->getPage();
    }
}
