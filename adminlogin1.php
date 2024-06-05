<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <style>
                .header{
  background: #ee0979;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #ff6a00, #ee0979);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #ff6a00, #ee0979); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    padding :20px;
    text-align: center;
}
        body{
            background-color: rgb(4, 5, 41);
            font-family:'Roboto',sans-serif;
        }
        .adlogin-box{
     width: 360px;
     height: 280px;
     margin: auto;
     border-radius: 3px; 
     background-color: white;
        }
        h1{
            text-align: center;
            padding-top: 15px;
        }
        form{
            width: 300px;
            margin-left: 20px;
        }
        form label{
            display: flex;
            margin-top: auto;
            font-size: 18px;
        }
form input{
    width: 100%;
    padding: 7px;
    border: none;
    border: 1px solid gray;
     border-radius:6px ;
     outline: none;

}
button[type="submit"]{
    width: 320px;
    height:35px;
    margin-top: 20px;
    border: none;
    background-color: rgb(32, 208, 202);
    color: white;
    font-size: 18px;
}
p{
    text-align: center;
    padding: 20px;
    font-size: 15px;
    color: rgb(231, 244, 51);
}
    </style>
</head>
<body>
<div class="header">
        <h1>APKP University,Varanasi</h1>
        <p>(BHU,Varanasi)</p>
    </div>

    <div class="adlogin-box">
    
    <h1>Admin Login</h1>
    <form action="adlogin.php" method="post">
    <label>Admin Email</label>
    <input type="Email" name="Email" id="Email">
    <label>Admin Password</label>
    <input type="Password" name="Password"><br><br>
    <button type="submit" >Submit</button>
</form>
</div>

</body>
</html>