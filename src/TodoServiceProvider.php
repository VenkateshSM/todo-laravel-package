<?php

/**
 * Created by PhpStorm.
 * User: Venkatesh SM.
 * Date: 1/10/2017
 * Time: 11:09 PM
 */

namespace venkateshsm\Todo;

use Illuminate\Support\ServiceProvider;

class TodoServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //loading the routes file
        require __DIR__.'/Http/routes.php';

        //defining path for views
        $this->loadViewsFrom(__DIR__.'/../views','todo');

        $this->publishes([
            __DIR__.'/Migrations/2017_01_10_000000_create_todo_table.php' => base_path('database/migrations/2017_01_10_000000_create_todo_table.php'),
        ]);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('todo',function($app){
             return new Todo;
        });
    }

}