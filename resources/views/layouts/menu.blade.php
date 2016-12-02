<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/images/logo/logo.png" class="img-responsive" style="width: 50px; height: 50px; text-align: right;">
            </a>
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'SecretSanta') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav" id="menu-navbar-left">
                <li class="nav-item">
                    <a href="/home" class="active" >Home</a>
                </li>
                <li class="nav-item" >
                    <a href="/deal">Deals</a>
                </li>
                <li class="nav-item" >
                    <a href="/howItWorks">How it Works</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >

                       More  <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ url('/aboutUs') }}">
                                <i class="fa fa-newspaper-o"></i>
                                 About Us
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/contactUs') }}">
                                <i class="fa fa-address-book-o"></i>
                                Contact Us
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/feedback') }}">
                                <i class="fa fa-commenting-o"></i>
                                Feedback
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right" id="menu-navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position: relative; padding-left: 50px;">
                            <img src="/images/uploads/avatars/{{Auth::user()->avatar}}" class="img-responsive" style="height: 32px; width: 32px; position: absolute; top: 10px; left: 10px; border-radius: 50%; float: left;">
                            {{ Auth::user()->name }}  <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/profile') }}">
                                    <i class="fa fa-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/deal') }}">
                                    <i class="fa fa-tags"></i>
                                    Deals
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-in"></i>
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
