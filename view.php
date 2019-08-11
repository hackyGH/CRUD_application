
 <!DOCTYPE html>
 <html>
 <head>
   <title>View</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
  <?php
include "dbcon.php";
$query = "SELECT * FROM info"; //You don't need a ; like you do in SQL
$result = mysqli_query($con,$query);
//session_start();
echo "<table class='table'>"; // start a table tag in the HTML
?>
<tr>
  <th>ID</th>
  <th>Name</th>
  <th>Address</th>
  <th>Phone No.</th>
  <th>Email</th>
  <th>Password</th>

</tr>
<?php 

while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
  $temp = $row['id'];
  //$_SESSION['id'] = $temp;
 
echo "<tr><td>" . $row['id'] . "</td><td>" . $row['Name'] . "</td><td>" . $row['address'] . "</td><td>" . $row['phone'] . "</td><td>" . $row['Email'] ."</td><td>" . $row['password'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML 
 ?>


<div class = "Container">
  <a href="index.php"><button  class="btn btn4">HOME</button></a>
</div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 </body>
 </html>