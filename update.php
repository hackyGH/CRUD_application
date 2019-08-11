<?php 
include "dbcon.php";
session_start();
//if(isset($_POST['update'])){
  $name = $_SESSION['name'];
 $password = $_SESSION['pass'];
 $id = $_SESSION['id'];
//}
 
 //$q = "SELECT * FROM `info` WHERE `Name`= '$name' AND `password`= '$password'";
 //$u = mysqli_query($con,$q);
 //$r = mysqli_fetch_array($u);
 if(isset($_POST['submit2'])){

  $n = $_POST['n'];
  $a = $_POST['a'];
  $num = $_POST['num'];
  $e = $_POST['e'];
  $p = $_POST['p'];
  $q2 = "UPDATE `info` SET `Name`='$n',`address`='$a',`phone`='$num',`Email`='$e',`password`='$p' WHERE `id` = '$id'";
  //$insert_query id= " INSERT INTO `info`(`Name`, `address`, `phone`, `Email`, `password`) VALUES ( '$n', '$a', '$num', '$e', '$p') ";
  $run1 = mysqli_query($con, $q2);
  

 }
  //$id = $r['id'];
 
  
   //
  // $r1 = mysqli_query($con,$q2);
 
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
    <form action="update.php" method="POST">
    <label for="usr">Name:</label>
  <input type="text" name="n" class="form-control" id="usr">
</div>
<div class="form-group">
  <label for="usr">Adress:</label>
  <input type="text" name="a" class="form-control" id="usr">
</div>
<div class="form-group">
  <label for="pno">Phone Number:</label>
  <input type="number" name="num" class="form-control" id="pno">
</div>
<div class="form-group">
  <label for="email">Email Id:</label>
  <input type="email" name="e" class="form-control" id="email">
</div>
<div class="form-group">
  <label for="pwd">Password:</label>
  <input type="password" name="p" class="form-control" id="pwd">
</div>
<input type="submit" name="submit2" value="UPDATE" class="btn btn4"> 
    </form>

<div class = "Container">
  <a href="index.php"><button  class="btn btn4">HOME</button></a>
</div>


</body>
</html>

<?php

  
?>