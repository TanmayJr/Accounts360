
<html>
<head>
  <meta charset="UTF-8">
  <title>Accounts360</title>
      <link rel="stylesheet" href="style.css">
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

       <meta name="viewport" content="width=480, user-scalable=yes">
 <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i|Roboto+Mono:400,700" rel="stylesheet">
 <link rel="icon" size="64x64" href="/favicon.ico">
 <link rel="icon" sizes="192x192" href="icon.jpg">
 <link rel="abc" sizes="192x192" href="icon.jpg">
	


</head>

<body>

<form name="registration" action="registerbackend.php" method="post" onsubmit="return formvalidation();">
	<h2>Sign Up</h2>

	<p>
	<input id="name" name="name" type="text" placeholder="Name">
	</p>

	<p>
	<input id="email" name="email" type="text" placeholder="Email Id">	
	</p>

    <p>
        <input id="company" name="company" type="text" placeholder="Company Name">
    </p>


	<p>
	<input id="pwd1" name="pwd1" type="password" placeholder="Password" onkeyup='check();' >
	</p>
	
	<p>
	<input id="pwd2" name="pwd2" type="password" placeholder="Confirm Password" onkeyup='check();'>
	<span id='message'></span>
	</p>


	<input type="submit" name="submit" value="Create My Account" id="submit">
		
</form>

	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script  src="index.js"></script>
	
</body>
</html>
