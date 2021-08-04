<?php

namespace App\Providers;

use App\Http\ViewCreators\ProfileCreator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewCreatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // View::composer(['welcome', 'greetings'], 'App\Http\ViewComposers\ProfileComposer');
        View::creator('greetings', ProfileCreator::class);
    }
}
