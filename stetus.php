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
// $id=$_SESSION['id'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
// $status=$_POST['status'];
$q1="select * from form where Email='$Email' && Password='$Password'";
// echo $q1;exit;

$result1= mysqli_query($conn,$q1);
$dbstatus="";

for($i=0;$i<mysqli_num_rows($result1);$i++){
    $num1=mysqli_fetch_assoc($result1);
    $dbstatus=$num1['status'];
}
echo $dbstatus;


// while($row=mysqli_fetch_assoc($num1)){
    // echo $row[0];
// if($status=='w'){
//     header("location:waiting.html");
// }
// elseif($status=='y'){
// header('location:sely.php');
// }
// elseif($status=='n'){
// header('location:no.php');
// }

// }

if($dbstatus=='w'){
    header("location:waiting.html");
}
elseif($dbstatus=='y'){
header('location:sely.php');
}
elseif($dbstatus=='n'){
header('location:no.php');
}




?>


