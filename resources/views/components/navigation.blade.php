<div>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Start with Price Drop Watcher</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/#about')}}">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/#services')}}">Services</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/#portfolio')}}">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/#contact')}}">Contact</a></li>
                    @if (Route::has('login'))
                            @auth
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/home') }}">Home</a>
                            @else
                            </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Login</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</div>
