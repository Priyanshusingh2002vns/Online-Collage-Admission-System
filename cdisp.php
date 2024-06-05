<?php  
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
}


// taking all  input from the form 
$Course_name = $_POST['Course_name']; 
$Duration = $_POST['Duration'];
$Fee = $_POST['Fee'];



// performing insert query execution
// table name is form
$sql ="INSERT INTO course (Course_name,Duration,Fee)  VALUES ('$Course_name','$Duration','$Fee')";

if(mysqli_query($conn, $sql)){
header('location:adco.php');
}
else{
echo "ERROR: hush!sorry." 
.mysqli_error($conn);
}

// close connection
mysqli_close($conn);
?>   