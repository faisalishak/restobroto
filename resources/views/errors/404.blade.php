<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Unikom App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #2196F3;
                color: #636b6f;
                font-family: 'Raleway';
                font-weight: 100;
                height: 100vh;
                margin: 0;
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
                font-size: 230px;
                color: white;
            }
            .status {
                font-size: 50px;
                color: white;
            }
            .links > a {
                color: #000000;
                padding: 20px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                background: white;

            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="m-b-md">
                     <div class="status m-b-md">
                            RESTO BROTO
                    </div>
                </div>
                <div class="title m-b-md">
                    404
                </div>
                <div class="status m-b-md">
                    Ups. Sepertinya ada yang nyasar .
                </div>

                <div class="links">
                    <a href="{{url('/login')}}">Login</a>
                    
                </div>
            </div>
        </div>
    </body>
</html>
