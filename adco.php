<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
  font-family: Calibri, Helvetica, sans-serif;
  background-color: pink;
}
.container {
    padding: 50px;
  background-color: lightblue;
}

input[type=text], input[type=password], textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: orange;
  outline: none;
}
 div {
            padding: 10px 0;
         }
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.registerbtn:hover {
  opacity: 1;
}
</style>
</head>
<body>
<form action="cdisp.php"method="post">
  <div class="container">
  <center>  <h1> ADD COURSE</h1> </center>
  <hr>
  <label for="Course_name"> Course name :</label> 
<input type="text" name="Course_name" id="Course_name" required /> 

<label for="Duration"> Duration: </label> 
<input type="text" name="Duration" id="Duration" required /> 
<label for="Fee"> Fee: </label>  
<input type="text" name="Fee" id="Fee" required /> 




<button type="submit">Submit</button>


</form>
</body>
</html>




