

<html>

<head>

	<link rel="stylesheet" type="text/css" href="../events/eventInfoStyle.css">

	<link rel="stylesheet" type="text/css" href="../events/headbar.css">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<script type="text/javascript" src="../events/header.js"></script>

	



</head>

<style>

.headbar{

margin-top:0em;

}

.announcmentWrapper{

	margin-top:5em;

}

h2{

	text-align: left;

}

</style>

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

$result = mysqli_query($con,"SELECT * FROM Events ORDER BY Date ASC, Name ASC");



echo "<div class='announcmentWrapper' id='announcment'>

		 	<div class='announcment'>

		 	<h1>Grand Master Bardi Page</h1>";

while($row = mysqli_fetch_array($result)) {

	$date = $row['Date'];

	$date2 = date_create($date);



	

	if(substr($row['Name'],0,7)==='Library'){

		echo "<hr class ='experiencehr'/>";

		echo "<h2>".

			date_format($date2, "l,  F d")

		." - ".

			preg_replace('/(?<!\ )[0-9]/', ' $0',(substr($row['Name'],15,strlen($row['Name'])-1)))

		." </h2>";



		$eventName = $row['Name'];

		$result2 = mysqli_query($con, "SELECT * FROM $eventName");

		echo "<ol>";

		while($row2 = mysqli_fetch_array($result2)){

			echo "<li>".$row2['FirstName']." ".$row2['LastName']."</li><br>";

		}

		echo "</ol>";

		

	}

	else{

	//	echo (substr($row['Name'],0,6));

	}

	



 }

 echo "</div></div>";







mysqli_close($con);



?>









</body>

</html>
