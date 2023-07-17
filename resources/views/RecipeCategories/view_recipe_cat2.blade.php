<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat2View</title>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" 
integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" 
crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
 <div id="reipepackage">
 <section class="single-page-recipe spad">            
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="ingredients-item">
                        <div class="intro-item">
                        <img src="home/img/beef.webp" alt="">
                            <h2>Coconut fried beef</h2>
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
                                    <li>Prep time: <span>10 minutes</span></li>
                                    <li>Cook time: <span>1 hour </span></li>
                                   <li> Total Time: <span>1 hour 10minutes </span></li>
                                    <li>Yield: <span>4</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="ingredient-list">
                            <div class="recipe-btn">
                            <a onclick="download_pdf()" href="#">Download</a>
                                <a href="#" class="black-btn">Save</a>
                            </div>
                            <div class="list-item">
                                <h5>Ingredients</h5>
                                
                                <div class="dressing-list">
                                    <ul>
                                        <li>3 tablespoon Coconut Oil</li>
                                        <li>3-4 tablespoon Coconut Slices</li>
                                        <li>2 Slit Green Chilies</li>
                                        <li>15 Peeled and Sliced Red Pearl Onions or 1 Large Sliced Onion</li>
                                        <li>3 Garlic Cloves Chopped</li>
                                        <li>½ inch Freshly Chopped Ginger</li>
                                        <li>15-20 Curry Leaves</li>
                                        <li>1 teaspoon Black Pepper Crushed</li>
                                        <li>1 teaspoon White Wine Vinegar</li>
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
                            <li>Calories: 520kcal Carbohydrates: 25g Protein: 29g</li>
                            <li>Potassium: 749mg Fiber: 7g Sugar: 9g Vitamin A: 1158IU</li>
                            <li> Vitamin C: 172mg Calcium: 106mg Iron: 4mg</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="recipe-right">
                        <div class="recipe-desc">
                            <h3>Description</h3>
                            <p>This Kenyan stew made with beef is the ultimate comfort food. It consists of meltingly tender 
                            chunks of beef braised in a tomato-coconut broth with garlic, onions, potatoes, carrots, herbs,and spices.</p>
                            
                        </div>
                        <div class="instruction-list">
                            <h3>Instructions</h3>
                            <ul>
                                <li>
                                    <span>01.</span>
                                In a frying pan on medium heat, add the coconut oil, and once warm, add the coconut slivers.
                                Mix frequently, as these can overcook very quickly.
                                </li>
                                <li>
                                    <span>02.</span>
                                As soon as the coconut pieces start to turn golden on the edges, add the chopped pearl onions,
                                chopped garlic and ginger, green chilies, and a pinch of salt.
                                </li>
                                <li>
                                    <span>03.</span>
                                    Cook until the pearl onions turn golden and the ginger and garlic are cooked.
                                </li>
                                <li>
                                    <span>04.</span>
                                    Next, add the cooked beef and all its masala to the pan and mix well. 
                                    As the beef should have almost no gravy, add a cup of water to it and mix well.
                                </li>
                                <li>
                                    <span>05.</span>
                                    This step may be the longest hands-on one. Keep the pan on medium high heat,
                                     and mix the curry well. The water will start to evaporate, 
                                     the gravy will thicken and the curry will turn darker. This is the part where you roast the beef Ularthiyathu,
                                     and the whole dish will turn a warm red brown color.
                                </li>
                                <li>
                                    <span>06.</span>
                                    Once the curry is semi-dry [it will take about 10 minutes], add the black pepper, vinegar and curry leaves to the pan.
                                     Mix well and cook for a further 2-3 minutes, stirring frequently.
                                </li>
                                <li>
                                    <span>07.</span>
                                    Lastly, once you are happy with the consistency of the gravy,
                                      add a last teaspoon of coconut oil, mix well and the beef 
                                    fry is ready to be served with rice, parottas.
                                </li>
                            </ul>
                        </div>
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

      <script>
function download_pdf()
{
const pdf= document.getElementById("reipepackage");
html2pdf().from(pdf).save();

     function addrecipe()
{
document.getElementById("recipecard");    
}
}
</script>
</body>
</html>