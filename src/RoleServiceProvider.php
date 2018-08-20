<?php
/**
 * Created by PhpStorm.
 * User: STEEF
 * Date: 20/08/2018
 * Time: 16:25
 */

namespace MustaphaIbnel\Role;


use Illuminate\Support\ServiceProvider;

class RoleServiceProvider extends ServiceProvider
{

    public function boot(){
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'roles');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/role')
        ]);
    }
    public function register(){

    }
}