<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="home/css/contact.css">

    <title>Contact Page</title>
</head>

<body>
    <header class="ccheader">
        <h1>FranDen Dietries Contact Form</h1>
    </header>

    <div class="wrapper">
        <form method="post" action="" class="ccform">
            <div class="ccfield-prepend">
                <span class="ccform-addon"><i class="fa fa-user fa-2x"></i></span>
                <input class="ccformfield" type="text" placeholder="Full Name" required>
            </div>
            <div class="ccfield-prepend">
                <span class="ccform-addon"><i class="fa fa-envelope fa-2x"></i></span>
                <input class="ccformfield" type="text" placeholder="Email" required>
            </div>
            <div class="ccfield-prepend">
                <span class="ccform-addon"><i class="fa fa-info fa-2x"></i></span>
                <input class="ccformfield" type="text" placeholder="Subject" required>
            </div>
            <div class="ccfield-prepend">
                <span class="ccform-addon"><i class="fa fa-comment fa-2x"></i></span>
                <textarea class="ccformfield" name="comments" rows="8" placeholder="Message" required></textarea>
            </div>
            <div class="ccfield-prepend">
                <input class="ccbtn" type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>

</html>