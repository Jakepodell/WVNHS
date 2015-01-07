<?php
$con=mysqli_connect("localhost","jakepode_user1","Hello.5253","jakepode_hellodb");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$name = mysqli_real_escape_string($con, $_POST['name']);

$result = mysqli_query($con,"SELECT * FROM members
WHERE First='$name'");

while($row = mysqli_fetch_array($result)) {
  echo $row['First'] . " " . $row['Last']. " " . $row['Grade']. " " . $row['Position'];
  echo "<br>";
}

echo "<a href = 'http://www.wvnhs.com/members/all_members.php'> Go Track </a>";

mysqli_close($con);
?>