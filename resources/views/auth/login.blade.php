<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATG TASH!3 | Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Poppins&family=Roboto&display=swap');
        .bg {
            /* background-image: linear-gradient(#4FC6FC, #AC80F4); */
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(91,9,121,1) 50%, rgba(0,212,255,1) 100%);
            min-height: 100vh;
            padding: 30px 0px;
            align-items: center;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .card-settings {
            display: flex;
            flex-direction: row;
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
        .card-heading {
            text-align: center;
            font-family: "Poppins";
            font-style: normal;
            font-weight: 700;
            font-size: 24px;
            line-height: 23px;
            color: #000000;
            margin-bottom: 25px
        }
        .login-div {
            margin: 25px 0px 35px 0px;
        }
        .card-input-heading {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 600;
            font-size: 14px;
            line-height: 14px;
            color: #000000;
            margin-top: 15px;
            margin-bottom: 10px;
        }

        .card-input-box {
            background: #EAF4FF;
            border-radius: 4px;
            padding: 4px 0px;
        }

        .card-input {
            border: none;
            outline: none;
            font-size: 13px;
            width: 100%;
            margin: 1px;
            padding: 3px;
            padding-left: 8px;
            background-color: transparent;
        }
        .error-text {
            font-size: 13px;
        }
        .card-button {
            color: #ffffff !important;
            background: #0075FF !important;
            border-radius: 3.61413px;
            font-family: "Poppins";
            font-style: normal;
            font-weight: 600;
            font-size: 14px;
            line-height: 16px;
            padding: 8px 28px;
            margin-top: 18px;
            margin-bottom: 30px;
        }
        .new-account {
            text-align: center;
            font-family: "Roboto";
            font-style: normal;
            font-weight: 500;
            font-size: 15px;
            line-height: 11px;
            color: #000000;
            text-decoration: none;
            display: block;
            text-align: center;
        }
        .new-account-signup {
            font-weight: bold;
            color: #0075FF;
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
                    <div class="login-card shadow">
                        <h1 class="card-heading">Login</h1>
                        <form action="/auth/check" method="post">

                        @if(Session::get('success'))
                            <div class="alert alert-success error-text">
                                {{ Session::get('success') }}
                            </div>  
                        @endif
                        @if(Session::get('fail'))
                            <div class="alert alert-danger error-text">
                                {{ Session::get('fail') }}
                            </div>    
                        @endif

                        @csrf    
                            <div class="login-div">
                                <div class="form-group">
                                    <label class="card-input-heading">Email</label>
                                    <div class="card-input-box">
                                        <input type="email" class="card-input" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Enter you Email Address" value="{{ old('email') }}"/>
                                    </div>
                                    <span class="error-text text-danger">@error('email'){{ $message }} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label class="card-input-heading">Password</label>
                                    <div class="card-input-box">
                                        <input type="password" class="card-input" name="password" placeholder="Enter password"/>
                                    </div>
                                    <span class="error-text text-danger">@error('password'){{ $message }} @enderror</span>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn card-button">Login</button>
                                </div>
                                <a href="{{ route('auth.register') }}" class="new-account">Don't have an account? <span class="new-account-signup">Signup</span></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>