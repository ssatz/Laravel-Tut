<?php

namespace Services\Repository;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider {
    /*Ioc Container to Register the service*/
    public function register() {

        $this->app->bind('Services\Repository\IuserRepository', function() {
            return new UserRepository($this->app['sentry']);
        });
    }

}
