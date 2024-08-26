<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\SiteSetting;
use App\Models\Feature;
use App\Models\Article;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
         View::composer('index', function ($view) {
            $view->with('settings', SiteSetting::first());
     
        });
        
        View::composer('components.features.*', function ($view) {
            $view->with('features', Feature::all());

        });
   
        View::composer('pages.articles.*', function ($view){
            $articles = Article::with('subjects', 'tags')->get();
            $view->with('articles', $articles);

        }); 





    //hepsine uygular
    //view()->composer('*', function ($view) {
    //  $articles = Article::with('subjects', 'tags')->get();
    //  $view->with('articles', $articles);
    //});
    
    //dışarıdan değişken uygular
    //$articles = Article::with('subjects', 'tags')->get();
    // View::composer('pages.articles.*', function ($view) use ($articles) {
    //     $view->with('articles', $articles);
    //}); 

    }
}
