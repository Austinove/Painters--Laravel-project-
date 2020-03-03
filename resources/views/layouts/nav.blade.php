<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
    <a class="navbar-brand" href="{{route('home')}}">House<span>Painter</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
            
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="{{route('home')}}" class="nav-link"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a></li>
        @if (Auth::user())
                    @if (Auth()->user()->role=="C")
                        <li class="nav-item"><a href="{{route('clientDashboard')}}" class="nav-link"> <i class="fa fa-id-badge" aria-hidden="true"></i>Client</a></li>
                        <li class="nav-item"><a href="{{route('clientProfile')}}" class="nav-link"><i class="fa fa-question-circle" aria-hidden="true"></i>Profile</a></li>
                    @elseif (Auth()->user()->role=="P")
                        <li class="nav-item"><a href="{{route('opportunities')}}" class="nav-link"> <i class="fa fa-paint-brush" aria-hidden="true"></i>Opportunities</a></li>
                        <li class="nav-item"><a href="{{route('painterDashboard')}}" class="nav-link"> <i class="fa fa-bullseye" aria-hidden="true"></i>Painter</a></li>
                        <li class="nav-item"><a href="{{route('painterProfile')}}" class="nav-link"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                    @endif
                <li class="nav-item">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
                        Logout 
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
        @else
            <li class="nav-item"><a href="#" class="nav-link login"><i class="fa fa-sign-in" aria-hidden="true"></i> Signin</a></li>
        @endif
        <li class="nav-item"><a href="{{route('contactUs')}}" class="nav-link"><i class="fa fa-phone" aria-hidden="true"></i> Contact</a></li>
        
        </ul>
    </div>
    </div>
</nav>