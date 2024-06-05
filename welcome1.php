<?php

session_start();

?>


<!DOCTYPE html>
<html>
<head>
 <title>User </title>
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

</style>
</head>
<body>

<div class="header">
        <h1>APKP University,Varanasi</h1>
        <p>(BHU,Varanasi)</p>
    </div>

    <div class="topnav">
    <a href ="userlogout.php">Logout</a>

        <a href ="index.php">Home</a>
    
        <a href="stetuslog.php">Status</a>
        <a href="#" style="position:absolute;left:20px";>sUser</a>
        
        
    </div>

</div>
<h2 style="text-align:center";>welcome <?php echo $_SESSION['Email'] ; ?></h2>


</body>
</html>
