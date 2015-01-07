<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>

		<title>WVNHS Board!</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=8" />
				
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
		
	</head>

<body>

<div class = "headbar">
		<div class = "signup" id='signup'>Create Account!</div>
		<div class = "signup" id='admin'>Admin Login</div>
		<div class = "signup" id='events'>Events</div>
		<div class = "signup" id='members'>Members</div>
		<div class = "signup" id='mystats'>My Stats</div>
		<div class = "signup" id='home'>Home</div>
	</div>
	
<?php //starting tag

$con=mysqli_connect("localhost","jakepode_user1","Hello.5253","jakepode_hellodb");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

echo "<h1>Sign In</h1>";

mysqli_close($con);

//ending tag ?>

<div class = "announcmentWrapper">
	<div class = "announcment">
		<form action="events.php" method="post">
		<p>User ID:<br> <input type="text" name="id"></p>
		<input type="submit">
		</form>
	</div>
</div>


	
</body>
</html>
