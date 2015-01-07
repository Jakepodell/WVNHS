<?php
$con=mysqli_connect("localhost","jakepode_user1","Hello.5253","jakepode_hellodb");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// The message
$message = "Hi,\r\n\r\n
Welcome to Wayne Valley National Honor Society. This Email is to inform you that you have successfully created an account. You can now use the NHS website to sign up for events and view announcements. If you made a mistake signing up, please contact Mary Dwyer or Jake Podell.
			\r\n\r\n Thank you, and see you at the next meeting.";

// Send
mail('podell6@gmail.com', 'Account Created', $message, 'From: WV NHS');

?>