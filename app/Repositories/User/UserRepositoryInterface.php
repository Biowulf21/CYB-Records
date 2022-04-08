<?php


namespace App\Repositories\User;

interface UserRepositoryInterface
{
    public function storeUser($data);
    public function login($data);
}
