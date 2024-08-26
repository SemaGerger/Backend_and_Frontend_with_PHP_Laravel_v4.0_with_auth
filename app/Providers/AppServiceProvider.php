<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\SiteSetting;
use App\Models\Feature;
use App\Models\Article;

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
      
  
    //     view()->composer('*', function ($view) {
    //         $view->with('settings', SiteSetting::first());
    //         $view->with('features', Feature::first());
    //    });
       View::composer('index', function ($view) {
        $view->with('settings', SiteSetting::first());
       
        //$view->with('features', Feature::all());
        // $view->with('articles', Article::with('subjects', 'tags')->get());
     
        });
        View::composer('components.features.*', function ($view) {
            $view->with('features', Feature::all());
        });
        View::composer('pages.articles.*', function ($view) {
            $articles = Article::with('subjects', 'tags')->get();
            $view->with('articles', $articles);
        }); 
    }
}
