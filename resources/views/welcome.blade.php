<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATG TASK!3 | Home</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Poppins&family=Roboto&display=swap');
        .bg {
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(91,9,121,1) 50%, rgba(0,212,255,1) 100%);
            min-height: 100vh;
            padding: 30px 0px;
            align-items: center;
            display: flex;
        }
        .enter {
            display: flex;
            flex-direction: row;
            justify-content: end;
            align-items: center;
            color: #ffffff;
            width: 100%;
            position: absolute;
            top: 5%;
        }
        .home-nav-text {
            display: inline-block;
            font-size: 24px;
            font-weight: 700;
            
            color: #fff;
            text-decoration: none;
            margin-right: 25px;
            padding-bottom: 0px;
        }
        .heading {
            font-family: "Courier";
            font-style: normal;
            font-weight: 700;
            font-size: 32px;
            line-height: 23px;
            color: #ffffff;
            text-align: left;
        }
        .card-settings {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .login-card {
            font-family: "poppins";
            background-color: #ffffff;
            border-radius: 16px;
            padding: 25px;
            width: 90%;
            max-width: 500px;
        }
        .message {
            text-align: center;
            font-family: "Poppins";
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 23px;
            margin: 20px;
            color: #000000;
        }
    </style>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="bg">
        <div class="container">
            <div class="row">
                <div class="col-12 card-settings">
                    <div class="enter">
                        <p><a href="{{ route('auth.login') }}" class="home-nav-text">Login</a></p>
                        <p><a href="{{ route('auth.register') }}" class="home-nav-text">Register</a></p>
                    </div>
                    <div class="login-card shadow">
                        <h1 class="message">Hello Everyone</br>
                            </br>
                            Welcome to the ATG Internships</br>
                           
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>