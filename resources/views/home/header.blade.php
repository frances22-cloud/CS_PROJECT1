<header class="header-section">
        <div class="container">
            <div class="logo">
                <a href=""><h1>FranDen Dietries</h1></a>
                
            </div>
            <div class="nav-right search-switch"> <i class="fa fa-search"></i>
                       </div>
            <div class="nav-menu">
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="{{('recipes')}}">Recipe</a>
                         <ul class="sub-menu">
                                <li><a href=""></a></li>
                                <li><a href=""></a></li>
                                <li><a href=""></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                
                         </ul>
                        </li>
                        <li><a href="">Forum</a></li>
                        <li><a href="{{('about')}}">About Us</a></li>
                        <li><a href="{{('contact')}}">Contact</a></li>
                        @if (Route::has('login'))
                        @auth
                        <x-app-layout>
                         </x-app-layout>
                        @else
                        <li class=""><a class="btn btn-primary" href="{{ route('login') }}">Login</a></li>
                        <li class=""><a class="btn btn-success" href="{{ route('register') }}">Register</a></li>
                        @endauth
                        @endif
            
                    </ul>
                </nav>
                </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>