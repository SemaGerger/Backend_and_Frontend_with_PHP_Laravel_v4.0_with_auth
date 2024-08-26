<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\SiteSetting;
use App\Models\Feature;
use App\Models\Article;
use App\Models\Ad;
use App\Models\Contact;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $settings = SiteSetting::first();

         View::composer('index', function ($view) use ($settings) {
            $view->with('settings', $settings );
     
        });
        View::composer('layouts.*', function ($view) use ($settings) {
            $view->with('settings', $settings);
        });

        View::composer('components.features.*', function ($view) {
            $view->with('features', Feature::all());

        });
   
        View::composer('pages.articles.*', function ($view){
            $articles = Article::with('subjects', 'tags')->get();
          
            $view->with('articles', $articles);

        }); 

        View::composer('components.ads.*', function ($view) {
            $view->with('ads', Ad::all());

        });
        View::composer('pages.contacts.*', function ($view) {
            $view->with('ads', Contact::first());

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
