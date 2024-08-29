<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GlobalDataMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       // global verileri view'lere paylaşmmadır. singloten yaklaşımı ile helpers.php den geliyor
       view()->share('siteSettings', getSiteSettings());
       view()->share('features', getAllFeatures());
       view()->share('articles', getArticlesWithRelations());
       view()->share('ads', getAllAds());
       view()->share('contact', getContactInfo());

       return $next($request);
    }
}
