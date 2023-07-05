<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home/css/addrecipe.css">
	<link rel="stylesheet" href="home/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="home/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/style.css" type="text/css">
    <link rel="stylesheet" href="home/css/style2.css" type="text/css">
    <title>FranDen Dietries</title>
</head>
<body>
    <!--main-->
	<main class="main" role="main">
		<!--wrap-->
		<div class="wrap clearfix">
			<!--breadcrumbs-->
			<nav class="breadcrumbs">
				<ul>
			 <li><a href="index.html" title="Home">Home</a></li>
			 <li>Submit a recipe</li>
				</ul>
			</nav>
			<!--//breadcrumbs-->
			
			<!--row-->
			<div class="row">
				<header class="s-title">
					<h1>Add a new recipe</h1>
				</header>
					
				<!--content-->
				<section class="content full-width">
					<div class="submit_recipe container">
<<<<<<< HEAD
						<form>
=======
						<form action="{{('addrecipe')}}" method="post">
						@csrf
>>>>>>> cfebb4fcd2bf6db133d82915c7fc912021090ba9
							<section>
								<h2>Basics</h2>
								<p>All fields are required.</p>
								<div class="f-row">
									<div class="full"><input type="text" placeholder="Recipe title" /></div>
								</div>
								<div class="f-row">
									<div class="third"><input type="text" placeholder="Preparation time" /></div>
									<div class="third"><input type="text" placeholder="Cooking time" /></div>
									<div class="third"><input type="text" placeholder="Difficulty" /></div>
								</div>
								<div class="f-row">
<<<<<<< HEAD
									<div class="third"><input type="text" placeholder="Serves how many people?" /></div>
									<div class="third"><select><option selected="selected">Select a category</option></select></div>
=======
									<div class="third">
										<select>
											<option selected="selected">Select a category</option>
										</select>
									</div>
>>>>>>> cfebb4fcd2bf6db133d82915c7fc912021090ba9
								</div>
							</section>
							
							<section>
								<h2>Description</h2>
								<div class="f-row">
<<<<<<< HEAD
									<div class="full"><textarea placeholder="Recipe title"></textarea></div>
=======
									<div class="full"><textarea name="description" placeholder="Recipe description"></textarea></div>
>>>>>>> cfebb4fcd2bf6db133d82915c7fc912021090ba9
								</div>
							</section>	
							
							<section>
								<h2>Ingredients</h2>
								<div class="f-row ingredient">
<<<<<<< HEAD
									<div class="large"><input type="text" placeholder="Ingredient" /></div>
									<div class="small"><input type="text" placeholder="Quantity" /></div>
									<div class="third"><select><option selected="selected">Select a category</option></select></div>
									<button class="remove"></button>
								</div>
								<div class="f-row full">
									<button class="add">Add an ingredient</button>
								</div>
							</section>	
							
							<section>
=======
									<div class="large"><input type="text" name="ingredient" placeholder="Ingredient" /></div>
									<!--<button class="remove">Remove</button>-->
								</div>
								<!--<div class="f-row full">
									<button class="add">Add</button>
								</div>-->
							</section>

							<!--<section>
>>>>>>> cfebb4fcd2bf6db133d82915c7fc912021090ba9
								<h2>Instructions <span>(enter instructions, each step at a time)</span></h2>
								<div class="f-row instruction">
									<div class="full"><input type="text" placeholder="Instructions" /></div>
									<button class="remove">-</button>
								</div>
								<div class="f-row full">
									<button class="add">Add</button>
								</div>
<<<<<<< HEAD
							</section>
							
=======
							</section>-->

>>>>>>> cfebb4fcd2bf6db133d82915c7fc912021090ba9
							<section>
								<h2>Photo</h2>
								<div class="f-row full">
									<input type="file" />
								</div>
<<<<<<< HEAD
							</section>	
							
							<section>
=======
							</section>

							<!--<section>
>>>>>>> cfebb4fcd2bf6db133d82915c7fc912021090ba9
								<h2>Status <span>(would you like to further edit this recipe or are you ready to publish it?)</span></h2>
								<div class="f-row full">
									<input type="radio" id="r1" name="radio"/>
									<label for="r1">I am still working on it</label>
								</div>
								<div class="f-row full">
									<input type="radio" id="r2" name="radio"/>
									<label for="r2">I am ready to publish this recipe</label>
								</div>
<<<<<<< HEAD
							</section>
							
=======
							</section>-->

>>>>>>> cfebb4fcd2bf6db133d82915c7fc912021090ba9
							<div class="f-row full">
								<input type="submit" class="button" id="submitRecipe" value="Publish this recipe" />
							</div>
						</form>
					</div>
				</section>
				<!--//content-->
			</div>
			<!--//row-->
		</div>
		<!--//wrap-->
	</main>
	<!--//main-->
	
	
	<!--footer-->
	<footer class="foot" role="contentinfo">
		<div class="wrap clearfix">
			<div class="row">
				<article class="one-half">
					<h5>About FranDen Dietries Community</h5>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>
				</article>
				<article class="one-fourth">
					<h5>Follow us</h5>
					<ul class="social">
						<li><a href="#" title="facebook"><i class="fa fa-fw fa-facebook"></i></a></li>
						<li><a href="#" title="youtube"><i class="fa  fa-fw fa-youtube"></i></a></li>
						<li><a href="#" title="rss"><i class="fa  fa-fw fa-rss"></i></a></li>
						<li><a href="#" title="gplus"><i class="fa fa-fw fa-google-plus"></i></a></li>
						<li><a href="#" title="linkedin"><i class="fa fa-fw fa-linkedin"></i></a></li>
						<li><a href="#" title="twitter"><i class="fa fa-fw fa-twitter"></i></a></li>
						<li><a href="#" title="pinterest"><i class="fa fa-fw fa-pinterest-p"></i></a></li>
						<li><a href="#" title="vimeo"><i class="fa fa-fw fa-vimeo"></i></a></li>
					</ul>
				</article>
				
				<div class="bottom">
					<p class="copy">Copyright 2023 FranDen Dietries. All rights reserved</p>
					
					<nav class="foot-nav">
						<ul>
							<li><a href="home" title="Home">Home</a></li>
							<li><a href="recipes.html" title="Recipes">Recipes</a></li>
							<li><a href="blog.html" title="Blog">Blog</a></li>
                            <li><a href="forum.html" title="Forum">Foruk</a></li>
							<li><a href="contact.html" title="Contact">Contact</a></li>    
							<li><a href="find_recipe.html" title="Search for recipes">Search for recipes</a></li>
							<li><a href="login.html" title="Login">Login</a></li>	<li><a href="register.html" title="Register">Register</a></li>													
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</footer>
	<!--//footer-->
	
</body>
</html>