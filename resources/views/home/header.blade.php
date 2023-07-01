<header class="header-section">
        <div class="container">
            <div class="logo">
                <a href="./index.html"><h1>FranDen Dietries</h1></a>
                
            </div>
            <div class="nav-right search-switch"> <i class="fa fa-search"></i>
                       </div>
            <div class="nav-menu">
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="{{('recipes')}}">Recipe categories</a>
                            <ul class="sub-menu">
                                <li><a href="{{('recipes')}}">Meals</a></li>
                                <li><a href="categories.html">Drinks</a></li>
                                <li><a href="recipe.html">Salads</a></li>
                                <li><a href="blog.html">forum</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                
                         </ul>
                        </li>
                        <li><a href="recipe.html">Forum</a></li>
                        <li><a href="categories.html">About Us</a></li>
                        <li><a href="contact.html">Contact</a></li>
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