<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Request as FlightRequest;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        View::composer('*', function ($view) {
            if(Auth::user()){
                if(Auth::user()->role=='customer')
                {
                    $view->with('pendings', FlightRequest::where('status', 'pending')->where('user_id', Auth::id())->latest()->get()->count());   
                    $view->with('approved', FlightRequest::where('status', 'approved')->where('user_id', Auth::id())->latest()->get()->count());   
                    $view->with('cancelled', FlightRequest::where('status', 'cancelled')->where('user_id', Auth::id())->latest()->get()->count());
                }
                else{
                    $view->with('pendings', FlightRequest::where('status', 'pending')->latest()->get()->count());   
                    $view->with('approved', FlightRequest::where('status', 'approved')->latest()->get()->count());   
                    $view->with('cancelled', FlightRequest::where('status', 'cancelled')->latest()->get()->count());
                } 
            }                          
        });        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
