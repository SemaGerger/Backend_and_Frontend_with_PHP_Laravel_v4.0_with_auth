
<footer class="bg-light text-black pt-4" style="text-align: center; padding: 20px 0; background-color: aliceblue;">
    <div class="container">
        <div class="row">
            <!-- Company -->
            <div class="col-md-4">
                <h5>Sınavım Var</h5>
                <p>Sayfamızda, sizler için bilgi dolu sınav ve makaleler sunuyoruz. Amacımız, başarıya giden yolda size rehberlik etmek ve ihtiyaçlarınıza uygun kaynaklar sağlamaktır.</p>
                
            </div>
            <!-- Quick links -->
            <div class="col-md-4">
                <h5>Hızlı Menü</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('site.index') }}" class="text-black">Anasayfa</a></li>
                    <li><a href="{{ route(config('routes.routes.contacts.aboutPage')) }}" class="text-black">Hakkımızda</a></li>
                    <li><a href="{{ route(config('routes.routes.contacts.index')) }}" class="text-black">İletişim</a></li>
                </ul>
            </div>
            <!-- Contact -->
            <div class="col-md-4">
                <h5>Bize Ulaşın</h5>
                <ul class="list-unstyled">
                    <!-- <li><i class="fas fa-envelope"></i> sky.gerger1@gmail.com</li>
                    <li><i class="fas fa-phone"></i> +000 000 0000</li> -->
                    
                    <li><i class="fas fa-map-marker-alt"></i> Üsküdar / İstanbul / Türkiye</li>
                    <li><i class="fas fa-envelope"></i> iletişim sayfamızdan bize ulaşabilirsiniz</li>
                
                </ul>
            </div>
        </div>
        <hr class="bg-white">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="mb-0">&copy; 2024 Sınavım Var Sitesi</p>
            </div>
        </div>
    </div>
</footer>

