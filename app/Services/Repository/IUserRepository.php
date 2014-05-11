<?php namespace Services\Repository;

 interface IuserRepository{
    public function getLoggedInUser();
    public function getLogout();
    public function findAllUsers();
    public function authenticate($credential,$remember);
}

