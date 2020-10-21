<header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main fixed-top navbar-expand-lg navbar-transparent navbar-light headroom">
        <div class="container">
            <div class="logo">
                <a href="{{ route('home') }}"><h3 style="color: wheat">CCIMS</h3></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <div class="logo">
                                <a><img class="img-fluid" src="{{ asset('assets/images/logo-white.png') }}" width="164" height="25" alt=""></a>
                            </div>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="navbar-nav navbar-nav-hover align-items-lg-center ml-auto">
                    <nav id="navigation" class="style-1">
                        <ul id="responsive">
                            <li>
                                <a class="current" href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <a href="#">Venues</a>
                                <ul>
                                    <li>
                                        <a href="{{ route('venue.index_list') }}">All Venues</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('venue.favorite') }}">Favorites</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('venue.pending_list') }}">Pending Request</a>
                            </li>
                            @if(!auth()->check())
                                <li>
                                    <a href=" {{ route('register') }} ">Register</a>
                                </li>
                            @endif
                            <li>
                                @auth
                                    <a href="#">{{ getUserName() }}</a>
                                    <ul>
                                        <li><a href="{{ route('user.profile') }}"> Profile </a></li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                        </li>
                                    </ul>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                @else
                                    <a href="{{route('login')}}">Login</a>
                                @endauth
                            </li>
                        </ul>
                    </nav>
                    @auth
                        @if(getUserType() == getTypeHallOwner())
                            <div class="header-widget">
                                <a class="btn btn-neutral btn-icon btn-radius" href="{{ route('venue.create') }}">Add Venue <i class="fa fa-plus"></i></a>
                            </div>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </nav>
</header>
