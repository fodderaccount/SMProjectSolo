<header class="header">

    <section class="flex">

        <a href="home" class="logo">Pizza.</a>

        <nav class="navbar">
            <a href="{{ route('homepage') }}">home</a>
            <div class="dropdown">
                <button class="dropbtn"><a>category</a></button>
                <div class="category-content">
                    <a href="#">italian pizza</a>
                    <a href="#">american pizza</a>
                    <a href="#">german pizza</a>
                </div>
            </div>
            <a href="about">about</a>
            <a href="menu">menu</a>
            <a href="order">order</a>
            <a href="faq">faq</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="{{ route('login') }}">
                <div class="fas fa-user"></div>
            </a>
            <div id="order-btn" class="fas fa-box"></div>
            <div id="cart-btn" class="fas fa-shopping-cart"><span>(4)</span></div>
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
            
                        </ul>
            
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
            
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
            
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
            
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        

    </section>

</header>