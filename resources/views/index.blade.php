@extends('layouts.app')

@section('title', $settings->site_title ?? 'Ana Sayfa')

@section('content')

    @include('layouts.banner')
    @include(config('routes.views.features.index'))
    @include(config('routes.views.articles.index'))

@endsection


