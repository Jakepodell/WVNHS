<?php

// Check connection

if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}



// escape variables for security

$name1 = mysqli_real_escape_string($con, $_POST['name1']);

$name2 = mysqli_real_escape_string($con, $_POST['name2']);

$grade = mysqli_real_escape_string($con, $_POST['grade']);

$position = mysqli_real_escape_string($con, $_POST['position']);



$sql="INSERT INTO members (First, Last, Grade, Position)

VALUES ('$name1', '$name2', '$grade', '$position')";



if (!mysqli_query($con,$sql)) {

  die('Error: ' . mysqli_error($con));

}



header( 'Location: http://wvnhs.com/members/all_members.php' ) ;



mysqli_close($con);

?>
