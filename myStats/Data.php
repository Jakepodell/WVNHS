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

		<div class = "signup" id='forms'>Forms</div>

		<div class = "signup" id='home'>Home</div>

	</div>

	

<?php //starting tag

// Check connection

if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}



$id = mysqli_real_escape_string($con, $_POST['id']);



$member = mysqli_query($con,"SELECT * FROM members WHERE ID=$id");

while($row = mysqli_fetch_array($member)) {	  

	  $name = $row['First']." ".$row['Last'];

	  $grade = $row['Grade'];

	  $pos = $row['Position'];

	  if($pos.length<1)$pos="Member";

	  $email = $row['Email'];

	  $khk=$row['KHK'];

	  $gp =$row['Group_Project'];

	  $hours =$row['Hours'];

	  $meetings =$row['Meetings'];

	 }

	 

echo "<h1>".$name."</h1><br>";

echo "<h2>Statistics<span class='red'>**</span></h2>";



 

 echo "<div class='Table'>

	<table >

        <tr><td>Name</td>

		<td>Grade</td>

		<td>Position</td>

		<td>User Identification</td>

		<td>Email</td>

		<td>Hours</td>

		<td>Group Project</td>

		<td>KHK</td>

		<td>Total</td>

		

    </tr>";

	

   echo "<tr>

            <td >

             ".$name."

			 </td>

            <td>

              ".$grade."

            </td>

            <td>

              ".$pos."

             </td>

			 <td>

              ".$id."

             </td>

			 <td>

              ".$email."

             </td>

			 <td>

              ".($hours+$khk)." hours

             </td>

			 <td>

              ".$gp." of 2 projects

             </td>

			 <td>

              ".$khk." hours of 5 hours

             </td>

			 <td>

              ".(($hours+$khk)+($gp*4))." eq. hours of 20 hours

             </td>

        </tr></table></div><br><br>";



$events = mysqli_query($con, "SELECT * From Events");

$current_date = new DateTime();



echo "<div class = 'announcmentWrapper'>";

	echo "<div class = 'announcment'>";

		echo "<h2><span class = 'red'>**</span>Statistics Key</h2>";

		echo "<hr class = 'experiencehr' />";

		echo "<ul>";

			echo "<li>20 hours needed by the end of the year, 14 for half year mark.</li><br>";

			echo "<li>Hours tab includes hours from KHK.</li><br>";

			echo "<li>1 Group Project needed by half year mark, 2 by the end of the year.</li><br>";

			echo "<li>Half year mark occurs on February 1st.</li><br>";

		echo "</ul>";

echo "</div></div>";





echo "<div class = 'announcmentWrapper'>";

	echo "<div class = 'announcment'>";

	echo "<h2>Events You Are Attending</h2>";

	echo "<hr class = 'experiencehr' />";

		while($row = mysqli_fetch_array($events)){

			$eventName = $row['Name'];

			$date = $row['Date'];

			//echo "<p>".$eventName."</p><br>";

			$event = mysqli_query($con, "SELECT * From $eventName");

			while($member = mysqli_fetch_array($event)){

				$memberID = $member['ID'];

				//echo "<p>".$memberID."</p><br>";

				if($memberID===$id){

					echo "<p>You ";

					if ($opening_date > $current_date)

					  echo "are attending ";

					else

						echo "attended ";

					echo str_replace("_", " ", $eventName);

					$date2 = date_create($date);

					echo " on ".date_format($date2, "l,  F d")."</p>";

				}

			}

		}

	echo "</div></div>";



mysqli_close($con);



//ending tag ?>



</body>

</html>

