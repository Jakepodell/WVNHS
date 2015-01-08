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




// Check connection

if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}



$id = mysqli_real_escape_string($con, $_POST['id']);



$events = mysqli_query($con, "SELECT * From Events");



	 

echo "<h1>".$name."</h1><br>";

echo "<h2>Events</h2>";

echo "<div class = 'announcmentWrapper'>";

	echo "<div class = 'announcment'>";

		while($row = mysqli_fetch_array($events)){

			$eventName = $row['Name'];

			//echo "<p>".$eventName."</p><br>";

			$event = mysqli_query($con, "SELECT * From $eventName");

			while($member = mysqli_fetch_array($event)){

				$memberID = $member['ID'];

				//echo "<p>".$memberID."</p><br>";

				if($memberID===$id){

					echo "<p>You are attending ". $eventName . "</p>";

				}

			}

		}

	echo "</div></div>";



mysqli_close($con);



//ending tag ?>



</body>

</html>

