

<html>

<head>

	<link rel="stylesheet" type="text/css" href="eventInfoStyle.css">

	<link rel="stylesheet" type="text/css" href="headbar.css">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<script type="text/javascript" src="header.js"></script>

	



</head>

<style>

.headbar{

margin-top:-4em;

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

$event = "GardenClub";

$result = mysqli_query($con,"SELECT * FROM Events WHERE Name='$event'");



while($row = mysqli_fetch_array($result)) {

  $eventName=$row['Name'];

  $date=$row['Date'];

  $spotsTaken=$row['Spots_Taken'];

  $totalSpots=$row['Total_Spots'];

 }

 

$result = mysqli_query($con,"SELECT * FROM GardenClub");

$count =0;





echo "<div class='announcmentWrapper' id='announcment'>

		 <div class='announcment'>

			<h1>".$eventName."</h1>

			<hr class = 'experiencehr'>";

				

				$result2 = mysqli_query($con,"SELECT * FROM members ORDER BY Grade DESC, Last ASC");



				while($row = mysqli_fetch_array($result2)) {

						echo $row['Last']." , ".$row['First'].",<br>";

						$count+=1;

				 }

				 echo "<br>EMAILS PRODUCED: ".$count."<br>";

				

			echo

		//	"</ol>

		"</div>

	</div>";







mysqli_close($con);



?>









</body>

</html>
