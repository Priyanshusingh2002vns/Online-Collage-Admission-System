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
}else 



$query="select * from course";
$result=mysqli_query($conn,$query);
?>


<!DOCTYPE html>
<html>
<title>
<head> DATA FORM DATABASE</head>
</title>
<table align="center" border="1px" style="width:600px; line-height:40px;">
<tr>
<th colspan="5"><h2>COURSE DATABASE</h2>
</tr>
<t>
<th>id</th>
<th>Course name</th>
<th>Duration</th>
<th>Fee</th>
<th>Action</th>


</t>
<?php
while($rows=mysqli_fetch_assoc($result))
{

?>
<tr>
<td><?php echo $rows['id']; ?></td>
<td><?php echo $rows['Course_name']; ?></td>
<td><?php echo $rows['Duration']; ?></td>
<td><?php echo $rows['Fee']; ?></td>
<td><button align="center"><a href="delete.php?id= <?php echo $rows['id']; ?>"> delete</a> </button></td>
</tr>


<?php
}
?>
</table>
<button><a href ="adco.php">ADD NEW COURSE</a></button>
</body>
</html>

























