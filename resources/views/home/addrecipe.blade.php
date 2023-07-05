<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home/css/addrecipe.css">
    
    <title>FranDen Dietries</title>
</head>
<body>

<!-- Header Section Begin -->
@include('home.header3')
    <!-- Header End -->
    <!--main-->
	<main class="main" role="main">
		<!--wrap-->
		<div class="wrap clearfix">
			
			<!--row-->
			<div class="row">
				<header class="s-title">
					<h1>Add a new recipe</h1>
				</header>
					
				<!--content-->
				<section class="content full-width">
					<div class="submit_recipe container">
						<form action="{{('addrecipe')}}" method="post">
						@csrf
							<section>
						
								<h3>Welcome to FranDen Dietries,Fill in the form below to add your own recipes.</h3>
								<div class="f-row">
									<div class="full"><input type="text" placeholder="Recipe title" /></div>
								</div>
								<div class="f-row">
									<div class="third"><input type="text" placeholder="Preparation time" /></div>
									<div class="third"><input type="text" placeholder="Cooking time" /></div>
									<div class="third"><input type="text" placeholder="Difficulty" /></div>
								</div>
								<div class="f-row">
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
									<div class="full"><textarea name="description" placeholder="Recipe description"></textarea></div>
								</div>
							</section>	
							
							<section>
								<h2>Ingredients</h2>
								<div class="f-row ingredient">
									<div class="large"><input type="text" name="ingredient" placeholder="Ingredient" /></div>
									<!--<button class="remove">Remove</button>-->
								</div>
								<!--<div class="f-row full">
									<button class="add">Add</button>
								</div>-->
							</section>

							<!--<section>
								<h2>Instructions <span>(enter instructions, each step at a time)</span></h2>
								<div class="f-row instruction">
									<div class="full"><input type="text" placeholder="Instructions" /></div>
									<button class="remove">-</button>
								</div>
								<div class="f-row full">
									<button class="add">Add</button>
								</div>
							</section>-->

							<section>
								<h2>Photo</h2>
								<div class="f-row full">
									<input type="file" />
								</div>
							</section>

							<!--<section>
								<h2>Status <span>(would you like to further edit this recipe or are you ready to publish it?)</span></h2>
								<div class="f-row full">
									<input type="radio" id="r1" name="radio"/>
									<label for="r1">I am still working on it</label>
								</div>
								<div class="f-row full">
									<input type="radio" id="r2" name="radio"/>
									<label for="r2">I am ready to publish this recipe</label>
								</div>
							</section>-->

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
	
	
	
	
</body>
</html>