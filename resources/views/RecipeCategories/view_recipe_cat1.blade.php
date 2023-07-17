<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <!-- Header Section Begin -->
    <header class="header-section-other">
        <div class="container-fluid">
            <div class="logo">
                <a href="{{('userpage')}}">
                    <h3>FranDen Dietries</h3>
                </a>
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
                                <!-- <li><a href="{{('recipe_cat4')}}">Breakfast</a></li>
                                <li><a href="{{('recipe_cat5')}}">Nutrient Dense Meals</a></li> -->
                            </ul>
                        </li>
                        <li><a href="{{('useraddrecipe')}}">Add Recipes</a></li>
                        <li><a href="{{('forumpage')}}">Forum</a></li>
                        <li><a href="{{('contact')}}}">Contact</a></li>
                        <li><a href="{{('logout') }}">Logout</a></li>
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
                            < <img src="home/img/img1.jpg" alt="">
                                <h2>Instant Port Chicken Wings</h2>
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
                            <h3></h3>
                            
                        <a href="{{url('print_pdf')}}">Print Recipe</a>
                        <a  href="#" class="black-btn">Favourite </a>
                        </div>
                            
                            <div class="list-item">
                                <h5>Ingredients</h5>
                                <div class="dressing-list">
                                    <ul>
                                        <li>2 teaspoons Italian seasoning</li>
                                        <li>1 teaspoon garlic powder</li>
                                        <li>1 teaspoon smoked paprika</li>
                                        <li>½ teaspoon salt (or to taste)</li>
                                        <li>¼ teaspoon pepper (or to taste)</li>
                                        <li>2 pound chicken breasts</li>
                                        <li>2 tablespoons olive oil</li>
                                        <li>1 cup chicken broth </li>
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
                            <p>Juicy, flavorful Instant Pot Chicken Breasts, ready in just 30 minutes and are perfect for lunch or dinner!
                                Cook from fresh or frozen! They are so versatile and can be incorporated into your favourite dish or served as is,
                                paired with your favourite sides you can't go wrong!.</p>

                        </div>
                        <div class="instruction-list">
                            <h3>Instructions</h3>
                            <ul>
                                <li>
                                    <span>01.</span>
                                    In a small bowl combine the Italian seasoning, garlic powder, smoked paprika, salt and pepper..
                                </li>
                                <li>
                                    <span>02.</span>
                                    Rub the spice mix generously over each chicken breast..
                                </li>
                                <li>
                                    <span>03.</span>
                                    Set the Instant Pot to the Saute setting and add the olive oil to heat.Set the Instant
                                    Pot to the Sauté setting and add the olive oil to heat. When the olive
                                    oil is hot add the chicken breasts and sear on all sides.
                                    You might have to do this in 2 batches. Remove the chicken from the Instant Pot and set aside..
                                </li>
                                <li>
                                    <span>04.</span>
                                    Pour the chicken broth into the Instant Pot, then place the trivet inside.
                                    Place the chicken on top of the trivet and close the Instant Pot lid.
                                </li>
                                <li>
                                    <span>05.</span>
                                    Set the valve to sealing and set the Instant Pot to Manual/High Pressure for 5 minutes.
                                </li>
                                <li>
                                    <span>06.</span>
                                    When the time is up, let the Instant Pot release naturally for 10 minutes then quick release remaining pressure.
                                </li>
                                <li>
                                    <span>07.</span>
                                    Open the lid and transfer the chicken to a cutting board or serving platter.
                                    Let the chicken rest for 5 minutes before slicing it or serving.
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

    <!--Comments and reply  section starts-->
    <div style="text-align:cnter; padding-bottom:30px;">
        <h1 style="font-size:30px; text-align:center; padding-top:20px; padding-bottom:20px;">Leave Comments</h1>
        <form action="{{url('add_comment')}}" method="post" style="text-align:center;">
            @csrf
            <textarea style="height:150px; width:500px" name="comment" placeholder="Add your comments here about this recipe"></textarea>
            <br>
            <input type="submit" class="btn btn-primary" value="comment">
        </form>
    </div>
    <div style="padding-left:20%;">
        <h1 style="font-size:20px; padding-bottom:20px;">All comments</h1>
        @foreach($comment as $comment)
        <div>
            <b>{{$comment->name}}</b>
            <p>{{$comment->comment}}</p>
            <a href="javascript::void(0);" onClick="reply(this)" data-Commentid="{{$comment->id}}">Reply</a>
        </div>
        @endforeach
        <!--Reply text-box-->
        <form action="{{url('add_reply')}}" method="post">
            @csrf
            <div style="display:none;" class="replyDiv">
                <input type="text" id="commentId" name="commentId" hidden="">
                <textarea style="height:100px; width:500px;" name="reply" placeholder="Write your reply here"></textarea>
                <br>
                <button type="submit" class="btn btn-warning">Reply</button>
                <a href="javascript::void(0);" class="btn" onClick="reply_close(this)">close</a>
        </form>
    </div>

    </div>

    <!--Comments and reply section ends-->

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
      
<script text="text/javascript">
    function reply(caller){
        document.getElementById('commentId').value=$(caller).attr('data-Commentid');
    $('.replyDiv').insertAfter($(caller));
    $('.replyDiv').show();
}
function reply_close(caller){
    $('.replyDiv').hide();
}
</script>
<script>
$(document).ready(function() {
    $('.favorites-button').click(function() {
    var recipeId = $(this).data('recipe-id');
    favourites(recipeId);
    });
    function favouriesavorites(recipeId) {
    $.ajax({
    url: '/view_recipe_cat1/' + recipeId + '/favorites',
    type: 'POST',
    dataType: 'json',
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function(response) {
    // Handle success response, such as updating UI or displaying a success message
    },
    error: function(xhr, status, error) {
    // Handle error response, such as displaying an error message
    }
    });
    }
});
</script>

<script src="home/js/app.js"></script>
    <script src="home/js/jquery-3.3.1.min.js"></script>
    <script src="home/js/bootstrap.min.js"></script>
    <script src="home/js/jquery.slicknav.js"></script>
    <script src="home/js/jquery.nice-select.min.js"></script>
    <script src="homejs/mixitup.min.js"></script>
    <script src="home/js/main.js"></script>
</body>

</html>