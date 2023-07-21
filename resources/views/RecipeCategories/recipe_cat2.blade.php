<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FranDen Dietries</title>
    <!-- favicon -->
      <!-- Google Font -->
 <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">

<!-- Css Styles -->
<link rel="stylesheet" href="home/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="home/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="home/css/nice-select.css" type="text/css">
<link rel="stylesheet" href="home/css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="home/css/style.css" type="text/css">
<link rel="stylesheet" href="home/css/style2.css" type="text/css">

    <link rel="stylesheet" href="home/css/cat.css" type="text/css">
    <link rel="stylesheet" href="home/css/main.css" type="text/css">
    <!-- font-awesome -->
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>

  </head>
  <body>
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
                                <li><a href="{{('recipe_cat1')}}">Quick and Easy</a></li>
                                <li><a href="{{('recipe_cat2')}}">Immune Boosting</a></li>
                                <li><a href="{{('recipe_cat3')}}">Postnatal Recovery</a></li>
                                <li><a href="{{('recipe_cat4')}}">Breakfast</a></li>
                                <li><a href="{{('recipe_cat5')}}">Nutrient Dense Meals</a></li>
                            </ul>
                        </li>
                        <li><a href="{{('addrecipe')}}">Add Recipes</a></li>
                        <li><a href="">Forum</a></li>
                        <li><a href="{{('contact')}}}">Contact</a></li>
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

    <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                immune boosting recipes <span> category</span>
               </h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="fr-item">
                        <div class="fr-item-img">
                            <img src="home/img/beef.webp" alt="">
                        </div>
                        <div class="fr-item-text">
                            <h5>Coconut beef stew</h5>
                            <p>This Kenyan stew made with beef is the ultimate comfort food. It consists of meltingly tender 
                                chunks of beef braised in a tomato-coconut broth with garlic, onions, potatoes, carrots, herbs,and spices.</p>
                                <div class="options">
                          <!-- <a href="" class="option1">
                          Add To Favourites
                           </a> -->
                           <a href="{{('view_recipe_cat2')}}" class="option2">
                           View Recipe
                           </a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="fr-item">
                        <div class="fr-item-img">
                            <img src="home/img/kuku.jpg" alt="">
                        </div>
                        <div class="fr-item-text">
                            <h5>Healthy Broccoli Slaw</h5>
                            <p>A short or no cook time for broccoli best preserves the amount of vitamin C.</p>
                                <div class="options">
                          <!-- <a href="" class="option1">
                          Add To Favourites
                           </a> -->
                           <a href="{{('view_recipe21')}}" class="option2">
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
    <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="fr-item">
                        <div class="fr-item-img">
                            <img src="home/img/img9.jpg" alt="">
                        </div>
                        <div class="fr-item-text">
                            <h5>Creamy Avocado Board</h5>
                            <p>Avocados are rich in Vitamin A, as well as an antioxidant.</p>
                                <div class="options">
                           <!-- <a href="" class="option1">
                          Add To Favourites
                           </a> -->
                           <a href="{{('view_recipe2c')}}" class="option2">
                           View Recipe
                           </a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="fr-item">
                        <div class="fr-item-img">
                            <img src="home/img/p8.jpg" alt="">
                        </div>
                        <div class="fr-item-text">
                            <h5>Spicy Peanut Cauliflower Stir-Fry</h5>
                            <p>Easy stir-fry is packed with immune supporting ingredients including vitamin C-rich red bell peppers.</p>
                                <div class="options">
                           <!-- <a href="" class="option1">
                          Add To Favourites
                           </a> -->
                           <a href="{{('view_recipe2d')}}" class="option2">
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
   
         <!-- footer start -->
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
                        <h3>Useful Links</h3>
                        <ul>
                           <li><a href="#">Featured Recipes</a></li>
                           <li><a href="#">Popular</a></li>
                           <li><a href="#">Favourites</a></li>
                           <li><a href="#">Testimonials</a></li>
                           <li><a href="{{route('login')}}">Login</a></li>
                           <li><a href="{{route('register')}}">Register</a></li>
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
    <script src="home/js/app.js"></script>
    <script src="home/js/jquery-3.3.1.min.js"></script>
    <script src="home/js/bootstrap.min.js"></script>
    <script src="home/js/jquery.slicknav.js"></script>
    <script src="home/js/jquery.nice-select.min.js"></script>
    <script src="homejs/mixitup.min.js"></script>
    <script src="home/js/main.js"></script>
  </body>
</html>