@extends('layouts.app')

@section('title', 'Hakkımızda')

@section('content')
<div class="jumbotron jumbotron-fluid text-center" style="background-color: #f8f9fa; padding: 4rem 2rem; margin: 0; display: flex; align-items: center; justify-content: center; height: 100vh;">
    <div class="container">
        <h2 class="display-4" style="font-size: 3rem;">Hakkımızda</h2>
        <p class="lead" style="font-size: 1.5rem;">
            Sınavlara hazırlanan öğrencilere ve adaylara en iyi şekilde destek olmak için buradayız.
        </p>
        <p style="font-size: 1.2rem;">
            Eksik olduğun konulara odaklanarak gelişim kaydet. Yapay zeka destekli sınavlarımız, senin için en uygun soruları sunar.
        </p>
        <p style="font-size: 1.2rem;">
            Kendini test et, sınavlara güçlü bir şekilde hazırlan!
        </p>
        <div class="mt-4">
            <a href="{{ route(config('routes.routes.contacts.index')) }}" class="btn btn-primary btn-lg" style="font-size: 1.5rem;">Bize Ulaşın</a>
        </div>
        <p class="text-muted mt-3" style="font-size: 1.2rem;">
            Sorularınız ve önerileriniz bizim için önemli. İletişime geçerek sınav topluluğumuza katkıda bulunun.
        </p>
    </div>
</div>
@endsection


@section('footer')
<!-- footer yok -->
@endsection