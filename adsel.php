<?php  
session_start();

$servername ="localhost";
$username ="root";
$password="";
$dbname="admission";

//create connection
$conn =new mysqli($servername,$username,$password,$dbname);


// check connection
if ($conn ===false){
die("ERROR: could not connnect." 
            . mysql_connect_error());
}else{
echo"connected";
}

$status=$_GET['status'];

$q="select * from form where status=$status";
//musqli_query($conn,$q);
if($conn->query($q)===true)
{
echo "copied";
}else{
echo"ERROR:could not able to proceed $q"
.$conn->error;
}
$conn->close();
?>