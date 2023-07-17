<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FranDen Dietries</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="home/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="home/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/style.css" type="text/css">
    <link rel="stylesheet" href="home/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="home/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/style.css" type="text/css">
    <link rel="stylesheet" href="home/css/style2.css" type="text/css">

    <script type="text/javascript">
        function preventBack() {
            window.history.forward();
        }

        setTimeout("preventBack()", 0);

        window.onunload = function() {
            null
        };
    </script>

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section-other">
        <div class="container-fluid">
            <div class="logo">
                <a href="./index.html"><img src="home/img/little-logo.png" alt=""></a>
            </div>
            <div class="nav-menu">
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{{('userpage')}}">Home</a></li>

                        <li><a href="{{('about')}}">About us</a></li>
                        <li><a href="{{('recipes')}}}">Recipes</a></li>
                        <li><a href="{{('contact')}}">Contact</a></li>
                        </li>

                    </ul>
                </nav>
                <div class="nav-right search-switch">
                    <i class="fa fa-search"></i>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Search Section Begin -->
    <div class="hero-search set-bg" data-setbg="home/img/search-bg.jpg">
        <div class="container">
            <!--  <div class="filter-table">
                <form action="#" class="filter-search">
                    <input type="text" placeholder="Search recipe">
                    <select id="category">
                        <option value="">Category</option>
                    </select>
                    <select id="tag">
                        <option value="">Tags</option>
                    </select>
                    <button type="submit">Search</button>
                </form>
            </div>-->
        </div>
    </div>
    <!-- Hero Search Section End -->

    <!-- About Me Section Begin -->
    <section class="about-me spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="about-left">
                        <img src="home/img/about.jpg" alt="">
                        <div class="about-title">

                            <h4>FranDen Dietriesis a web based application that caters for postantal mothers <br>
                                It has a wide range of recipe categories with a variety of nutrients<br>
                                that support the postnatal journey of these moms. Within the website is a community forum that is help mothers to
                                <br> interact with others who share experiences about their postnatal journey.
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Me Section End -->


    <!-- Footer Section Begin -->
    <!-- footer start -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="full">
                        <div class="logo_footer">
                            <a href="#">
                                <h2>FranDen Dietries</h2>
                            </a>
                        </div>
                        <div class="information_f">
                            <p><strong>ADDRESS:</strong> FranDen Dietries, CS_project1, Computer Science</p>
                            <p><strong>TELEPHONE:</strong> +254-707637187</p>
                            <p><strong>EMAIL:</strong> FranDen@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="widget_menu">
                                        <h3>Menu</h3>
                                        <ul>
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">About</a></li>
                                            <li><a href="#">Recipes</a></li>
                                            <li><a href="#">Forum</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="widget_menu">
                                        <h3>Account</h3>
                                        <ul>
                                            <li><a href="#">Featured Recipes</a></li>
                                            <li><a href="#">Popular</a></li>
                                            <li><a href="#">Favourites</a></li>
                                            <li><a href="#">Testimonials</a></li>
                                            <li><a href="{{('login')}}">Login</a></li>
                                            <li><a href="{{('register')}}">Register</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    <!-- Footer Section End -->

    <!-- Search model -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="home/js/jquery-3.3.1.min.js"></script>
    <script src="home/js/bootstrap.min.js"></script>
    <script src="home/js/jquery.slicknav.js"></script>
    <script src="home/js/jquery.nice-select.min.js"></script>
    <script src="home/js/mixitup.min.js"></script>
    <script src="home/js/main.js"></script>
</body>

</html>