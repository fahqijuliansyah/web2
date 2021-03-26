<?php 
$con = mysqli_connect("localhost","root",""); 
if (!$con) 
 { 
 die('Could not connect: '.mysqli_error()); 
 } 
mysqli_select_db("lat_dbase", $con); 
mysqli_query("INSERT INTO tbl_mhs (FirstName, LastName, Age) 
VALUES ('Karina','Suwandi','29')"); 
mysqli_query("INSERT INTO tbl_mhs (FirstName, LastName, Age) 
VALUES ('Glenn', 'Gandari', '32')"); 
mysqli_close($con); 
?>