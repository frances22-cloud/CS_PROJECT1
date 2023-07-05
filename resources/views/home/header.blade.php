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
            <div class="line1"><li class="active"><a href="#">Home</a></li></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="recipe.html">Forum</a></li>
            <li><a href="{{('login') }}">Login</a></li>
            <li><a href="{{('register') }}">Register</a></li>
        </ul>
    </nav>
    <script src="home/js/header.js"></script>
</body>

</html>