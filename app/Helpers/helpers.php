<?php

use App\Models\SiteSetting;
use App\Models\Feature;
use App\Models\Article;
use App\Models\Ad;
use App\Models\Contact;

if (!function_exists('getSiteSettings')) {
    function getSiteSettings() {
        return SiteSetting::first();
    }
}

if (!function_exists('getAllFeatures')) {
    function getAllFeatures() {
        return Feature::all();
    }
}

if (!function_exists('getArticlesWithRelations')) {
    function getArticlesWithRelations() {
        return Article::with('subjects', 'tags')->get();
    }
}

if (!function_exists('getAllAds')) {
    function getAllAds() {
        return Ad::all();
    }
}

if (!function_exists('getContactInfo')) {
    function getContactInfo() {
        return Contact::first();
    }
}
