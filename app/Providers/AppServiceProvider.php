<?php

namespace App\Providers;

use App\View\Components\Alert;
use App\View\Components\Forms\Input;
use App\View\Components\Forms\Button;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Blade::component('package-alert', Alert::class);
        Blade::component('input', Input::class);
        Blade::component('button', Button::class);
        // Blade::componentNamespace('Input\\Button', 'forms');
        Blade::componentNamespace('Nightshade\\Views\\Components', 'nightshade');

        View::share('minombre', 'Elmer Entenza');
        View::share('appTitle', 'App Title');
    }
}
