<?php

session_start();

?>


<!DOCTYPE html>
<html>
<head>
 <titke>Admin </title>
 <style>
 .header{
  background: #ee0979;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #ff6a00, #ee0979);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #ff6a00, #ee0979); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    padding :20px;
    text-align: center;
}
.topnav{
    overflow:hidden;
    background-color: #333;
}

/*LINK INSIDE THE NAV BAR*/
.topnav a{
    float: right;
    display:block;
    color:#f2f2f2;
    text-align: center;
    padding:14px 16px;
    text-decoration: none;
}

        .topnav a:hover{
            background-color: #ddd;
            color: black;
        }
        * {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

//Table design

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.footer{
  background: #159957;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #155799, #159957);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #155799, #159957); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  text-align: center;
  padding: 20px;
}

</style>
</head>
<body>

<div class="header">
        <h1>APKP University,Varanasi</h1>
        <p>(BHU,Varanasi)</p>
    </div>

    <div class="topnav">
    <a href ="adlogout.php">Logout</a>
    <a href ="display.php">Course</a>
       <a href ="#">Home</a>

       </div>
       <h2 style="text-align:center";>welcome <?php echo $_SESSION['Email'] ; ?></h2>
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
}else echo"";



$query="select * from form";
$result=mysqli_query($conn,$query);
?>
<table>
<t>
<th scope="col">id</th>
  <th scope="col">Name</th>
  <th scope="col">Father_name</th>
    <th scope="col">Mother_name</th>
    <th scope="col">Email</th>
    <th scope="col">DOB</th>
    <!-- <th scope="col">Document</th> -->
    <th scope="col">Gender</th>
    <th scope="col">Phone</th>
    <th scope="col">Pre Exam</th>
    <th scope="col">Rollno</th>
    <th scope="col">Total marks</th>
    <th scope="col">Ob.marks</th>
    <th scope="col">Address</th>
    <th scope="col">Password</th>
    <th scope="col">Course</th>
    <th scope="col">Status</th>
    <th scope="col">Action</th>

</t>
<?php
while($rows=mysqli_fetch_assoc($result))
{
?>


<tr>
<td><?php echo $rows['id']; ?></td>
<td><?php echo $rows['Name']; ?></td>
<td><?php echo $rows['Father_name']; ?></td>
<td><?php echo $rows['Mother_name']; ?></td>
<td><?php echo $rows['Email']; ?></td>
<td><?php echo $rows['DOB']; ?></td>

 <!-- <td><?php echo $rows['file'];?> </td> -->
<td><?php echo $rows['Gender']; ?></td>
<td><?php echo $rows['Phone']; ?></td>

<td><?php echo $rows['Exam']; ?></td>
<td><?php echo $rows['Rollno']; ?></td>
<td><?php echo $rows['mark']; ?></td>
<td><?php echo $rows['obmark']; ?></td>

<td><?php echo $rows['Address']; ?></td>
<td><?php echo $rows['Password']; ?></td>
<td><?php echo $rows['Course']; ?></td>
<td><?php echo $rows['status']; ?></td>
<td><button><a href="accept.php?id= <?php echo $rows['id']; ?>">Accept</a></button></td>
<td><button><a href="decline.php?id= <?php echo $rows['id']; ?>">Decline</a></button></td>
</tr>
<?php
}
?>
</table>
<div class="footer">
        <p>APKP University,Varanasi © 2022</p>
        <p>All Rights Reserved.</p>
       </footer>
      </div>
</body>
</html>