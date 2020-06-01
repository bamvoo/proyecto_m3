<?php

declare(strict_types=1);

include_once '../adapters/MySQLAdapter.php';
include_once '../models/User.php';

class UserDataAccesObject
{
    private $user;
    private $db;

    public function __construct(User $user, MySQLAdapter $db){
        $this->user = $user;
        $this->db = $db;
    }

    public function adapter(MySQLAdapter $db){
        $this->db = $db;
    }

    public function user(User $user){
        $this->user = $user;
    }

}
