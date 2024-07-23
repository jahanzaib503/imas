<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMAS Medical| Medicals from £45 - Taxi | D4 | Pre-Employment | Safety Critical</title>
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <style>
        *,
        body {
            padding: 0;
            margin: 0;
            color: #373537;
            /* background-image: url('{{ asset('assets/images/home/login_bg.webp') }}');
            background-position: cover;
            background-repeat: no-repeat; */
            
        }
        body{
            background-image: url('{{ asset('assets/images/home/login_bg.webp') }}');
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100%;
        }

        .logo img {
            max-width: 150px;
        }

        .login_section {
            width: 100%;
            height: 100svh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #2193b024;
            
        }

        .login_section .container {
            max-width: 1000px;
            backdrop-filter: blur(30px);
            background: #2193b01c;
            box-shadow: 0 0 15px #37353770;
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(1.5px);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .left {
            width: 48%;
            padding: 80px 20px;
            overflow: hidden;
        }

        .right {
            width: 48%;
            overflow: hidden;
        }

        .right img {
            width: 100%;
            height: auto;
            object-fit: cover;
            object-position: center;
        }

        .flex_left_right {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }

        .form_section {
            text-align: center;
        }

        .welcome_text h1 {
            margin: 20px 0px 0px 0px;
            font-size: 50px;
            font-weight: 600;
        }

        .welcome_text p {
            font-size: 18px;
            margin: 10px 0px 30px 0px;
        }

        .social_login {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .social_login .social_btn {
            display: block;
            padding: 10px 38px;
            border: 1px solid #8080805e;
            background: #ffffff63;
            color: #000;
            font-size: 17px;
            border-radius: 5px;
        }

        .separator {
            display: flex;
            align-items: center;
        }

        .separator .line {
            height: 1px;
            flex: 1;
            background-color: #d0d0d0;
        }

        .separator h2 {
            padding: 0 10px;
            font-size: 18px;
            font-weight: 500;
            margin: 20px 0px;
        }

        .form_section form label {
            display: block;
            text-align: start;
            margin: 15px 0 5px 0px;
        }

        .form_section form .form-control {
            width: -webkit-fill-available;
            padding: 10px;
            border: 1px solid #d0d0d0;
            text-align: start;
            border-radius: 10px
        }

        .flex_forget {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            margin: 20px 0px;
        }

        .flex_forget .flex_remember {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .flex_forget .flex_remember label {
            margin: 0;
            padding: 0;
        }

        .flex_forget a {
            color: black;
        }
        .sign_in {
            display: block;
            margin: 0 auto;
            width: 100%;
            padding: 10px;
            border-radius: 40px;
            background: #222;
            color: #fff;
            cursor: pointer;
            border: 1px solid;
            transition: .4s all ease;
        }

        .sign_in:hover {
            background: #2193b0;
        }
        .form_section form .form-control:focus {
            outline: 1px solid #2193b0;
        }
        @media (max-width: 1000px) {
            .left {
                width: 100%;
                padding: 50px 20px;
            }

            .right {
                display: none;
            }

            .login_section .container{
                width: 90%;
            }
        }
      
    </style>
</head>

<body>
    <section class="login_section">
        <div class="container">
            <div class="flex_left_right">
                <div class="left">
                    <div class="form_section">
                        <div class="logo">
                            <img src="{{ asset('assets/images/imas_logo.png') }}" alt="">
                        </div>
                        <div class="welcome_text">
                            <h1>Welcome!</h1>
                            <p>Please enter your details</p>
                        </div>
                        {{-- <div class="social_login">
                            <a href="javascript:void(0);" class="social_btn">
                                <i class="fa-brands fa-google"></i>
                            </a>
                            <a href="javascript:void(0);" class="social_btn">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="javascript:void(0);" class="social_btn">
                                <i class="fa-brands fa-apple"></i>
                            </a>
                        </div>
                        <div class="separator">
                            <div class="line"></div>
                            <h2>or</h2>
                            <div class="line"></div>
                        </div> --}}
                        <form action="">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="youremail@mail.com">

                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="*********">
                            <div class="flex_forget">
                                <div class="flex_remember">
                                    <input type="checkbox" name="remember_me" id="remember_me">
                                    <label for="remember_me">Remember me</label>
                                </div>
                                <a href="javascript:void(0);">Forget Password?</a>
                            </div>
                            <button type="submit" class="sign_in">Sign In</button>
                        
                        </form>
                    </div>
                </div>
                <div class="right">
                    <img src="{{ asset('assets/images/login.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
</body>

</html>
