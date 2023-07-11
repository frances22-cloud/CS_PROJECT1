<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="forum/forumpage/fonts/icomoon/style.css">

    <link rel="stylesheet" href="forum/forumpage/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="forum/forumpage/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="forum/forumpage/css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">

    <title>Forums</title>
</head>

<body>


    <div class="content">

        <div class="container">

            <h2 class="mb-5">Forums</h2>

            <button><a href="{{('addtopic') }}"><i class="fa fa-plus" aria-hidden="true"></i> Create New Topic</a></button>

            <div class="table-responsive">

                <table class="table table-striped custom-table">
                    <thead>
                        <tr>

                            <th scope="col">Number</th>
                            <th scope="col">Creator</th>
                            <th scope="col">Topics</th>
                            <th scope="col">Posts</th>
                            <!--<th scope="col">Last Post</th>-->
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr scope="row">

                            @foreach($data as $data)

                            <td>{{$data->id}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->topic_title}}</td>
                            <td>{{$data->topic_message}}</td>
                            <td><a href="details.php" class="more">Details</a></td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>

    </div>


    <script src="forum/forumpage/js/jquery-3.3.1.min.js"></script>
    <script src="forum/forumpage/js/popper.min.js"></script>
    <script src="forum/forumpage/js/bootstrap.min.js"></script>
    <script src="forum/forumpage/js/main.js"></script>

</body>

</html>