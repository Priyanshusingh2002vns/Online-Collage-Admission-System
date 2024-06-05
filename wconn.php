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
$Name = $_POST['Name']; 
$Father_name = $_POST['Father_name'];
$Mother_name = $_POST['Mother_name'];
$Email = $_POST['Email'];
//$file = $_POST['file'];
$Exam=$_POST['Exam'];
$Rollno=$_POST['Rollno'];
$mark=$_POST['mark'];
$obmark=$_POST['obmark'];
$DOB = $_POST['DOB'];
$Gender = $_POST['Gender'];
$Phone = $_POST['Phone'];
$Address = $_POST['Address'];
$Password = $_POST['Password'];
$Course =$_POST['Course'];



// performing insert query execution
// table name is form
$sql ="INSERT INTO form (Name,Father_name,Mother_name,Email,DOB,Gender,Phone,Exam,Rollno,mark,obmark,Address,Password,Course)  VALUES ('$Name','$Father_name','$Mother_name','$Email','$DOB','$Gender','$Phone','$Exam','$Rollno','$mark','$obmark','$Address','$Password','$Course')";

if(mysqli_query($conn, $sql)){
echo "Your form has been successfully submited.wait for admin approval.";
}
else{
echo "ERROR: hush!sorry." 
.mysqli_error($conn);
}

// close connection
mysqli_close($conn);
?>   