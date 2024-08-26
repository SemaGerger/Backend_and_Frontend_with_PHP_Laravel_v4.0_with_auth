<!-- @if($ads->count() > 0)
    <div class="ad-container my-5">
        @foreach($ads as $ad)
            <div class="ad-area mb-3">
                <a href="{{ $ad->link }}" target="_blank">
                    @if($ad->image_url)
                        <img src="{{ asset('images/' . $ads->ad_image_table) }}" class="img-fluid mb-3" alt="{{ $ad->title }}">
                    @else                            
                        <p>{{ $ad->content }}</p>
                    @endif
                </a>
            </div>
        @endforeach
    </div>
@endif -->


<div class="ads">
    @foreach($ads as $ad)
        <div class="ad-item">
            <a href="{{ $ad->link }}" target="_blank">
                <img src="{{ asset('storage/images/' . $ad->ad_image_table) }}" alt="{{ $ad->title }}" class="img-fluid">
                <p>{{ $ad->title }}</p>
            </a>
        </div>
    @endforeach
</div>
