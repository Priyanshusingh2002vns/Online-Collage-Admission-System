
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.header{
  background: #ee0979;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #ff6a00, #ee0979);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #ff6a00, #ee0979); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    padding :20px;
    text-align: center;
}
body{
  font-family: Calibri, Helvetica, sans-serif;
  background-color: pink;
}
.container {
    padding: 50px;
  background-color: lightblue;
}

input[type=text], input[type=Password], textarea {
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


<form action="wconn.php"method="post" enctype="multipart/form-data">
  <div class="container">
  <center>  <h1> Student Admission Form</h1> </center>
  <hr>
  <label for="Name"> Name :</label> 
<input type="text" name="Name" id="Name" required /> 
<label for="Father_name"> Father name: </label> 
<input type="text" name="Father_name" id="Father_name" required /> 
<label for="Mother_name"> Mother name: </label>  
<input type="text" name="Mother_name" id="Mother_name"required /> 
<label for="Email"> Email: </label> 
<input type="Email" name="Email"  id="Email" required /><br><br>
<div>
<label> 
Course :
</label> 

<select name="Course">
<option value="Course">Course</option>
<option value="BCA">BCA</option>
<option value="BBA">BBA</option>
<option value="B.Tech">B.Tech</option>
<option value="MBA">MBA</option>
<option value="MCA">MCA</option>
<option value="M.Tech">M.Tech</option>
</select>
</div>
<div>
<label for="Gender"> 
Gender :
</label><br>
<input type="radio" value="Male" name="Gender" id="Gender" checked > Male 
<input type="radio" value="Female" name="Gender" id="Gender"> Female 
<input type="radio" value="Other" name="Gender" id="Gender"> Other

</div>
<lable for="DOB">Date of Birth</lable>
<input type="date" name="DOB" id="DOB"/><br>
<br>
<!-- <label>Select Image File:</label>
<input type="file" name="file" id="file" />
<br> -->
<br>
<label>Previous Appeared Exam Name</label>
<input type="text" name="Exam" placeholder="Previous Exam Name">
<label>Previous Roll no:</label>
<input type="text" name="Rollno" placeholder="Previous Exam Roll no">
<label>Previous year Total marks</label>
<input type="text" name="mark" placeholder="Total marks">
<label>Previous year obtained marks</label>
<input type="text" name="obmark" placeholder="Total obtained marks">
<label for="Phone"> 
Phone :
</label>

<input type="text" name="Phone" placeholder="phone no." id="Phone"/ required> 
<lable for="Address">Current Address :</lable>
<input type="text" name="Address" id="Address"/required>

<lable for="Password">Passward:</lable>
<input type="Password" id="Password" name="Password"><br><br>



<button type="submit">Submit</button>

<div class="footer">
        <p>APKP University,Varanasi © 2022</p>
        <p>All Rights Reserved.</p>
       </footer>
      </div>


</form>
</body>
</html>





