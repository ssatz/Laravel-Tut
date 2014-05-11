<?php

namespace Services\Repository;

use Cartalyst\Sentry\Sentry;

class UserRepository implements IuserRepository {

    private $user;

    public function __construct(Sentry $sentry) {

        $this->user = $sentry;
    }
    /*
     * Main  class authentication
     */
    public function authenticate($credential, $remember) {
        
        return $this->user->authenticate($credential, $remember);
    }

    public function getLoggedInUser() {

        return $this->user->getUser();
    }
    /*
     * Logout
     */
    public function getLogout() {

        $this->user->logout();
    }
    /*
     * 
     */
    public function findAllUsers() {

        return $this->user->findAllUsers();
    }

}
