<html>

<head>

<link rel="stylesheet" type="text/css" href="tableStyle.css">

<link rel="stylesheet" type="text/css" href="eventStyle.css">

<link rel="stylesheet" type="text/css" href="headbar.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript" src="header.js"></script>





<style>

.headbar{

margin-top:-4em;

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

<h1>Events</h1>

<?php //starting tag


// Check connection

if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}



function runMyFunction($input) {

    echo $input;

  }



runMyFunction($_GET['eventName']);



$orderthing = 'Date';

$result = mysqli_query($con,"SELECT * FROM Events ORDER BY $orderthing ASC");



echo "<div class='Table'>

	<table >

        <tr><td>Name</td>

		<td >Date</td>

		<td>Signed Up</td>

		<td>Max Spots</td>

    </tr>";





while($row = mysqli_fetch_array($result)) {

 /* echo "<tr>";

  echo "<td><a href ='http://www.wvnhs.com/events/eventInfo.php?eventName=".$row['Name']."'>" . $row['Name'] . "</a></td>";

  echo "<td>" . $row['Date'] . "</td>";

  echo "<td>" . $row['Spots_Taken'] . "</td>";

    echo "<td>" . $row['Total_Spots'] . "</td>";

  echo "</tr>";*/

  $date = $row['Date'];

  $date2 = date_create($date);

  $eventName = $row['Name'];

  if($eventName != 'KHK')$newName = preg_replace('/(?<!\ )[A-Z]/', ' $0', $eventName);

  else $newName =$eventName;



   echo "<tr>

            <td >

             <a href ='http://www.wvnhs.com/events/eventInfo.php?eventName=".$row['Name']."'>" . str_replace("_", " ", $newName) . "</a>

            </td>

            <td>

              " . date_format($date2, "M d") . "

            </td>

            <td>

              " . $row['Spots_Taken'] . "

             </td>

			 <td>

              " . $row['Total_Spots'] . "

             </td>

        </tr>";

}



echo "</table>

            </div>";



mysqli_close($con);



//ending tag ?>



</body>

</html>

