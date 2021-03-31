<header>

    <!----------------Mobile Menu--------->

    <div class="mobile-menu-area navbar-fixed-top hidden-sm hidden-md hidden-lg">
        <nav class="mobile-menu" id="mobile-menu">
            <div class="sidebar-nav">
                <ul class="nav side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn mobile-menu-btn" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>

                    </li>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('postus.index') }}">News</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="{{ route('ourgallery.index') }}">Galleries</a></li>
                    <li><a href="{{ route('contactus.index') }}">Contact</a></li>
                    <li>
                        <div class="social">
                            <ul>
                                <li><a href="" class="facebook"><i class="fa  fa-facebook"></i>
                                    </a></li>
                                <li><a href="" class="twitter"><i
                                            class="fa  fa-twitter"></i></a></li>
                                <li><a href="" class="google"><i
                                            class="fa  fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="top_header_icon">
                <span class="top_header_icon_wrap">
                    <a  target="_blank" href="" title="Google" style="font-size: 11px;font-weight:bolder"><img src="{{ asset('assets/images/uzb.jpg')}}" width="18px"> UZB</a>
                </span>
                <span class="top_header_icon_wrap">
                    <a  target="_blank" href="" title="Google" style="font-size: 11px;font-weight:bolder"><img src="{{ asset('assets/images/rus.jpeg')}}" width="18px"> RUS</a>
                </span>
                <span class="top_header_icon_wrap">
                    <a  target="_blank" href="" title="Google" style="font-size: 11px;font-weight:bolder"><img src="{{ asset('assets/images/eng.webp')}}" width="18px"> ENG</a>
                </span>
                
            </div>
            <div id="showLeft" class="nav-icon">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

<!----------------------Mobile Menu End----------------->

    <div class="top_header hidden-xs">
        <div class="container">
            <div class="row">
                <div class="top_header hidden-xs">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="top_header_icon">
                                    <span class="top_header_icon_wrap">
                                        <a  target="_blank" href="" title="Google" style="font-size: 16px;font-weight:bolder"><img src="{{ asset('assets/images/uzb.jpg')}}" width="38px"> UZB</a>
                                    </span>
                                    
                                    <span class="top_header_icon_wrap">
                                        <a  target="_blank" href="" title="Google" style="font-size: 16px;font-weight:bolder"><img src="{{ asset('assets/images/eng.webp')}}" width="38px" height="25px"> ENG</a>
                                    </span>
                                    <span class="top_header_icon_wrap">
                                        <a  target="_blank" href="" title="Google" style="font-size: 16px;font-weight:bolder"><img src="{{ asset('assets/images/rus.jpeg')}}" width="38px"> RUS</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top_banner_wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4 col-sm-4">
                    <div class="header-logo">

                        <a href="home-style-one.html">
                            <img class="td-retina-data img-responsive" src="{{ asset('assets/images/logo.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xs-8 col-md-8 col-sm-8 hidden-xs">
                    <div class="header-banner">
                        <a href=""><img class="td-retina img-responsive"
                                src="{{ asset('assets/images/top-bannner.jpg')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container hidden-xs">
        <nav class="navbar">
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="{{ Str::contains(Route::currentRouteName(), 'home') ? 'oq' : null }}"><a href="{{ route('home') }}" class="a">Home</a></li>
                    <li class="{{ Str::contains(Route::currentRouteName(), 'postus') ? 'oq' : null }}"><a href="{{route('postus.index')}}" class="a">News</a></li>
                    <li><a href="" class="category01">About Us</a></li>
                    <li class="{{ Str::contains(Route::currentRouteName(), 'ourgallery') ? 'oq' : null }}"><a href="{{ route('ourgallery.index') }}" class="a">Galleries</a></li>
                    <li class="{{ Str::contains(Route::currentRouteName(), 'contactus') ? 'oq' : null }}"><a href="{{ route('contactus.index') }}" class="a">Contact</a></li>
                </ul>
            </div>

        </nav>
    </div>
</header>