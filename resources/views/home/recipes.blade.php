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
    <link rel="stylesheet" href="home/css/style2.css" type="text/css">
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
                <a href="{{('userpage')}}"><h3>FranDen Dietries</h3></a>
            </div>
            <div class="nav-menu">
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{{('userpage')}}">Home</a></li>
                        <li><a href="#">categories</a>
                            <ul class="sub-menu">
                                <li><a href="about-me.html">Quick and Easy</a></li>
                                <li><a href="categories.html">Immune Boosting</a></li>
                                <li><a href="recipe.html">Postnatal Recovery:</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </li>
                        <li><a href="{{('addrecipe')}}">Recipes</a></li>
                        <li><a href="categories.html">Best Of</a></li>
                        <li><a href="contact.html">Contact</a></li>
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
            <div class="filter-table">
                <form action="#" class="filter-search">
                    <input type="text" placeholder="Search recipe">
                    <select id="category">
                        <option value="">Category</option>
                    </select>
                    <select id="tag">
                        <option value=""><a href="{{('addrecipe')}}"></a>Add Recipe</option>
                    </select>
                    <button type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>--
    <!-- Hero Search Section End -->

    <!-- Single Recipe Section Begin -->
    <section class="single-page-recipe spad">
        <div class="recipe-top">
            <div class="container-fluid">
                <div class="recipe-title">
                    <span>~ 5 ingredients / 20 minutes / easy / japanese/ recipe</span>
                    <h2>Chipotle Sweet Potato Noodle Salad <br /> with Roasted Corn</h2>
                    <ul class="tags">
                        <li>Desert</li>
                        <li>Asian</li>
                        <li>Spicy</li>
                    </ul>
                </div>
                <img src="home/img/recipe-single.jpg" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="ingredients-item">
                        <div class="intro-item">
                            <img src="home/img/intro-img.jpg" alt="">
                            <h2>Chipotle Sweet Potato Noodle with Roasted Corn</h2>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="reviews">4.9 from 25 reviews</div>
                            <div class="recipe-time">
                                <ul>
                                    <li>Prep time: <span>10 min</span></li>
                                    <li>Cook time: <span>10 min</span></li>
                                    <li>Yield: <span>5</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="ingredient-list">
                            <div class="recipe-btn">
                                <a href="#">Print Recipe</a>
                                <a href="#" class="black-btn">Pin Recipe</a>
                            </div>
                            <div class="list-item">
                                <h5>Ingredients</h5>
                                <div class="salad-list">
                                    <h6>For the salad</h6>
                                    <ul>
                                        <li>1 brick of frozen udon</li>
                                        <li>1/2 cup kimchi, plus a bit of kimchi juice</li>
                                        <li>1 tablespoon of butter</li>
                                        <li>1 sac of mentaiko</li>
                                        <li>sliced green onions and nori, to finish</li>
                                    </ul>
                                </div>
                                <div class="dressing-list">
                                    <h6>For the dressing</h6>
                                    <ul>
                                        <li>1 brick of frozen udon</li>
                                        <li>1/2 cup kimchi, plus a bit of kimchi juice</li>
                                        <li>1 tablespoon of butter</li>
                                        <li>1 sac of mentaiko</li>
                                        <li>sliced green onions and nori, to finish</li>
                                        <li>1 tablespoon of butter</li>
                                        <li>1 sac of mentaiko</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nutrition-fact">
                        <div class="nutri-title">
                            <h6>Nutrition Facts</h6>
                            <span>Serves 4</span>
                        </div>
                        <ul>
                            <li>Total Fat : 20.4g</li>
                            <li>Cholesterol : 2%</li>
                            <li>Chalories: 345</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="recipe-right">
                        <div class="recipe-desc">
                            <h3>Description</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. Donec in sodales dui, a
                                blandit nunc. Pellentesque id eros venenatis, sollicitudin neque sodales, vehicula nibh.
                                Nam massa odio, porttitor vitae efficitur non, ultricies volutpat tellus. Cras egestas
                                in lacus a finibus. Suspendisse sed urna at elit condimentum viverra. Suspendisse non
                                lobortis nisi. Maecenas accumsan quam quis porta laoreet. Aliquam felis odio, aliquet
                                fermentum semper at, porttitor ac mi. Duis vel condimentum risus. Phasellus eu dolor vel
                                neque commodo accumsan eget et enim. Pellentesque non elit sed risus tincidunt aliquam
                                eu eget metus.</p>
                            <p>Donec sit amet enim tortor. Sed egestas nulla nibh, vitae porta velit sagittis eget.
                                Donec vitae tellus semper, cursus sem id, iaculis purus. Aenean ligula risus, maximus
                                tristique eros vel, auctor ornare tortor. Aliquam vel augue sapien. Duis non auctor
                                ante, ac vestibulum tortor. Etiam quis dolor ultricies, dignissim ante a, ornare ipsum.
                                Phasellus suscipit rhoncus nulla, quis bibendum tortor elementum ac. Nullam viverra
                                tellus diam, nec accumsan orci aliquam sed. Sed placerat sagittis lacus, non rutrum diam
                                volutpat id. </p>
                        </div>
                        <div class="instruction-list">
                            <h3>Instructions</h3>
                            <ul>
                                <li>
                                    <span>01.</span>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. Donec in
                                    sodales dui, a blandit nunc. Pellentesque id eros venenatis, sollicitudin neque
                                    sodales, vehicula nibh. Nam massa odio, porttitor vitae efficitur non, ultricies
                                    volutpat tellus. Cras egestas in lacus a finibus. Suspendisse sed urna at elit
                                    condimentum viverra. Suspendisse non lobortis nisi. Maecenas accumsan quam quis
                                    porta laoreet. Aliquam felis odio, aliquet fermentum semper at, porttitor ac mi.
                                </li>
                                <li>
                                    <span>02.</span>
                                    Donec sit amet enim tortor. Sed egestas nulla nibh, vitae porta velit sagittis eget.
                                    Donec vitae tellus semper, cursus sem id, iaculis purus. Aenean ligula risus,
                                    maximus tristique eros vel, auctor ornare tortor. Aliquam vel augue sapien. Duis non
                                    auctor ante, ac vestibulum tortor. Etiam quis dolor ultricies, dignissim ante a,
                                    ornare ipsum. Phasellus suscipit rhoncus nulla, quis bibendum tortor elementum ac.
                                    Nullam viverra tellus diam, nec accumsan orci aliquam sed. Sed placerat sagittis
                                    lacus, non rutrum diam volutpat id.
                                </li>
                                <li>
                                    <span>03.</span>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. Donec in
                                    sodales dui, a blandit nunc. Pellentesque id eros venenatis, sollicitudin neque
                                    sodales, vehicula nibh. Nam massa odio, porttitor vitae efficitur non, ultricies
                                    volutpat tellus. Cras egestas in lacus a finibus. Suspendisse sed urna at elit
                                    condimentum viverra. Suspendisse non lobortis nisi. Maecenas accumsan quam quis
                                    porta laoreet. Aliquam felis odio, aliquet fermentum semper at, porttitor ac mi.
                                </li>
                                <li>
                                    <span>04.</span>
                                    Donec sit amet enim tortor. Sed egestas nulla nibh, vitae porta velit sagittis eget.
                                    Donec vitae tellus semper, cursus sem id, iaculis purus. Aenean ligula risus,
                                    maximus tristique eros vel, auctor ornare tortor. Aliquam vel augue sapien. Duis non
                                    auctor ante, ac vestibulum tortor. Etiam quis dolor ultricies, dignissim ante a,
                                    ornare ipsum. Phasellus suscipit rhoncus nulla, quis bibendum tortor elementum ac.
                                    Nullam viverra tellus diam, nec accumsan orci aliquam sed. Sed placerat sagittis
                                    lacus, non rutrum diam volutpat id.
                                </li>
                            </ul>
                        </div>
                        <div class="notes">
                            <h3>Notes</h3>
                            <div class="notes-item">
                                <span>i</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. Donec in
                                    sodales dui, a blandit nunc. Pellentesque id eros venenatis, sollicitudin neque
                                    sodales, vehicula nibh. Nam massa odio, porttitor vitae efficitur non, ultricies
                                    volutpat tellus. Cras egestas in lacus a finibus. Suspendisse sed urna at elit
                                    condimentum viverra.</p>
                            </div>
                            <div class="notes-item">
                                <span>i</span>
                                <p>Donec in sodales dui, a blandit nunc. Pellentesque id eros venenatis, sollicitudin
                                    neque sodales, vehicula nibh. Nam massa odio, porttitor vitae efficitur non,
                                    ultricies volutpat tellus. Cras egestas in lacus a finibus. Suspendisse sed urna at
                                    elit condimentum viverra.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Single Recipe Section End -->

    <!-- Similar Recipe Section Begin -->
    <section class="similar-recipe spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="similar-item">
                        <a href="#"><img src="home/img/cat-feature/small-7.jpg" alt=""></a>
                        <div class="similar-text">
                            <div class="cat-name">Vegan</div>
                            <h6>Italian Tiramisu with Coffe</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="similar-item">
                        <a href="#"><img src="home/img/cat-feature/small-6.jpg" alt=""></a>
                        <div class="similar-text">
                            <div class="cat-name">Vegan</div>
                            <h6>Dry Cookies with Corn</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="similar-item">
                        <a href="#"><img src="home/img/cat-feature/small-5.jpg" alt=""></a>
                        <div class="similar-text">
                            <div class="cat-name">Vegan</div>
                            <h6>Asparagus with Pork Loin and Vegetables</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="similar-item">
                        <a href="#"><img src="home/img/cat-feature/small-4.jpg" alt=""></a>
                        <div class="similar-text">
                            <div class="cat-name">Vegan</div>
                            <h6>Smoked Salmon mini Sandwiches with Onion</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Similar Recipe Section End -->

    <!-- Footer Section Begin -->
         <footer>
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                   <div class="full">
                      <div class="logo_footer">
                        <a href="#"><h2>FranDen Dietries</h2></a>
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
                  <div class="col-md-5">
                     <div class="widget_menu">
                        <h3>Newsletter</h3>
                        <div class="information_f">
                          <p>Subscribe by our newsletter and get update protidin.</p>
                        </div>
                        <div class="form_sub">
                           <form>
                              <fieldset>
                                 <div class="field">
                                    <input type="email" placeholder="Enter Your Mail" name="email" />
                                    <input type="submit" value="Subscribe" />
                                 </div>
                              </fieldset>
                           </form>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer end -->
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