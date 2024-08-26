<div id="cards"> </div>
<div id="cards" class="container my-5">
    <div class="row">
        @foreach ($articles as $article)
            <div class="col-md-4 mb-4">
            <a href="{{ route(config('routes.routes.articles.show'), ['slug' => $article->slug]) }}" class="card-link">
            <div class="card">
                        <img src="{{ asset('storage/articles/' . $article->image_table) }}" alt="{{ $article->title }}" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{!! \Illuminate\Support\Str::limit(strip_tags($article->content1), 200, '...') !!}</p>
                        </div>
                        <div class="card-footer text-muted">
                            <small>Yayın Tarihi: {{ $article->published_at ? $article->published_at->format('d/m/Y') : 'Tarih Yok' }}</small>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
   
   
