
    <!--<nav>
        <div class="logo" style="display: flex;align-items: center;">
            <span style="color:#01939c; font-size:26px; font-weight:bold; letter-spacing: 1px;margin-left: 20px;">FRANDEN DIETRIES</span>
        </div>
        <div class="hamburger">
            <div class="line1"><li class="active"><a href="#">Home</a></li></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
            <li class="active"><a href="#">Home</a></li>
            <li class="active"><a href="#">Recipes</a></li>
            <li><a href="#">Forum</a></li>
            <li><a href="{{('login') }}">Login</a></li>
            <li><a href="{{('register') }}">Register</a></li>
        </ul>
    </nav>-->
   
       <!-- Header Section Begin -->
      
       <header class="header-section">
        <div class="container">
            <div class="logo">
                <a href="{{('userpage')}}l"><h1 style="text-align:center; color:black; padding:30px; font-size:30px">FranDen Dietries</h1></a>
            </div>
            <div class="nav-menu">
                <nav class="main-menu mobile-menu">
            <ul class="nav-links">
            <li class="active"><a href="#">Home</a></li>
            <li class=""><a href="{{('dashboard') }}">Recipes</a></li>
            <li class=""><a href="{{('about') }}">About Us</a></li>
            <li class=""><a href="{{('contact') }}">Contact</a></li>
            <li><a href="#">Forum</a></li>
            <li><a class="btn btn-primary" href="{{('login') }}">Login</a></li>
            <li><a class="btn btn-success" href="{{('register') }}">Register</a></li>
             </ul>
                </nav>
               
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->
