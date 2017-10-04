<?php
include 'core/init.php'
?>
<!doctype html>
<html>
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/login.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <title>Accounts 360</title>

    </head>

    <body>


            <nav class="navbar navbar-inverse" role="navigation">
    	  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <div class="navbar-brand navbar-brand-centered">Brand</div>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="navbar-brand-centered">
		      <ul class="nav navbar-nav">
		        <li><a href="#">Left1</a></li>
		        <li><a href="#">Left2</a></li>



		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#">Right1</a></li>
		        <li><a href="#">Right2</a></li>

		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
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
                    <form role="form" action="login.php" method="POST" id="login-form" autocomplete="off">
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
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>



            </div>

       <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </body>
</html>
