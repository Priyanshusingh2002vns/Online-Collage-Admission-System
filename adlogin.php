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

mysqli_select_db($conn,'admission');

$Email=$_POST['Email'];
$Password=$_POST['Password'];

$sql="select * FROM admin where Email='$Email' && Password='$Password'";

$result= mysqli_query($conn,$sql);

$num=mysqli_num_rows($result);

if($num == 1){
$_SESSION['Email']=$Email;

header('location:adwel.php');

}else{
header("location:adminlogin1.php?error= Wrong Email Address or password");
}


?>


