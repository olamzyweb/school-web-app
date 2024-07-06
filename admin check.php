<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>THE BRIGHT GEMS</title>
   <link  rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
        <?php
        session_start()
        ?>
        
     <!--   <div class="jumbotron" style="color: blue; font-style: italic; font-size: 50px;"><img src="img/badge.jpg" width="120px" height="120px"/><label> <b>THE BRIGHT GEMS SCHOOLS</b></label><br><h6 style="margin-left: 150px">DISCIPLINE,INTEGRITY and MORALS<h6></div>
        <div style="margin-left:85%;"><input type="text" name="search box" placeholder="Search"/><input type="submit" name="submit" value="Search"/></div> <br>

        -->
        
        
        <style>
body {
    /*background-color:whitesmoke;*/
    background-image: url('img/room.jpg') ;
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
  padding: 8px 29px;
  background-color: blue;
  color: white;
}





img {
  opacity: 0.5;
  filter: alpha(opacity=50); /* For IE8 and earlier */
 -webkit-transition: width 2s; /* Safari */
  transition: width 2s;

}

img:hover {
  opacity: 1.0;
  filter: alpha(opacity=100); /* For IE8 and earlier */
 -webkit-transition: width 2s; /* Safari */
  transition: width 2s;
}




.bottomright {
  position: absolute;
  bottom: 8px;
  right: 16px;
  font-size: 18px;
}



.contain {
  position: relative;
  width: 50%;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.contain:hover .image {
  opacity: 0.3;
}

.contain:hover .middle {
  opacity: 1;
}

.text {
/*  background-color: #4CAF50;*/
  color: black;
  font-size: 16px;
  padding: 16px 32px;
  margin-left: 600px;
}
  

</style>
<!--
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
<li><a
href="arts.php.">Arts</a>
</li>
<li><a
href="schoolfees.php.">School fees</a>
</li>
<li><a
href="mission and vision.php.">Mission and Vision</a>
</li>
<li><a
href="activities.php.">Activities</a>
</li>
<li><a
href="database2.php.">login</a>
</li>
</ul>
</div>
-->
 <?php
     if(isset($_POST['log'])){
         $user = $_POST['user'];
         $pass = $_POST['pass'];    
         
         if($user=='tunde'&& $pass=='1205'){
             $_SESSION['get_username'] = $user;
             header('location:admin option.php.');
         }else {
             echo "<script>alert('invalid name or password');</script>";
         }
         
         
     }
     
     
     ?>
     <br>
     <br>
     <br>
     <br>
     <br>
        <br>
           <br>
              <br>
     
     
     <!--<div class="contain">-->
  <!--       <img src="img/room.jpg" alt="Avatar" class="image" style="width:1100px">-->
  <!--<div class="middle">-->
    <!--<div class="text">-->
     
     
<form name="test " action="admin check.php" method="POST" enctype="multipart/form-data">
    <center>    
    <div style=" background-color: lightblue; width: 400px;border: 3px solid blue; padding: 20px">
                       <h1>Admin Login </h1><br>
                       <input type="text" name="user" placeholder="username" required/><br>
         <br>
         <input type="password" name="pass" placeholder="password" required/><br>
         <br>
         <input type="submit" name="log">
     </div>
    </center>
     
     </form>
     
    </div>
  </div>
</div> 
</body>
</html>