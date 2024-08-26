@extends('layouts.app')

@section('meta_keywords', $article->meta_keywords ?? 'Varsayılan, anahtar, kelimeler')
@section('title', $article->title ?? 'Varsayılan Başlık')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="article-details mb-4">
                <h2>{{ $article->title }}</h2>
                <p class="text-muted">Yayın Tarihi: {{ $article->published_at ? $article->published_at->format('d/m/Y') : 'Tarih Yok' }}</p>
                <p><strong>Etiketler: </strong>
                    @if($article->tags->isEmpty())
                        <span class="badge badge-secondary">Etiket Yok</span>
                    @else
                        @foreach($article->tags as $tag)
                            <span class="badge badge-primary">{{ $tag->name }}</span>
                        @endforeach
                    @endif
                </p>
                
                <div class="article-content" id="content">
                    {!! $article->content1 !!}
                </div>
                
                @if($article->image_table)
                    <img src="{{ asset('storage/articles/' . $article->image_table) }}" class="img-fluid mb-3" alt="{{ $article->title }}">
                @else
                    <img src="{{ asset('path/to/default-image.jpg') }}" class="img-fluid mb-3" alt="Varsayılan Görsel">
                @endif
                
                <div class="article-content" id="content">
                    {!! $article->content2 !!}
                </div>
            </div>

            <!-- Reklam Alanları -->
            <div class="ads-section">
                <x-config('routes.routes.ads.index') /> 
            </div>
            
            <p><strong>Konu Başlıkları: </strong>
                @foreach($article->subjects as $subject)
                    <span>{{ $subject['name'] }}</span>@if(!$loop->last), @endif
                @endforeach
            </p>
        </div>
    </div>
</div>
@endsection
