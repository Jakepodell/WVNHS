<html>

<head>

<link rel="stylesheet" type="text/css" href="../events/headbar.css">

<link rel="stylesheet" type="text/css" href="../events/eventInfoStyle.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript" src="../events/header.js"></script>





<style>

.headbar{

margin-top:-4em;

}

p{

margin-bottom:0em;

}

</style>



</head>

<body>

<div class = "headbar">

		<div class = "signup" id='signup'>Create Account!</div>

		<div class = "signup" id='admin'>Admin Login</div>

		<div class = "signup" id='events'>Events</div>

		<div class = "signup" id='members'>Members</div>

		<div class = "signup" id='mystats'>My Stats</div>

		<div class = "signup" id='forms'>Forms</div>

		<div class = "signup" id='home'>Home</div>

	</div>

	

<?php //starting tag

// Check connection

if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}



echo "<h1>Sign In</h1>";



mysqli_close($con);



//ending tag ?>



<div class = "announcmentWrapper">

	<div class = "announcment">

		<form action="Data.php" method="post">

		<p>User Identification:<br> <input type="text" name="id"></p>

		<input type="submit">

		</form>

	</div>

</div>





</body>

</html>

