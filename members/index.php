<html>

<head>

<link rel="stylesheet" type="text/css" href="tableStyle.css">

<link rel="stylesheet" type="text/css" href="indexStyle.css">

<link rel="stylesheet" href="headbar.css" type="text/css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript" src="headbar.js"></script>

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

<h1> Board </h1>

<?php //starting tag

// Check connection

if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}



$result = mysqli_query($con,"SELECT * FROM members ORDER BY Position DESC, Last, First ASC");



echo "<div class='Table'>

	<table >

        <tr><td>Last</td>

		<td >First</td>

		<td >Grade</td>

		<td>Position</td>

    </tr>";





while($row = mysqli_fetch_array($result)) {

 /* echo "<tr>";

  echo "<td><a href ='http://www.wvnhs.com/events/eventInfo.php?eventName=".$row['Name']."'>" . $row['Name'] . "</a></td>";

  echo "<td>" . $row['Date'] . "</td>";

  echo "<td>" . $row['Spots_Taken'] . "</td>";

    echo "<td>" . $row['Total_Spots'] . "</td>";

  echo "</tr>";*/

  if($row['Position']!=null){

   echo "<tr>

            <td >

             " . $row['Last'] . "

            </td>

            <td>

              " . $row['First'] . "

            </td>

			<td>

              " . $row['Grade'] . "

            </td>

            <td>

              " . $row['Position'] . "

             </td>

        </tr>";

  }

}



echo "</table>

            </div><br><br><br>";



mysqli_close($con);



//ending tag ?>



</body>

</html>

