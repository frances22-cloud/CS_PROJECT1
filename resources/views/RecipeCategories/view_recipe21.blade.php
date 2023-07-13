<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

 <!-- Single Recipe Section Begin -->
 <section class="single-page-recipe spad">            
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="ingredients-item">
                        <div class="intro-item">
                        <img src="home/img/img8.png" alt="">
                            <h2>Healthy Broccoli Slaw</h2>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="reviews">6 from 25 reviews</div>
                            <div class="recipe-time">
                                <ul>
                                    <li>Prep time: <span>6 min</span></li>
                                    <li>Cook time: <span>5 min</span></li>
                                    <li> Total Cook time: <span>11 min</span></li>
                                    <li>Yield: <span>5</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="ingredient-list">
                            <div class="recipe-btn">
                                <a href="#">Print Recipe</a>
                                <a href="#" class="black-btn">Save</a>
                            </div>
                            <div class="list-item">
                                <h5>Ingredients</h5>
                                
                                <div class="dressing-list">
                                    <ul>
                                        <li>2-3 large heads of broccoli washed and cut into chunks</li>
                                        <li>A generous pinch of sea salt up to 2 teaspoons</li>
                                        <li>water</li>
                                        <li>Grated cheddar cheese optional</li>
                                        <li>Freshly cracked black pepper</li>
                                        <li>Goat cheese creme fraiche, sour cream, or coconut cream</li>
                                        <li>chopped walnuts</li>
                                        <li>olive oil for drizzling</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nutrition-fact">
                        <div class="nutri-title">
                            <h6>Nutritional Facts</h6>
                            <span>Serves 4</span>
                        </div>
                        <ul>
                            <li>Total Fat:2%  sodium:4%  Potassium:27%</li>
                            <li>Cholesterol:2%  protein:18%  Calcium:14%</li>
                            <li>Chalories: 103</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="recipe-right">
                        <div class="recipe-desc">
                            <h3>Description</h3>
                            <p>This Healthy 3-Ingredient Broccoli Soup is a super easy recipe that makes the perfect healthy soup!</p>
                            
                        </div>
                        <div class="instruction-list">
                            <h3>Instructions</h3>
                            <ul>
                                <li>
                                    <span>01.</span>
                                    Boil a large pot of water and add the sea salt to the water.
                                </li>
                                <li>
                                    <span>02.</span>
                                    Add the broccoli chunks into the water for about 3 minutes, just enough time for them to become slightly soft.
                                </li>
                                <li>
                                    <span>03.</span>
                                    Remove the broccoli from the water with a slotted spoon and add it to your blender. Keep the broccoli water.
                                </li>
                                <li>
                                    <span>04.</span>
                                    Add enough of the broccoli water to the blender to fill it up to about the half-way mark, or slightly less.
                                <li>
                                    <span>05.</span>
                                    Blend on high speed until smooth, adding more water to loosen the soup if necessary.
                                </li>
                                <li>
                                    <span>06.</span>
                             Serve with whatever toppings you wish, a drizzle of olive oil, chopped walnuts and goat cheese, cheddar cheese, etc.
                                </li>
                               
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
</body>
</html>