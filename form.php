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
		<form action="form.php" method="POST">
		<label for="usr">Name:</label>
  <input type="text" name="name" class="form-control" id="usr">
</div>
<div class="form-group">
  <label for="usr">Adress:</label>
  <input type="text" name="address" class="form-control" id="usr">
</div>
<div class="form-group">
  <label for="pno">Phone Number:</label>
  <input type="number" name="number" class="form-control" id="pno">
</div>
<div class="form-group">
  <label for="email">Email Id:</label>
  <input type="email" name="email" class="form-control" id="email">
</div>
<div class="form-group">
  <label for="pwd">Password:</label>
  <input type="password" name="pass" class="form-control" id="pwd">
</div>
<input type="submit" name="submit">	
		</form>
  
<div class = "Container">
  <a href="index.php"><button  class="btn btn4">HOME</button></a>
</div>



</body>
</html>

<?php
  if (isset($_POST["submit"])) {
    
  
	$n = $_POST['name'];
	$a = $_POST['address'];
	$num = $_POST['number'];
	$e = $_POST['email'];
	$p = $_POST['pass'];

	$insert_query = " INSERT INTO `info`(`Name`, `address`, `phone`, `Email`, `password`) VALUES ( '$n', '$a', '$num', '$e','$p') ";
 $run1 = mysqli_query($con, $insert_query);
}
?>