<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index()
    {
        // $features = Feature::all();
      
     return view(config('routes.views.siteSettings.index'));
        //return view(config('routes.views.siteSettings.index')->compact('features'));
        //return view('components.features.index', ['features' => $features]);
        //return view('components.features.index')->with('features', $features);

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Feature $feature)
    {
        //
    }

    public function edit(Feature $feature)
    {
        //
    }

    public function update(Request $request, Feature $feature)
    {
        //
    }

    public function destroy(Feature $feature)
    {
        //
    }
}
