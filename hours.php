<html>
<head>
<link rel="stylesheet" type="text/css" href="../events/headbar.css">
<link rel="stylesheet" type="text/css" href="../events/eventInfoStyle.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../events/tableStyle.css">
<script type="text/javascript" src="../events/header.js"></script>


<style>
.headbar{
margin-top:-4em;
}
.Table{
width:80%;
}
.red{
	color:red;
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

$id = mysqli_real_escape_string($con, $_POST['id']);

$member = mysqli_query($con,"SELECT * FROM members");

$counter = 0;
$total = 0;

while($row = mysqli_fetch_array($member)){
		$total+=$row['Hours'];
		$counter++;
}

$average = $total/$counter;
echo "Total ".$total;
echo "<br>Members ".$counter;
echo "<br>Average ".$average;



mysqli_close($con);

//ending tag ?>

</body>
</html>
