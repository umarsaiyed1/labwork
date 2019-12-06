<!DOCTYPE html>
<html>
<head>
<title> displaypage</title>
</head>
<body>


<h1>Show Rows</h1>
<table>
<tr>
<td>ID</td>  <td>Name</td> <td>Age</td> 
</tr>
<?php 
foreach ($records as $row){
echo '<tr>' ;
echo '<td>'.$row->ID.'</td>';
echo '<td>'.$row->Name.'</td>';
echo '<td>'.$row->Age.'</td>';
echo '</tr>';
}
?>
</table>

</body>
</html>

