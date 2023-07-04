<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Home</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="home/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="home/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/style.css" type="text/css">
    <link rel="stylesheet" href="home/css/style2.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
   @include('home.header2')
    <!-- Header End -->

    <!-- Page Top Recipe Section Begin -->
    @include('home.slider')
    <!-- Page Top Recipe Section End -->
 <!-- product section -->
 <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                 All <span>Recipes</span>
               </h2>
            </div>
            <div class="row">
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                          Add To Favourites
                           </a>
                           <a href="" class="option2">
                           View Recipe
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="home/img/about-right.jpg" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                         Chicken soup
                        </h5>
                       <a class="btn btn-secondary" href=""> <i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           Add To Favourites
                           </a>
                           <a href="" class="option2">
                          View Recipe
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="home/img/recipe-2.jpg" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                          Name of recipe
                        </h5>
                     <a class="btn btn-secondary" href= ""> <i class="fa fa-thumbs-up" aria-hidden="true"></i></a> 
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           Add To Favourites
                           </a>
                           <a href="" class="option2">
                         View Recipe
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="home/img/recipe-3.jpg" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                          Name of Recipe
                        </h5>
                      <a class="btn btn-secondary" href=""> <i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                     </div>
                  </div>
               </div>
               
                  </div>
               </div>
               
                     
      </section>
    <!-- Top Recipe Section End -->

    <!-- Categories Filter Section Begin -->
    <div class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                Most <span>Popular Recipes</span>
               </h2>
            </div>
            <div class="cf-filter" id="category-filter">
                <div class="cf-item mix all mostpopular">
                    <div class="cf-item-pic">
                        <img src="home/img/cate-filter/cate-filter-1.jpg" alt="">
                    </div>
                    <div class="cf-item-text">
                        <h5>Sunday Brunch: Spaghetti and Eggs Recipe</h5>
                        <div class="options">
                         <!--  <a href="" class="option1">
                          Add To Favourites
                           </a>-->
                           <a href="" class="option2">
                           View Recipe
                           </a>
                        </div>
                    </div>
                </div>
                <div class="cf-item mix all mostpopular">
                    <div class="cf-item-pic">
                        <img src="home/img/cate-filter/cate-filter-2.jpg" alt="">
                    </div>
                    <div class="cf-item-text">
                        <h5>Sunday Brunch: Spaghetti and Eggs Recipe</h5>
                        <div class="options">
                          <!-- <a href="" class="option1">
                          Add To Favourites
                           </a>-->
                           <a href="" class="option2">
                           View Recipe
                           </a>
                        </div>
                    </div>
                </div>
                <div class="cf-item mix all meatlover mostpopular">
                    <div class="cf-item-pic">
                        <img src="home/img/cate-filter/cate-filter-3.jpg" alt="">
                    </div>
                    <div class="cf-item-text">
                        <h5>Sunday Brunch: Spaghetti and Eggs Recipe</h5>
                        <div class="options">
                          <!-- <a href="" class="option1">
                          Add To Favourites
                           </a>-->
                           <a href="" class="option2">
                           View Recipe
                           </a>
                        </div>
                    </div>
                </div>
                <div class="cf-item mix all meatlover">
                    <div class="cf-item-pic glutenfree">
                        <img src="home/img/cate-filter/cate-filter-4.jpg" alt="">
                    </div>
                    <div class="cf-item-text">
                        <h5>Sunday Brunch: Spaghetti and Eggs Recipe</h5>
                        <div class="options">
                          <!-- <a href="" class="option1">
                          Add To Favourites
                           </a>-->
                           <a href="" class="option2">
                           View Recipe
                           </a>
                        </div>
                    </div>
                </div>
                <div class="cf-item mix all meatlover glutenfree">
                    <div class="cf-item-pic">
                        <img src="home/img/cate-filter/cate-filter-5.jpg" alt="">
                    </div>
                    <div class="cf-item-text">
                        <h5>Sunday Brunch: Spaghetti and Eggs Recipe</h5>
                        <div class="options">
                         <!--  <a href="" class="option1">
                          Add To Favourites
                           </a>-->
                           <a href="" class="option2">
                           View Recipe
                           </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Filter Section End -->

    <!-- Feature Recipe Section Begin -->
    <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                Featured <span>Recipes</span>
               </h2>
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
                                <div class="options">
                          <!-- <a href="" class="option1">
                          Add To Favourites
                           </a>-->
                           <a href="" class="option2">
                           View Recipe
                           </a>
                        </div>
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
                                <div class="options">
                          <!-- <a href="" class="option1">
                          Add To Favourites
                           </a>-->
                           <a href="" class="option2">
                           View Recipe
                           </a>
                        </div>
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
