
<html>
<head>
	<link rel="stylesheet" type="text/css" href="eventInfoStyle.css">
</head>
<body>
<?php //starting tag

$con=mysqli_connect("localhost","jakepode_user1","Hello.5253","jakepode_hellodb");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$event = $_GET['eventName'];
$result = mysqli_query($con,"SELECT * FROM Events WHERE Name='$event'");

while($row = mysqli_fetch_array($result)) {
  $eventName=$row['Name'];
  $date=$row['Date'];
  $spotsTaken=$row['Spots_Taken'];
  $totalSpots=$row['Total_Spots'];
 }

echo "<h1>".$eventName."</h1>";
$date2 = date_create($date);
echo "<h2>".date_format($date2, "l,  F d")."</h2>";


echo "<div class='announcmentWrapper' id='announcment'>
		 	<div class='announcment'>
		 		<h1>Event Details</h1>
		 		<hr class = 'experiencehr'>
				<p>Nullam vel velit massa. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
				Morbi sapien nisl, gravida vel aliquam nec, mattis laoreet ante. Curabitur velit urna,
				accumsan sed porttitor vitae, tempus nec lorem. Curabitur auctor quam quis pharetra ornare. 
				Nulla ac accumsan massa. Pellentesque rutrum ac dolor non imperdiet. Vivamus eget nulla ac nibh 
				mollis scelerisque in nec mi. Aenean ac ipsum lectus. In hendrerit ante est, nec cursus
				ex dapibus elementum.</p>
				<hr class = 'experiencehr'>
				<p>Spots Taken: ".$spotsTaken."<br>Total Spots: ".$totalSpots."
			</div>
		 </div>";

$canSign = true;
if($spotsTaken>=$totalSpots) $canSign=false;
echo "<div class='announcmentWrapper' id='announcment'>
		 	<div class='announcment'>
			<form action='signUp.php?eventName=".$eventName."' method='post'>
<p>Student ID:</p> <input type='text' name='id'><br>
<input type='submit' value='Sign Up!'";
if(!$canSign)echo "disabled";
echo "/>
</form>
<div class = 'sideImage'>
	<img src='wvlogo.png'/>
</div>
</div></div>";

if(!$canSign)echo "<h2>There are no more spots left for this, sorry</h2>";

mysqli_close($con);

?>




</body>
</html>