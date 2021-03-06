<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use \App\Billing\Stripe;

class AppServiceProvider extends ServiceProvider
{

    //protected $defer = true;


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
    view()->composer('layouts.sidebar', function ($view){

        $view->with(compact('archives', 'tags'));

        $view->with('archives', \App\Post::archives());

        $view->with('tags', \App\Tag::has('posts')->pluck('name'));
    });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Stripe::class, function (){

            return new Stripe(config('services.stripe.secret'));
        });



    }
}
