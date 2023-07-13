<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="forum/comments/chat.css">
    <title>Document</title>
</head>

<body>
    <!--topic title-->

    <div class="menu">
        <div class="name"></div>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
        {{session()->get('message')}}

    </div>
    @endif

    <div class="typezone">
        <form method="post" action="{{url('/add_chat')}}">
            @csrf
            <textarea type="text" name="message" placeholder="Say something"></textarea><input type="submit" class="send" value="" />
        </form>
        <div class="emojis"></div>
    </div>
</body>

</html>