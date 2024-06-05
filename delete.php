<?php  
$servername ="localhost";
$username ="root";
$password="";
$dbname="course";

//create connection
$conn =new mysqli($servername,$username,$password,$dbname);


// check connection
if ($conn ===false){
die("ERROR: could not connnect." 
            . mysql_connect_error());
} 


$id=$_GET['id'];

$q="DELETE FROM course WHERE id=$id";
mysqli_query($conn,$q);
header('location:display.php');
?>