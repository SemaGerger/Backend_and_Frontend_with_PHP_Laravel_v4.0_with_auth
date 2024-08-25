    <!-- Özellikler 150*150-->
    @php
        $features = $features ?? []; 
    @endphp 

    <div id="features" class="container features py-1">
        <div class="row">
            @foreach ($features as $feature) 
                <div class="col-md-4 feature-item text-center pt-5">  
                    <img src="{{ asset('storage/images/' . $feature->featured_image_table) }}" class="img-fluid mb-3" alt="{{ $feature->featured_title }}">
                    <h3>{{ $feature->featured_title ?? 'Özellik Başlığı' }}</h3>
                    <p>{{ $feature->featured_description ?? 'Özellik Açıklaması' }}</p>
                </div>
            @endforeach
        </div>
        <div id="makaleler"></div>
    </div>


