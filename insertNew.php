<?php
      //$_POST['com'] should contain our new comments, pay close attention to the fact the name com must be the keyname sent by the AJAX request we will write.

$servername = "localhost";
$username = "student";
$password= "website";
$dbasename = "comments";


// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbasename);

// Check connection
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

    $com = $_POST['com'];	
	
	$stmt = $mysqli->prepare("INSERT into comments (comments) VALUES (?)");
	$stmt->bind_param('s', $com);
	$success = $stmt->execute(); 
	
	$stmt->close();
	$mysqli->close();
?>
