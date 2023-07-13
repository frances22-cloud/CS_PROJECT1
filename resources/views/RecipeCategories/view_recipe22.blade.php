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
                        <img src="home/img/img4.jpg" alt="">
                            <h2>White beans and potato salad</h2>
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
                                <a href="#" class="black-btn">Save</a>
                            </div>
                            <div class="list-item">
                                <h5>Ingredients</h5>
                                
                                <div class="dressing-list">
                                    <ul>
                                        <li>1 ½ pounds small yellow potatoes, unpeeled</li>
                                        <li>1 (15-ounce) can beans (i.e. garbanzo, kidney, cannellini, red), rinsed, drained</li>
                                        <li>½ cup olives, pitted, drained</li>
                                        <li>½ cup sun-dried tomatoes, sliced</li>
                                        <li>2 tablespoon capers, rinsed, drained</li>
                                        <li>2 cloves garlic, minced</li>
                                        <li>½ small red onion, sliced thinly</li>
                                        <li>2 tablespoon extra virgin olive oil </li>
                                        <li>½ teaspoon black pepper </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nutrition-fact">
                        <div class="nutri-title">
                            <h6>Nutritional Facts</h6>
            
                        </div>
                        <ul>
                            <li>Serving Size: 1 serving Calories: 189 Sugar: 5g Sodium: 282mg</li>
                            <li>Fat: 6 gSaturated Fat: 1 gCarbohydrates: 29 gFiber: 6 gProtein: 6g</li>
                            <li>Chalories: 345</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="recipe-right">
                        <div class="recipe-desc">
                            <h3>Description</h3>
                            <p>This simple, easy Mediterranean salad is based on the classic ingredients of potatoes,<br>
                             beans, olives, sun-dried tomatoes, capers, garlic, onions, herbs, and a light olive oil vinaigrette.<br> 
                                It’s like a touch of sunshine, yet the ingredients are seasonally available year-round.</p>
                            
                        </div>
                        <div class="instruction-list">
                            <h3>Instructions</h3>
                            <ul>
                                <li>
                                    <span>01.</span>
                                    Fill a medium pot half full with water and bring to a boil. Add unpeeled, whole small yellow potatoes, cover,
                                     and boil just until tender,
                                     but firm (about 15-20 minutes). Drain off water, and chill for several minutes. 
                                    When cool enough to handle, peel and slice into cubes.
                                </li>
                                <li>
                                    <span>02.</span>
                                    While potatoes are cooking, prepare the salad ingredients. Add beans, olives, sun-dried tomatoes, capers, garlic, 
                                    red onion to a large bowl and toss together. Add cubed potatoes.
                                </li>
                                <li>
                                    <span>03.</span>
                                    Add olive oil, vinegar, parsley, oregano, and black pepper and mix to distribute ingredients
                                </li>
                                <li>
                                    <span>04.</span>
                                    Pour the chicken broth into the Instant Pot, then place the trivet inside. 
                                    Place the chicken on top of the trivet and close the Instant Pot lid.
                                </li>
                                <li>
                                    <span>05.</span>
                                    Serve slightly warm or chill until serving time.
                                </li>
                               
                            </ul>
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