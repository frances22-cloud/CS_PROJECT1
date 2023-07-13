<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="home/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="home/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/style.css" type="text/css">
    <link rel="stylesheet" href="home/css/style2.css" type="text/css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>Document</title>
</head>

<body>
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
                <input type="submit" class="btn btn-warning" value="reply">
                <a href="javascript::void(0);" class="btn" onClick="reply_close(this)">close</a>
        </form>
    </div>

    <!--Comments and reply section ends-->
    <script text="text/javascript">
        function reply(caller) {
            document.getElementById('commentId').value = $(caller).attr('data-Commentid');
            $('.replyDiv').insertAfter($(caller));
            $('.replyDiv').show();
        }

        function reply_close(caller) {
            $('.replyDiv').hide();
        }
    </script>
</body>

</html>