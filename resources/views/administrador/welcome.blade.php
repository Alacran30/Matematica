<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/one-page-wonder.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">

        textarea:focus, textarea.form-control:focus, input.form-control:focus, input[type=text]:focus, input[type=password]:focus, input[type=email]:focus, input[type=number]:focus, [type=text].form-control:focus, [type=password].form-control:focus, [type=email].form-control:focus, [type=tel].form-control:focus, [contenteditable].form-control:focus {
        -webkit-box-shadow: inset 0 -2px 0 #35b5bc; 
        box-shadow: inset 0 -2px 0 #35b5bc; 
        }

    </style>

</head>
<body>
        <div class="homepage-hero-module">
            <div class="video-container">
                <div class="filter"></div>
                <video autoplay loop class="fillWidth">
                    <source src="video/White-Board.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
                    <source src="video/White-Board.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
                </video>
                <div class="poster hidden">
                    <img src="video/White-Board.jpg" alt="">
                </div>
                 <div class="container">
                <div class="row vertical-offset-100">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel2 panel-default2">
                            <div class="panel-heading2">                                
                                <div class="row-fluid user-row">
                                    <a href="{{asset('/')}}"><img src="img/Logotipo_plataforma.png" class="img-responsive" alt="Plataforma Formatíva Matemática"/></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form accept-charset="UTF-8" role="form" class="form-signin">
                                    <fieldset>
                                        <label class="panel-login">
                                            <div class="login_result"></div>
                                        </label>
                                        <input class="form-control" placeholder="Username" id="username" type="text" autofocus>
                                        <input class="form-control" placeholder="Password" id="password" type="password">
                                        <br></br>
                                        <input class="btn btn-lg btn-primary btn-block" type="submit" id="login" value="Login »">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            </div>

    <script src="{{asset('jquery/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    

</body>

</html>
