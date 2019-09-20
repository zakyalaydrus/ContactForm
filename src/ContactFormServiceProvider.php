<?php
namespace mzakyalaydrus\contactform;
use Illuminate\Support\ServiceProvider;

class ContactFormServiceProvider extends ServiceProvider {
    public function boot(){
        // MyVendor\contactform\src\ContactFormServiceProvider.php
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views','contactform');
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
    }
    public function register(){

    }
}