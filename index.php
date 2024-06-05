<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APKP University</title>
    <style>
        *{
            box-sizing: boder-box;
        }
        body{
                margin: 0;
            }
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
    float: left;
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

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;

  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
.intro{
    background-color:  #d4c1c1;
    padding :20px;
    text-align: center;
}
.table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
 
 
}

.table td, .table th {
  border: 1px solid #ddd;
  padding: 8px;

  
}

.table tr:nth-child(even){background-color: #f2f2f2;}

.table tr:hover {background-color: #ddd;}

.table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #04AA6D;
  color: white;
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
        <a href ="index.php">Home</a>
    
        <a href ="adf4.php">Apply form</a>
        <a href ="userlogin1.php">Login</a>
        <a href ="adminlogin1.php">Admin Login</a>
    </div>
    <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="one.jpg" style="width:100%"
          height="350px">
          <div class="text">APKP University</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="two.jpg" style="width:100%"
          height="350px">
          <div class="text">APKP Campus.</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="three.jpg" style="width:100%"
          height="350px">
          <div class="text">caption</div>
        </div>
        
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
        
        </div>
        <br>
        
        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>
        <script>
            let slideIndex = 0;
            showSlides();
            
            function showSlides() {
              let i;
              let slides = document.getElementsByClassName("mySlides");
              let dots = document.getElementsByClassName("dot");
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              slideIndex++;
              if (slideIndex > slides.length) {slideIndex = 1}    
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
              setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
            </script>
       <div class="intro">
        <h1>Introduction</h1>
        <hr>
        <p>
            APKP University,Varanasi, established in 1957 by the Uttar Pradesh State Universities Act,
             in its long eventful journey has constantly striven to live up to its motto, "आ नो भद्राः क्रतवो यन्तु विश्वतः" 
             (Let noble thoughts come to me from all directions) by assimilating diverse ideas, people and beliefs into
              its academic life. The geographical location of the University is 2676.7480 degrees North (latitude), 8793.3812
               degrees East (longitude). The University, the first to be established in Uttar Pradesh after 
               Independence and named after the great political thinker, APKP is located in the
                holy city of Varanasi and inherits the spiritual and philosophical legacy of Buddha, Kabir and Guru Gorakshnath.
                 Spread over 191.21 acres, it houses 06 faculties comprising of 29 departments that have been playing a significant
                  role in imparting holistic education to the people of the Eastern region since its inception. As a residential
                  -cum-affiliating State University it can boast of a rich academic legacy, illustrious alumni, experienced, 
                  qualified and dedicated faculty members, transparent, effective and responsive administrative set up,
                   state-of-the art library, Wi-Fi campus, ample career growth opportunities for its students, advanced
                    research facilities and a vibrant and safe campus. With its cherished goal of nourishing creative talent
                     and scientific temper among its students and sensitizing them to larger socio-economic and political
                      realities, the University aspires to contribute meaningfully to regional and national development.
        </p>
        <hr>
       </div>
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



$query="select * from course";
$result=mysqli_query($conn,$query);
?>

<table align="center" border="1px" style="width:600px; line-height:40px;">
<t>
  <tr>
    <th colspan=5><h2 style="background-color:blue">Fee Detail</h2></th>
</tr>
<th scope="col">id</th>
  <th scope="col">Course name</th>
  <th scope="col">Duration</th>
    <th scope="col">Fee</th>
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