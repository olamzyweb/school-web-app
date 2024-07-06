<!DOCTYPE>
<html>
    <head>
        <title>about</title>
         <link  rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
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
  
        
    
    
    </head>
    <body>
         <?php
        session_start()
        ?>
        <div class="container">
         <div class="jumbotron" style="color: blue; font-style: italic; font-size: 50px;"><img src="img/badge.jpg" width="120px" height="120px"/><label> <b>THE BRIGHT GEMS SCHOOLS</b></label><br><h6 style="margin-left: 150px">DISCIPLINE,INTEGRITY and MORALS<h6></div>
        <div style="margin-left:85%;"><input type="text" name="search box" placeholder="Search"/><input type="submit" name="submit" value="Search"/></div> <br>

 <style>
body {
     background-color:whitesmoke;
/*     background-image: url('img/olamide.jpg') ;*/
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
  padding: 10px 29.7px;
  background-color: blue;
  color: white;
   
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


<?php
$connect = mysqli_connect("localhost","root","","bright_gems");
if(isset($_POST['register'])){
    $name = $_POST['name'];
    $mathematics = $_POST['mathematics'];
    $english = $_POST['english'];
    $bst = $_POST['bst'];
    $rnv = $_POST['rnv'];
    $cca = $_POST['cca'];
    $bstudies= $_POST['bstudies'];
    $yoruba = $_POST['yoruba'];
    $french = $_POST['french'];
    $pvs = $_POST['pvs'];
    
    
    
    
    $get_pass = $get_name ="";
        $search = "SELECT * FROM result WHERE  name = '$name'";
       $check_name = mysqli_query($connect,$search);
       while ($find = mysqli_fetch_assoc($check_name)){
          
          $get_name = $find['name'];
       }
        
        if($name == $get_name){
            echo "<script>alert('$name is already registered.')</script>";
        } else {  
            
    $query3 = "INSERT INTO result (name, mathematics, english, bst, rnv,cca, bstudies, yoruba, french, pvs) VALUES('$name','$mathematics','$english','$bst','$rnv','$cca','$bstudies','$yoruba','$french','$pvs')";
    $olamide = mysqli_query($connect, $query3);
   if($olamide == true){
    echo "<script>alert(' $name 's score has been successfully updated ')</script>";
}else {
    echo "<script>alert('an error occured')</script>";
}
}
}
?>







<center>
    <h2>input result for class</h2>
<!--        TEACHERS INPUT FORM FOR RESULT-->
<form name="inputform" style="border: 3px solid blue" action="admin login.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="name"/><br/>
    <br/>
    <input type="text" name="mathematics" placeholder="mathematics"/><br/>
    <br/>
    <input type="text" name="english" placeholder="english"/><br/>
    <br/>
    <input type="text" name="bst" placeholder="bst"/><br/>
    <br/>
    <input type="text" name="rnv" placeholder="rnv"/><br/>
    <br/>
    <input type="text" name="cca" placeholder="cca"/><br/>
    <br/>
    <input type="text" name="bstudies" placeholder="b/studies"/><br/>
    <br/>
    <input type="text" name="yoruba" placeholder="yoruba"/><br/>
    <br/>
    <input type="text" name="french" placeholder="french"/><br/>
    <br/>
    <input type="text" name="pvs" placeholder="pvs"/><br/>

    <input type="submit" name="register" value="register_score" /><br>    
    
</form>
</center>
   
<a><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
  <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg></a>
    
</div>
    
    
    

    </body>
</html>
