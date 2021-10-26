<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATG WORLD | Dashboard</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Poppins&family=Roboto&display=swap');
        .bg {
            background-image: linear-gradient(#4FC6FC, #AC80F4);
            min-height: 100vh;
            padding: 30px 0px;
            align-items: center;
        }
        .dashboard-navbar {
            width: 100%;
            padding: 10px 0px;
            margin-bottom: 30px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }
        .heading {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 700;
            font-size: 32px;
            line-height: 23px;
            color: #ffffff;
            text-align: left;
        }
        .logout {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 700;
            font-size: 17px;
            line-height: 23px;
            color: #c21807;
            text-decoration: none;
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
                    <div class="dashboard-navbar">
                        <h1 class="heading">Dashboard</h1>
                        <a href="{{ route('auth.logout') }}" class="logout">Log Out</a>
                    </div>
                    <div class="login-card shadow">
                        <h1 class="message">Hello, {{ $LoggedUserInfo['name'] }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>