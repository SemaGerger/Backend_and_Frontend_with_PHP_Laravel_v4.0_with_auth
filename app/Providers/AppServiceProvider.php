<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use Illuminate\Support\Facades\View;
// use App\Models\SiteSetting;
// use App\Models\Feature;
// use App\Models\Article;
// use App\Models\Ad;
// use App\Models\Contact;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
    
    // View::share('siteSettings', getSiteSettings()); //singloten yaklaşımı ile helpers.php den geliyor

    // View::composer('*', function ($view) {
    //     $view->with('features', getAllFeatures());
    // });

    // View::composer('pages.articles.*', function ($view) {
    //     $articles = getArticlesWithRelations();
    //     $view->with('articles', $articles);
    // });

    // View::composer('components.ads.*', function ($view) {
    //     $view->with('ads', getAllAds());
    // });

    // View::composer('pages.contacts.*', function ($view) {
    //     $view->with('contact', getContactInfo());
    // });


    //---------------------------------
       
        // View::share('siteSettings', SiteSetting::first());
              //  View::composer('index', function ($view) use ($settings) {
        //     $view->with('settings', $settings );
        // $settings = SiteSetting::first();

        //  View::composer('index', function ($view) use ($settings) {
        //     $view->with('settings', $settings );
     
        // });
        // View::composer('layouts.*', function ($view) use ($settings) {
        //     $view->with('settings', $settings);
        // });

        // View::composer('components.features.*', function ($view) {
        //     $view->with('features', Feature::all());

        // });
   
        // View::composer('pages.articles.*', function ($view){
        //     $articles = Article::with('subjects', 'tags')->get();
          
        //     $view->with('articles', $articles);

        // }); 

        // View::composer('components.ads.*', function ($view) {
        //     $view->with('ads', Ad::all());

        // });
        // View::composer('pages.contacts.*', function ($view) {
        //     $view->with('ads', Contact::first());

        // });
   


    }
}
