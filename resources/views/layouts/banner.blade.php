
<div id="bannerCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <!-- Slide 1 -->
    <div class="carousel-item active">
      <img src="{{ asset('storage/images/' . ($siteSettings->banner_image_table ?? '/images/default-banner.jpg')) }}" 
           class="d-block w-100" 
           alt="Banner Image">
      <div class="carousel-caption d-none d-md-block">
        <h5>{{ $siteSettings->site_title ?? 'Site Başlığı' }}</h5>
        <p>{{ $siteSettings->site_description ?? 'Site Açıklaması' }}</p>
        <a href="{{ route(config('routes.routes.filter.index')) }}" class="btn btn-warning btn-lg disabled">Soru Bul Çok Yakında</a>
      </div>
    </div>
  
    <div class="carousel-item">
      <img src="{{ asset('storage/images/sinav_home_photo3.jpg') }}" 
      alt="Sinav Home Photo" 
      class="d-block w-100" >

        <div class="carousel-caption d-none d-md-block">
          <h5>{{ $siteSettings->site_title ?? 'Site Başlığı' }}</h5>
          <p>{{ $siteSettings->site_description ?? 'Site Açıklaması' }}</p>
          <a href="{{ route(config('routes.routes.filter.index')) }}" class="btn btn-warning btn-lg">Soru Bul</a>
        </div>
    </div>

    <div class="carousel-item">
      <img src="{{ asset('storage/images/sinav_home_photo4.jpg') }}" 
      alt="Sinav Home Photo" 
      class="d-block w-100" >

        <div class="carousel-caption d-none d-md-block">
          <h5>{{ $siteSettings->site_title ?? 'Site Başlığı' }}</h5>
          <p>{{ $siteSettings->site_description ?? 'Site Açıklaması' }}</p>
          <a href="{{ route(config('routes.routes.filter.index')) }}" class="btn btn-warning btn-lg">Soru Bul</a>
        </div>
    </div>
   


  </div>
  <a class="carousel-control-prev" href="#bannerCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Önceki</span>
  </a>
  <a class="carousel-control-next" href="#bannerCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Sonraki</span>
  </a>
</div>
