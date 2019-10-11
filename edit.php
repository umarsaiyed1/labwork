<?php

include 'connect.php';

if (isset( $_POST['submit'] )) //NB this implies you called your submit button “submit” !
{

$updatequery = "UPDATE users SET 
      firstname = '" .$_POST['fname']."' ,
	surname = '" .$_POST['sname']."' ,
	email = '" .$_POST['email']."' ,
	password = '" .$_POST['pass']."' 
	Where ID = '" .$_GET['id']."' ";
	
	
    if (!$mysqli->query($updatequery)) {
        echo "Error: ".$mysqli->error;
    }
    else {
        echo "<p>Record updated successfully</p>";
        echo "<a href=\"display.php\">display</a>";
    } 
    $mysqli->close();
   
}
else
{
  $populatequery = "SELECT * from users WHERE ID='".$_GET['id']."'";
  $result = $mysqli->query ($populatequery);
  if ($result){
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) 
      {
        $fn = $row['firstname'];
	  $sn = $row['surname'];
	  $em = $row['email'];
	  $pw = $row['password'];
	  }
     }
?>

<!DOCTYPE html>
<html>
<head>
<title> my edit page </title>
</head>
<body>
<h1>Edit record:</h1>
<form action="edit.php?id=<?php echo $_GET['id']; ?>" method="post" >
   Firstname: <br>
<input class="form-control" type="text" id="fname" name="fname" value="<?php echo "$fn"; ?>"/><br>
   Surname: <br>
<input class="form-control" type="text" id="sname" name="sname" value="<?php echo"$sn"; ?>"/><br>
   Email: <br>
<input class="form-control" type="text" id="email" name="email" value="<?php echo"$em"; ?>"/><br>
   Password: <br>
<input class="form-control" type="password" id="pass" name="pass" value="<?php echo"$pw"; ?>"/><br>
<input class="btn btn-primary" type="submit" id="submit" name="submit" value="submit"/>
</form>	
</div>
</body>
</html>
<?php	
} //this bracket closes the one that opened at if ($result) and NOT the else block which we are within!
}
