<? 
mysqli_connect("localhost","root",""); 
$dbname="lat_dbase"; 
$cek=mysqli_query("CREATE DATABASE $dbname") or die("Couldn't Create Database: 
$dbname"); 
if($cek){ 
 echo "Database $dbname berhasil dibuat"; 
} 
?>