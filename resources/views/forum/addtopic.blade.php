<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="forum/topics/fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="forum/topics/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="forum/topics/css/style.css">

    <title>Add Topic Form</title>
</head>

<body>


    <div class="content">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">


                    <div class="row justify-content-center">
                        <div class="col-md-6">

                            <h3 class="heading mb-4">Let's talk about everything!</h3>
                            <p>Satisfy your curiosity and let the discussion begin. Write your topic title and message and let the discusson commence.</p>

                            <p><img src="forum/topics/images/undraw-contact.svg" alt="Image" class="img-fluid"></p>


                        </div>
                        <div class="col-md-6">

                            @if(session()->has('message'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                                {{session()->get('message')}}

                            </div>
                            @endif

                            <form class="mb-5" method="post" action="{{url('/add_topic')}}">
                            @csrf
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" name="topic_title" id="subject" placeholder="Topic title">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <textarea class="form-control" name="topic_message" id="message" cols="30" rows="7" placeholder="Write your text here"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="submit" name="submit" value="Submit" class="btn btn-primary rounded-0 py-2 px-4">
                                        <span class="submitting"></span>
                                    </div>
                                </div>
                                <br>

                                <button class="backbtn"><a href="{{('topicspage') }}">Back</a></button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <script src="forum/topics/js/jquery-3.3.1.min.js"></script>
    <script src="forum/topics/js/popper.min.js"></script>
    <script src="forum/topics/js/bootstrap.min.js"></script>
    <script src="forum/topics/js/jquery.validate.min.js"></script>
    <script src="forum/topics/js/main.js"></script>

</body>

</html>