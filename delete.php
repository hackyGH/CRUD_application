<?php 
include "dbcon.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="form-group">
		<form action="delete.php" method="POST">
		<label for="usr">Name:</label>
  <input type="text" name="name" class="form-control" id="usr">
</div>

<div class="form-group">
  <label for="pwd">Password:</label>
  <input type="password" name="pass" class="form-control" id="pwd">
</div>
<input type="submit" name="delete" value="Delete">	
		</form>
  

<div class = "Container">
  <a href="index.php"><button  class="btn btn4">HOME</button></a>
</div>

</body>
</html>

<?php
if(isset($_POST['delete'])){
	$n = $_POST['name'];
	$pass = $_POST['pass'];
	$q = "DELETE FROM `info` WHERE `Name` = '$n' AND `password` = '$pass'";
	$r = mysqli_query($con, $q);
}

?>
