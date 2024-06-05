<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: #DAD299;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #B0DAB9, #DAD299);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #B0DAB9, #DAD299); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            font-family:'Roboto',sans-serif;
        }
        .login-box{
     width: 360px;
     height: 280px;
     margin: auto;
     border-radius: 3px; 
     background: #E0EAFC;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #CFDEF3, #E0EAFC);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #CFDEF3, #E0EAFC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

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
    color: rgb(1, 13, 8);
}
    </style>
</head>
<body>
    <div class="login-box">
    
    <h1>Login to know the Status.</h1>
    <form action="stetus.php" method="post">
    <label>Email</label>
    <input type="Email" name="Email" id="Email">
    <label>Password</label>
    <input type="Password" name="Password"><br><br>
    <input type="hidden" name="nid" value="<php echo $_SESSION['id']">
    
   <button type="submit" >Submit</button>
</form>
</div>

</body>
</html>