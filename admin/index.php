<html>
<head>
<link rel="stylesheet" href="headbar.css" type="text/css">
<link rel="stylesheet" href="../events/eventInfoStyle.css" type="text/css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="headbar.js"></script>
<style>

.formWrap{
	margin:0 auto;
	position:relative;
	background-color:#999;
	padding:2em;
	width:25%;
	margin-top:3em;
}

.formfield{
	margin:0 auto;
	width:50%;
	display:inline-block;
	margin-top: 1em;
	margin-bottom: 1em;
}
.headbar{
margin-top:-3em;
}
.body{
margin:0;
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
		<div class = "signup" id='home'>Home</div>
	</div>

<?php //starting tag

$con=mysqli_connect("localhost","jakepode_user1","Hello.5253","jakepode_hellodb");

// Check connection

if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}

mysqli_close($con);

//ending tag ?>

<div class = "formWrap">

	<form action="adminDirectory.php" method="post">
	<div class ="formfield">Password:<br> <input type="text" name="passcode"></div>
	<div class ="formfield"><input type="submit"></div>
	</form>
	
</div>

</body>
</html>

