<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project1</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="home/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="home/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
   @include('home.header')
    <!-- Header End -->

    <!-- Page Top Recipe Section Begin -->
    @include('home.slider')
    <!-- Page Top Recipe Section End -->

    <!-- Top Recipe Section Begin -->
    <section class="top-recipe spad">
        <div class="section-title">
            <h5>Top Recipes this Week</h5>
        </div>
        <div class="container po-relative">
            <div class="plus-icon">
                <i class="fa fa-plus"></i>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="top-recipe-item large-item">
                        <div class="top-recipe-img set-bg" data-setbg="home/img/top-recipe/recipe-1.jpg">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="top-recipe-text">
                            <div class="cat-name">Desert</div>
                            <a href="#">
                                <h4>One Pot Weeknight Lasagna Soup Recipe</h4>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="top-recipe-item">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="top-recipe-img set-bg" data-setbg="home/img/top-recipe/recipe-2.jpg">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="top-recipe-text">
                                    <div class="cat-name">Vegan</div>
                                    <a href="#">
                                        <h4>One Pot Weeknight Lasagna Soup Recipe</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top-recipe-item">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="top-recipe-img set-bg" data-setbg="home/img/top-recipe/recipe-3.jpg">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="top-recipe-text">
                                    <div class="cat-name">Meat lover</div>
                                    <a href="#">
                                        <h4>Veggie soup with Mushrooms</h4>
                                    </a>
                                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua. Lorem ipsum dolor sit amet, consectetur.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top-recipe-item">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="top-recipe-img set-bg" data-setbg="home/img/top-recipe/recipe-4.jpg">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="top-recipe-text">
                                    <div class="cat-name">Desert</div>
                                    <a href="#">
                                        <h4>Caramel Ice Cream with Berries</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top-recipe-item">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="top-recipe-img set-bg" data-setbg="home/img/top-recipe/recipe-5.jpg">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="top-recipe-text">
                                    <div class="cat-name">Desert</div>
                                    <a href="#">
                                        <h4>Freash Octopuse with lime juice</h4>
                                    </a>
                                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua. Lorem ipsum dolor sit amet, consectetur.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Recipe Section End -->

    <!-- Categories Filter Section Begin -->
    <div class="categories-filter-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="filter-item">
                        <ul>
                            <li class="active" data-filter="*">Vegetarian</li>
                            <li data-filter=".mostpopular">Most popular</li>
                            <li data-filter=".meatlover">Meat Lover</li>
                            <li data-filter=".glutenfree">Gluten Free</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cf-filter" id="category-filter">
                <div class="cf-item mix all mostpopular">
                    <div class="cf-item-pic">
                        <img src="home/img/cate-filter/cate-filter-1.jpg" alt="">
                    </div>
                    <div class="cf-item-text">
                        <h5>Sunday Brunch: Spaghetti and Eggs Recipe</h5>
                    </div>
                </div>
                <div class="cf-item mix all mostpopular">
                    <div class="cf-item-pic">
                        <img src="home/img/cate-filter/cate-filter-2.jpg" alt="">
                    </div>
                    <div class="cf-item-text">
                        <h5>Sunday Brunch: Spaghetti and Eggs Recipe</h5>
                    </div>
                </div>
                <div class="cf-item mix all meatlover mostpopular">
                    <div class="cf-item-pic">
                        <img src="home/img/cate-filter/cate-filter-3.jpg" alt="">
                    </div>
                    <div class="cf-item-text">
                        <h5>Sunday Brunch: Spaghetti and Eggs Recipe</h5>
                    </div>
                </div>
                <div class="cf-item mix all meatlover">
                    <div class="cf-item-pic glutenfree">
                        <img src="home/img/cate-filter/cate-filter-4.jpg" alt="">
                    </div>
                    <div class="cf-item-text">
                        <h5>Sunday Brunch: Spaghetti and Eggs Recipe</h5>
                    </div>
                </div>
                <div class="cf-item mix all meatlover glutenfree">
                    <div class="cf-item-pic">
                        <img src="home/img/cate-filter/cate-filter-5.jpg" alt="">
                    </div>
                    <div class="cf-item-text">
                        <h5>Sunday Brunch: Spaghetti and Eggs Recipe</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Filter Section End -->

    <!-- Feature Recipe Section Begin -->
    <section class="feature-recipe">
        <div class="section-title">
            <h5>Featured Recipes</h5>
        </div>
        <div class="container po-relative">
            <div class="plus-icon">
                <i class="fa fa-plus"></i>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="fr-item">
                        <div class="fr-item-img">
                            <img src="home/img/feature-1.jpg" alt="">
                        </div>
                        <div class="fr-item-text">
                            <h4>Sunday Brunch: Spaghetti and Eggs Recipe</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="fr-item">
                        <div class="fr-item-img">
                            <img src="home/img/feature-2.jpg" alt="">
                        </div>
                        <div class="fr-item-text">
                            <h4>Sunday Brunch: Spaghetti and Eggs Recipe</h4>
                            <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Recipe Section End -->

    <!-- Footer Section Begin -->
    @include('home.footer')
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
    <script src="homejs/mixitup.min.js"></script>
    <script src="home/js/main.js"></script>
</body>

</html>