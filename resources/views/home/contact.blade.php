<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yummy | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
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
        
    </div>
    <!-- Hero Search Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="#" class="contact-form">
                        <h3>Leave a Comment</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Your name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Your email">
                            </div>
                            <div class="col-lg-12">
                                <input type="text" placeholder="Subject">
                                <textarea placeholder="Comment"></textarea>
                            </div>
                        </div>
                        <button type="submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    @include('home.footer')

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
    <script src="homejs/mixitup.min.js"></script>
    <script src="home/js/main.js"></script>
</body>

</html>