<!--<header class="header-section">
    <div class="container">
        <div class="logo">
            <a href="./index.html">
                <h1>FranDen Dietries</h1>
            </a>

        </div>
        <div class="nav-right search-switch"> <i class="fa fa-search"></i>
        </div>
        <div class="nav-menu">
            <nav class="main-menu mobile-menu">
                <ul>
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="{{('recipes')}}">Recipe categories</a>
                        <ul class="sub-menu">
                            <li><a href="{{('recipes')}}">Meals</a></li>
                            <li><a href="categories.html">Drinks</a></li>
                            <li><a href="recipe.html">Salads</a></li>
                        </ul>
                    </li>
                    <li><a href="recipe.html">Forum</a></li>
                    <li><a href="{{('addrecipe') }}">Add Recipe</a></li>
                    <li><a class="btn btn-primary" href="{{('logout') }}">Logout</a></li>

                </ul>
            </nav>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="home/css/header.css" />
    <title></title>
</head>

<body>
    <nav>
        <div class="logo" style="display: flex;align-items: center;">
            <span style="color:#01939c; font-size:26px; font-weight:bold; letter-spacing: 1px;margin-left: 20px;">FRANDEN DIETRIES</span>
        </div>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Recipe categories</a>
                <ul class="sub-menu">
                    <li><a href="{{('recipes')}}">Meals</a></li>
                    <li><a href="categories.html">Drinks</a></li>
                    <li><a href="recipe.html">Salads</a></li>
                </ul>
            </li>
            <li><a href="recipe.html">Forum</a></li>
            <li><a href="{{('addrecipe') }}">Add Recipe</a></li>
            <li><a href="{{('logout') }}">Logout</a></li>
        </ul>
    </nav>
    <script src="home/js/header.js"></script>
</body>

</html>