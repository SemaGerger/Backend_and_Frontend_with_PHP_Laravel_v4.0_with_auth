@extends('layouts.app')

@section('title', $settings->site_title ?? 'Ana Sayfa')

@section('content')

        @include('layouts.banner')
        @include('components.features.index')
        @include('pages.articles.index')
      
      
        
      
@endsection

