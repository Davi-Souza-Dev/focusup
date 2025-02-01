<?php

namespace App\Providers;

use App\Models\Tag;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // ENVIANDO AS TAGS PARA TODAS AS VIEWS
        $tags = Tag::all();
        view()->share('tags',$tags);
    }
}
