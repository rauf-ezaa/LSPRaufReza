<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand"></span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                @guest
                    
                    <li class="nav-item {{Request::is('dashboard1') ? '' : '' }}"><a href="{{route('dashboard1')}}" class="nav-link">Home</a></li>
                    <li class="nav-item {{request()->is('profil') ? '' : '' }}"><a href="{{route('profil')}}" class="nav-link">Profil</a></li>

                    
                    <li class="nav-item {{request()->is('ekskul') ? 'active' : '' }}"><a href="{{route('ekskul')}}" class="nav-link">Ekstrakurikuler</a></li>
                   
                    
                @endguest
                @auth
               
                <li class="nav-item {{Request::is('dashboard1') ? '' : '' }}"><a href="{{route('dashboard1')}}" class="nav-link">Home</a></li>
                    <li class="nav-item {{request()->is('profil') ? '' : '' }}"><a href="{{route('profil')}}" class="nav-link">Profil</a></li>

                    
                    <li class="nav-item {{request()->is('ekskul') ? 'active' : '' }}"><a href="{{route('ekskul')}}" class="nav-link">Ekstrakurikuler</a></li>
                    
                @endauth
            </ul>
        </div>
    </div>
</nav>
