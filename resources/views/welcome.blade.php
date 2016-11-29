<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>ThisThat</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                background-image: url("/images/index/background.jpg");
                color: #ffffff;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                background-size: 100% 100%;
                background-repeat: no-repeat;
                text-shadow: 1px 1px #5c5c5c;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                  color: #ffffff;
                  padding: 0 25px;
                  font-size: 12px;
                  font-weight: bold;
                  letter-spacing: .1rem;
                  text-decoration: none;
                  text-transform: uppercase;
                  border: 1px solid #ffffff;
                  padding: 10px;
                    box-shadow: 1px 1px #5c5c5c;
              }
            .links > a:hover {
                color: red;
                padding: 0 25px;
                font-size: 12px;
                font-weight: bold;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                border: 1px solid #ffffff;
                background-color: white;
                padding: 10px;
                box-shadow: 1px 1px #5c5c5c;
                text-shadow: 1px 0px #5c5c5c;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md" style=" text-shadow: 2px 2px #8c8c8c;">
                    Secret Santa
                </div>

                <div class="links">
                    <a href="/home">Home</a>
                    <a href="/deal">Deals</a>
                    <a href="/howItWorks">How it works</a>
                    <a href="/aboutUs">About us</a>
                </div>
                <h3 style="border: 1px solid #ffffff; background-color: red;"> Be a "Secret Santa" for your loved one through gifting from our site.</h3>
            </div>

        </div>


    </body>
</html>
