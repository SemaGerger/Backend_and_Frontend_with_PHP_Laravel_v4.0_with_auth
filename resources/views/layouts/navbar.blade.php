<nav class="navbar navbar-expand-lg navbar-light bg-light bg-white fixed-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route(config('routes.routes.siteSettings.index')) }}">
            <img src="{{ asset('storage/images/logo5.gif') }}" alt="Logo" class="logo-img mr-2">
            <span>{{ $siteSettings->site_title }}</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route(config('routes.routes.siteSettings.index')) }}">Ana Sayfa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route(config('routes.routes.siteSettings.index')) }}#makaleler">Makaleler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route(config('routes.routes.contacts.index')) }}">İletişim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route(config('routes.routes.contacts.aboutPage')) }}">Hakkımızda</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
