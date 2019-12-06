<?php         
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
 
      $query = $mysqli->query("SELECT * FROM comments");
	$comments = array();
	while($row = $query->fetch_array()){
		array_push($comments, $row);
	}
	$mysqli->close();
      //the line below is significant, it sets the content type to JSON as opposed to the usual returning an HTML document 
	header("Content-type: application/json");
      //the line below encodes our array as JSON and outputs it
	echo json_encode($comments);
	die();
?>
