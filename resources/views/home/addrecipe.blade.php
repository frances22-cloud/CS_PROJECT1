<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="home/css/addrecipe.css">
	<script src="https://kit.fontawesome.com/e1edd9a381.js" crossorigin="anonymous"></script>
	<title>FranDen Dietries</title>
</head>

<body>
	<!--main-->
	<main class="main" role="main">
		<!--wrap-->
		<div class="wrap clearfix">

			<nav class="navbar">
				<ul>
					<li><a href="userpage" title="Home">Home</a></li>
				</ul>
			</nav>

			<!--row-->
			<div class="row">
				<header class="s-title">
					<h1>Add a new recipe</h1>
				</header>

				<!--content-->
				<section class="content full-width">
					<div class="submit_recipe container">
						<form action="" method="">
							<section>
								<h2>Basics</h2>
								<p>All fields are required.</p>
								<div class="f-row">
									<div class="full"><input type="text" name="title" placeholder="Recipe title" /></div>
								</div>
								<div class="f-row">
									<div class="third"><input type="text" name="preptime" placeholder="Preparation time" /></div>
									<div class="third"><input type="text" name="cooktime" placeholder="Cooking time" /></div>
									<div class="third"><input type="text" name="difficulty" placeholder="Difficulty" /></div>
								</div>
								<div class="f-row">
									<div class="third"><input type="text" name="servepeople" placeholder="Serves how many people?" /></div>
									<div class="third">
										<select>
											<option selected="selected">Select a category</option>
										</select>
									</div>
								</div>
							</section>

							<section>
								<h2>Description</h2>
								<div class="f-row">
									<div class="full"><textarea placeholder="Recipe description"></textarea></div>
								</div>
							</section>

							<section>
								<h2>Ingredients</h2>
								<div class="f-row ingredient">
									<div class="large"><input type="text" name="ingredient" placeholder="Ingredient" /></div>
									<div class="small"><input type="text" name="quantity" placeholder="Quantity" /></div>
									<button class="remove">Remove</button>
								</div>
								<div class="f-row full">
									<button class="add">Add an ingredient</button>
								</div>
							</section>

							<section>
								<h2>Instructions <span>(enter instructions, each step at a time)</span></h2>
								<div class="f-row instruction">
									<div class="full"><input type="text" name="instructions" placeholder="Instructions" /></div>
									<button class="remove">Remove</button>
								</div>
								<div class="f-row full">
									<button class="add">Add a step</button>
								</div>
							</section>

							<section>
								<h2>Photo</h2>
								<div class="f-row full">
									<input type="file" />
								</div>
							</section>

							<section>
								<h2>Status <span>(would you like to further edit this recipe or are you ready to publish it?)</span></h2>
								<div class="f-row full">
									<input type="radio" id="r1" name="radio" />
									<label for="r1">I am still working on it</label>
								</div>
								<div class="f-row full">
									<input type="radio" id="r2" name="radio" />
									<label for="r2">I am ready to publish this recipe</label>
								</div>
							</section>

							<div class="f-row full">
								<input type="submit" class="button" id="submitRecipe" value="Add this recipe" />
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

				<div class="bottom">
					<p class="copy">Copyright 2023 FranDen Dietries. All rights reserved</p>

					<nav class="foot-nav">
						<ul>
							<li><a href="home" title="Home">Home</a></li>
							<li><a href="recipes" title="Recipes">Recipes</a></li>
							<li><a href="blog.html" title="Blog">Blog</a></li>
							<li><a href="forum.html" title="Forum">Forum</a></li>
							<li><a href="contact.html" title="Contact">Contact</a></li>
							<li><a href="find_recipe.html" title="Search for recipes">Search for recipes</a></li>
							<li><a href="login.html" title="Login">Login</a></li>
							<li><a href="register.html" title="Register">Register</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</footer>
	<!--//footer-->

</body>

</html>