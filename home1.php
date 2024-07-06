<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8"  name="viewport" content="width=device-width, initial-scale=1.0">
        <title>THE BRIGHT GEMS</title>
   <link  rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    
    <!-- Script -->
    <script src='jquery-3.1.1.min.js' type='text/javascript'></script>

    <!-- jQuery UI -->
     
    <link href='jquery-ui.min.css' rel='stylesheet' type='text/css'>
    <script src='jquery-ui.min.js' type='text/javascript'></script>
        <meta charset="utf-8">
        <!--Boostrap & family-->
  <!--<link rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
 <link rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 
  <!--<script src="ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
  <script src="cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
        
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
    
    </head>
    <body>
        <div class="container">
        <?php
        session_start()
        ?>
            
            <button onclick="topFunction()" id="myBtn" title="Go to top">^</button>



<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
        
        <div class="jumbotron" style="color: blue; font-style: italic; font-size: 50px;"><img src="img/badge.jpg" width="120px" height="120px"/><label> <b>THE BRIGHT GEMS SCHOOLS</b></label><br><h6 style="margin-left: 150px">DISCIPLINE,INTEGRITY and MORALS<h6></div>
       
<!--                     <div class="dropdown" style="margin-right:85%; ">
                         <button class="dropbtn">
                             <menu></menu>
                             <menu></menu>
                             <menu></menu>
                         </button>
  <div class="dropdown-content">
    <a href="home.php.">Home</a>
    <a href="admission.php">Admission</a>
    <a href="database2.php">Student login</a>
  <a href="about.php.">About</a>-->
<!--  <a href="database2.php">Student login</a>
  <a href="database2.php">Student login</a>
  <a href="database2.php">Student login</a>
  -->
  
  
  
  <!--</div>-->
                     <!--</div>-->
                    
                    
               <div style="margin-left:85%;"><input type="text" name="search box" placeholder="Search"/><input type="submit" name="submit" value="Search"/></div> <br>

        
        
        
        <style>
            
/*       this is for card picture     */
            
            .cont {
  position: relative;
  width: 50%;
}

.imag {
  display: block;
  width: 100%;
  height: auto;
}

.over{
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 0;
  height: 100%;
  transition: .5s ease;
}

.cont:hover .overlay {
  width: 100%;
}

.tex{
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  white-space: nowrap;
}
            
            
             menu{
  width: 35px;
  height: 5px;
  background-color: black;
  margin: 6px 0;
}




/*this is for body*/

body {
     background-color:whitesmoke;
/*     background-image: url('img/badge.jpg') ;*/
     background-size:  100%; 
     height: 800px;
     background-repeat: no-repeat;
     
}

     
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}
li {
   float: left;
}
li a {
  display: block;
  padding: 10px 64px;
  background-color: blue;
  color: white;
}


/*this is for footer*/

footer{
   opacity: 0.8;
  filter: alpha(opacity=50); /* For IE8 and earlier */
 -webkit-transition: width 2s; /* Safari */
  transition: width 2s; 
}
/*this is for circle on picture*/
.bottomright {
  position: absolute;
  bottom: 8px;
  right: 39px;
  font-size: 18px;
}


img:hover {
  opacity: 1.0;
  filter: alpha(opacity=100); /* For IE8 and earlier */
 -webkit-transition: width 2s; /* Safari */
  transition: width 2s;
}





  
.dropbtn {
  background-color: white;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: blue;}

        
   #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: black;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}     
        
      /*this is for big slide picture(first one)*/
.ola{
  opacity: 0.5;
  filter: alpha(opacity=50); /* For IE8 and earlier */
 -webkit-transition: width 2s; /* Safari */
  transition: width 2s;

}  
        
        .contain {
  position: relative;
  width: 100%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  /*background-color: #008CBA;*/
  overflow: hidden;
  width: 100%;
  height:0%;
  transition: .9s ease;
}

.contain:hover .overlay {
  bottom: 0;
  height: 100%;
  width: 100%;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
        
        .contour {
  position: relative;
  font-family: Arial;
}

.text-block {
  position: absolute;
  bottom: 20px;
  right: 20px;
  background-color: transparent;
  color: black;
  padding-left: 20px;
  padding-right: 20px;
}
 
        </style>

<div class="topnav">
<ul>
   <li><a
href="home.php.">Home</a>
</li>
<li><a
href="about.php.">About</a>
</li>
<li><a
href="admission.php.">Admission</a>
</li>
<li><a
href="academics.php.">Academics</a>
</li>
<!--<li><a
href="arts.php.">Arts</a>
</li>-->
<!--<li><a
href="schoolfees.php.">School fees</a>
</li>-->
<!--<li><a
href="mission and vision.php.">Mission and Vision</a>
</li>-->
<li><a
href="activities.php.">Activities</a>
</li>
<li><a
href="database2.php.">login</a>
</li>
</ul>
</div>
      
 <div class="contain">
      <div class="contour">
<img  class="ola"src="img/teacher.jpg" style="width: 100%; height: auto" />
   <div class="text-block">
    <h4>uuu</h4>
    <p>What a beautiful sunrise</p>
  </div>
</div>

 <div class="overlay">
      
      <div class="text">
         
 <img src="img/room.jpg" style="width: 1150px; height: auto;" class="image">
 
    
      </div>
</div>
</div>
 







<!--<div class="container">-->
    <!--<div class="bottomright rounded-circle " style="border-radius: 50px;background-color: blue;color: lawngreen;  width: 300px;height: 200px; text-align: center;"><br>In The  Bright Gems,<br>Our teachers are capable of<br> moulding pupils into highly respected and responsible <br> citizens </div><br>-->
<div>







         
     <div class="jumbotron " >
     <div style=" font-size: 60px; font-family: serif; color: blue;">    
         Educating leaders of character since 2007<br>
           </div>
         <div style="font-size: 20px; ">  The Bright Gems School was established in January 2019.
As a result of our rich curriculum and the excellent performance of our students over the years,
our school has become one of the most sought after school , in Lagos and all over Nigeria.
<br>
<br>
<p>At The Bright Gems School, we treat our pupils like gems and we are focused on  understanding how they grow and learn .
  We understand the individuality of a child and we treat them as such.
    Therefore ,we use modern curriculum that makes learning easy for our pupils.</p>
         </div>
   
     </div>
 
     
     
    



 <div class="card-deck">
    <div class="card">
      <div class="card-body">
          <p class="card-text"><b>Activity based learning</b></p>
        <p class="card-img"><img src="img/room.jpg"  onmouseover="bigImg(this)" onmouseout="normalImg(this)"  width="210px" height="200px"/></p>
        <p class="card-text">we teach our students with practicals</p>
        <p class="card-text">we also do outdoor activities</p>
      </div>
    </div>
    <div class="card">
      <div class="card-body text-center">
        <p class="card-text">OUR FACILITIES ARE OF STANDARD QUALITY</p>
        <p class="card-img"></p>
      <div class="container">
  <img src="img/teacher.jpg" width="210px" height="200px" class="imag">
  <div class="overlay">
      <div class="text"><img src="img/room.jpg" width="210px" height="200px"></div>
  </div>
</div>
        
      </div>
    </div>
    <div class="card bg-success">
      <div class="card-body text-center">
        <p class="card-text">we have standard teaching instruments</p>
      </div>
    </div>
    <div class="card">
      <div class="card-body text-center">
        <p class="card-text">Some text inside the fourth card</p>
      </div>
    </div>  
  </div>
<!--</div>-->

<i class="fas fa-cloud"></i>
<i class="fas fa-building"></i>
<i class="fas fa-car"></i>
<i class="fas fa-file"></i>
<i class="fas fa-bars"></i>



<br>
<br>
<br>
<img src="img/proprietress.jpg" style="float:right;  width: 400px;height: 400px;" onmouseover="bigIm(this)" onmouseout="normalIm(this)"/><h1>Meet the proprietress</h1><br><h6><b>MRS OLANREWAJU O.A</b></h6>
<br>Mrs Olanrewaju is a woman with desperate love and admiration for children.<br>




<script>
function bigImg(x) {
  x.style.height = "230px";
  x.style.width = "220px";
}

function normalImg(x) {
  x.style.height = "210px";
  x.style.width = "200px";
}
</script>

<script>
function bigIm(y) {
  y.style.height = "450px";
  y.style.width = "430px";
}

function normalIm(y) {
  y.style.height = "400px";
  y.style.width = "400px";
}
</script>


<?php 
 $total = "";
        if (isset($_POST['nomber4'])){
            $firstnumber = $_POST['nomber1'];
            $operator = $_POST['nomber2'];
            $secondnumber = $_POST['nomber3'];
            
         if ($operator == '+'){
    $total= $firstnumber + $secondnumber;        
         }
         if ($operator == '-'){
     $total= $firstnumber - $secondnumber;        
         }
         if ($operator == '/'){
   $total= $firstnumber / $secondnumber;        
         }
         if ($operator == '*'){
 $total= $firstnumber * $secondnumber;        
         }
         
        }
        
        
        
        ?>
<br>
<br>
<br>
<br>
            
            <form name="callculater" action="home.php" method="POST" enctype="multipart/form-data">
            <div style="  background-color: blue;  float: left 30px; width: 500px; height: 250px; border: 10px solid lightblue; border-color: lightskyblue;">
           <center>
               <br>
               <input type="text" name="nomber1" placeholder="enter first number"/><br>
            <br>
            <input type="text" name="nomber2" placeholder="enter operator"/><br>
<br>
<input type="text" name="nomber3" placeholder="enter second number"/><br>
        <br>
            <input type="submit" name="nomber4" value="calculate"/>
            
            <input type="text" name="nomber5" style="width: 60px;"  placeholder="<?php echo "$total";?>" /><br>
            </center>
            </div>
        
        </form>
   <!--thiis is for onkey up (w3schools)-->         
<!--Enter your name: <input type="text" id="fname" onkeyup="myFunction()">

<p>My name is: <span id="demo"></span></p>

<script>
function myFunction() {
  var x = document.getElementById("fname").value;
  document.getElementById("demo").innerHTML = x;
}
</script>-->
        




<br>



 <?php
//     if(isset($_POST['log'])){
//         $user = $_POST['user'];
//         $pass = $_POST['pass'];    
//         
//         if($user=='tunde'&& $pass=='1205'){
//             $_SESSION['get_username'] = $user;
//             header('location:about.php.');
//         }else {
//             echo "<script>alert('invalid name or password');</script>";
//         }
//         
//         
//     }
     
     
     ?>
     
     
     
<!--     <form name="test " action="home.php" method="POST" enctype="multipart/form-data">
         <div style=" margin-left: 400px; border: 3px solid green; padding: 20px">
         <h1> login form</h1>
         <input type="text" name="user" placeholder="username"/><br>
         <input type="password" name="pass" placeholder="password"/><br>
         <input type="submit" name="log">
     </div>
     
     
     </form>
     -->
     
      
        
       <!--this is for footer-->
     <br>
     <br>
     <br>
     <br>
     <footer style="background-color: #333333; ">
          <div class="img">
              <div class="jumbotron" style="  color:white; background-color: #333333; img-hover: 40px;">
         <div class="row">
             <div class="col">
                 <p style="font-size: 30px">ABOUT US</p>
                 <a  style="color: whitesmoke; margin-left: 30px;font-size: 20px" href="about.php"> &gt; About Us</a><br>
                 <a  style="color: whitesmoke; margin-left: 30px;font-size: 20px" href="admin check.php"> &gt; Admin login</a><br>
                 <a  style="color: whitesmoke; margin-left: 30px;font-size: 20px" href="database2.php"> &gt; Student login</a><br>
                 <a  style="color: whitesmoke; margin-left: 30px;font-size: 20px" href="#.php"> &gt; FAQs</a><br>
                 <a  style="color: whitesmoke; margin-left: 30px;font-size: 20px" href="#.php"> &gt; Privacy</a><br>
                 <a  style="color: whitesmoke; margin-left: 30px;font-size: 20px" href="#.php"> &gt; Terms of use</a><br>
             <br>
             <br>
     
             <h3><b>CONTACT US</b></h3> 
             
             <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
  <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
             
             
        11,Idowu olorunsogo close,Akera,Alagbado,Lagos <br> 
        
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
  <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
        
        55,Isiba street Egbeda,Lagos <br>
        
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-square-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
</svg>
08188435281 <br>


<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
</svg>08188435281
   



<br>

<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-at" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"/>
</svg>
    horlameedayolanrewaju@gmail.com

             </div>
            
             
             <div class="col">
                 <br>
                 <h4>Send us your feedback</h4><br>
                 <form name="feedback" action="home.php" method="POST" enctype="multipart/form-data">
                     <input style="height: 60px; background-color: #333333; color: whitesmoke;"type="text" name="feed" placeholder="Write something..."/>
                     <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;
                     <input style="background-color: #333333; color: white;" type="submit" value="Send"/>
                 </form>
                 
                
                 <br>
                              
                 Follow us on our pages: 
             </div>
             
         </div>
                     
     </div>
          </div>
        
<!--<!--    <marquee style="color: blue;  font-size: 40px;">THANKS FOR VISITING OUR WEBSITE.</marquee>-->
<center>
    <p style=" color: white;">Copyright&copy;2020</p>
</center>
 <i class="fas fa-cloud"></i>
<i class="fas fa-facebook"></i>
<i class="fas fa-car"></i>
<i class="fas fa-file"></i>
<i class="fas fa-bars"></i>

     </footer>
    </div>
    
    
    
   
</div>
    </body>
</html>
