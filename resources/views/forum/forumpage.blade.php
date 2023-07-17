<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="forum/mainpage/css/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

    <title>Forum</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-md navbar-light border-bottom p-0 ps-5">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span class="text-main-color fw-bold fs-3">FranDen Dietries Community Forum</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item border-main-color">
                        <a class="nav-link" href="#">
                            <svg class="text-main-color" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M0 0h24v24H0z" fill="none" />
                                <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" />
                            </svg>
                        </a>
                    </li>

                </ul>

                <form class="d-flex">
                    <input class="form-control me-2 search-icon" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>

        </div>
    </nav>
    <div class="bg-light pt-4">
        <div class="container mb-5">
            <div class="col" style="float: right; padding: 30px; width: 30%">
                <ul class="list-group">
                    <!--
                    <li class="list-group-item d-flex justify-content-between">
                        <div class="col text-center border-end hover-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M19 2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 16h-4.83l-.59.59L12 20.17l-1.59-1.59-.58-.58H5V4h14v14zm-8-3h2v2h-2zm1-8c1.1 0 2 .9 2 2 0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2z" />
                            </svg>
                            <span><a href="{{('chats') }}" style="text-decoration: none; color: black;">Ask</a></span>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <div class="col text-center border-end hover-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
                                <rect fill="none" height="24" width="24" />
                                <path d="M3,10h11v2H3V10z M3,8h11V6H3V8z M3,16h7v-2H3V16z M18.01,12.87l0.71-0.71c0.39-0.39,1.02-0.39,1.41,0l0.71,0.71 c0.39,0.39,0.39,1.02,0,1.41l-0.71,0.71L18.01,12.87z M17.3,13.58l-5.3,5.3V21h2.12l5.3-5.3L17.3,13.58z" />
                            </svg>
                            <span><a href="{{('chats') }}" style="text-decoration: none; color: black;">Answer</a></span>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <div class="col text-center hover-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M14.06 9.02l.92.92L5.92 19H5v-.92l9.06-9.06M17.66 3c-.25 0-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29zm-3.6 3.19L3 17.25V21h3.75L17.81 9.94l-3.75-3.75z" />
                            </svg>
                            <span><a href="{{('chats') }}" style="text-decoration: none; color: black;">Post</a></span>
                        </div>
                    </li>
-->
                    <li class="list-group-item d-flex justify-content-between">
                        <div class="col text-center border-end hover-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M14.06 9.02l.92.92L5.92 19H5v-.92l9.06-9.06M17.66 3c-.25 0-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29zm-3.6 3.19L3 17.25V21h3.75L17.81 9.94l-3.75-3.75z" />
                            </svg>
                            <span><a href="{{('topicspage')}}" style="text-decoration: none; color: black;">Topics</a></span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="row" style="grid-template-columns: auto;">

                <div class="col-7" style="float: left; width: 100%">
                    <div class="bg-white border-gray">
                        <div class="row">
                            <div class="col">
                                <input class="w-75 rounded-circle border-gray text-gray-dark rounded-pill bg-light ps-3 text-start" type="button" value="What do you want to ask or share?">
                            </div>
                        </div>
                    </div>
                  
                    @foreach($data as $data)
                    <div class="bg-white border-gray mt-4">
                        <div class="d-flex pt-2">
                            <div class="col d-flex">
                                <div class="d-flex flex-column">
                                    <p style="font-weight: bold; font-size: 6; position: 3;">{{$data->name}}</p>
                                </div>
                            </div>
                            <div class="p-2 text-gray-darker">
                                <button class="btn rounded-circle hover-dark p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                        <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z" />
                                    </svg>
                                </button>
                            </div>
                        </div>


                        <div class="post-body pt-2 ps-3">
                            <div class="post-title fw-bold">
                                <a class="text-decoration-none text-black" href="#">
                                    {{$data->topic_title}}
                                </a>
                            </div>
                            <div class="post-text pt-1">
                                {{$data->topic_message}}
                            </div>
                        </div>
                        

                        <div class="post-footer p-2">

                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="left-button post-button bg-second-color border-0 text-black p-1">
                                    <img src="forum/mainpage/src/up.png" width="20" class="ms-2">
                                    <a href="">0</a>
                                </button>
                                <button type="button" class="right-button post-button bg-second-color border-0 text-black p-1">
                                    <img src="forum/mainpage/src/down.png" width="20" class="me-2">
                                    <a href="">0</a>
                                </button>
                            </div>

                            <button type="button" class="post-button post-button-bg border-0 rounded-circle text-black p-1">
                                <img src="forum/mainpage/src/refresh.png" width="20" class="">
                                1
                            </button>
                            <button type="button" class="post-button post-button-bg border-0 rounded-circle text-black p-1">
                                <a href="{{('comments') }}" style="text-decoration: none; color: black;">
                                <img src="forum/mainpage/src/comment.png" width="25" class="p-1">
                                0</a>
                            </button>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</body>

</html>