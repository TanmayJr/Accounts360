<?php
include 'core/init.php'
?>
<!doctype html>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bannerpagecss.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

    <!--custom fonts-->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Heebo" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Cookie|Zilla+Slab+Highlight" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/login.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <title>Login - Accounts 360</title>

</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="Stock/templogo.png" height="55px" width="55px"></a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Details</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Register</button>
                    <button class="btn btn-outline-info my-2 my-sm-0" style="margin-left: 10px" type="submit">Login</button>
                </form>
            </div>
        </nav>
    </div>
<div class="container">
    <!--<div class="row"   style="margin-left: 150px; margin-top: 200px;">
        <div class="col-md-5 col-centered">
            <div class="login-box">
                <form>
                    <legend><p>Login to your account</p></legend>

                    <table width="100%" align="center" cellspacing="1" border="1" >
                        <tr>
                            <td>&nbsp;Email</td>
                        </tr>

                        <tr>
                            <td><input type="email" name="email" style="width: 100%; border-radius: 15px;"><br></td>
                        </tr>

                        <tr>
                            <td>Password</td>
                        </tr>

                        <tr>
                            <td><input type="password" name="password" style="width: 100%; border-radius: 15px;"></td>
                        </tr>

                        <tr>
                            <td><input type="submit" value="Log-in" style="margin: 0 auto; text-align: center;display: block; border-radius: 8px;"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-8 col-centered">

            <form>
                    <legend><p class="text-center">Login to your account</p></legend>
            <table width="100%" align="center" cellspacing="1" border="1" >
                        <tr>
                            <td>&nbsp;Email</td>
                        </tr>

                        <tr>
                            <td><input type="email" name="email" style="width: 100%; border-radius: 15px;"><br></td>
                        </tr>

                        <tr>
                            <td>Password</td>
                        </tr>

                        <tr>
                            <td><input type="password" name="password" style="width: 100%; border-radius: 15px;"></td>
                        </tr>

                        <tr>
                            <td><input type="submit" value="Log-in" style="margin: 0 auto; text-align: center;display: block; border-radius: 8px;"></td>
                        </tr>
                    </table>
            </form>
</div>
    </div>-->

    <section id="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-centered">
                    <div class="form-wrap">
                        <h1>Log in to your account</h1>
                        <form role="form" action="loginbackend.php" method="POST" id="login-form" autocomplete="off">
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com">
                            </div>
                            <div class="form-group">
                                <label for="key" class="sr-only">Password</label>
                                <input type="password" name="key" id="key" class="form-control" placeholder="Password">
                            </div>
                            <div class="checkbox">
                                <span class="character-checkbox" onclick="showPassword()"></span>
                                <span class="label">Show password</span>
                            </div>
                            <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Log in">
                        </form>
                        <a href="" class="forget" data-toggle="modal" data-target=".forget-modal">Forgot your password?</a>
                        <a href="" class="forget" data-toggle="modal" data-target=".forget-modal">Dont have an account?Sign up</a>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </section>



</div>

<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
