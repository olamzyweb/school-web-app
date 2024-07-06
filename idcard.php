<?php session_start();
include('navbar.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>data</title>
    <link  rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    
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
  <link href="sidenavsettings.css" rel="stylesheet">
        
    
    
    
    
     <?php
//        session_start();
//       include 'header.php';
//        include 'style.php';
        ?>
         
        
         <style>
body {
     background-image: url('img/data.jpg');
     background-size: 100% 100%; 
     background-repeat: no-repeat;
     background-attachment: fixed;
     background-origin: content-box;
     background-position: center;
  background-size: cover;
  position: relative;
      
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
  padding: 8px 62px;
  /* background-color: #cc0000; */
  color: white;
}





img {
  opacity: 0.8;
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
  lio{
    float: right;
}

lio a {
  display: block;
  padding: 8px 62px;
  background-color: #cc0000;
  color: white;
}


div {
  
  border-radius: 8px;
}
.card1{
width: 90%;
 height: 300px;
 /* margin: auto;  */
 top: 50%;
 transform: translate(0,-50%);
 /* left: 50%; */
 /* margin-left: auto;
  margin-right: auto; */
  position: absolute; 
  /* left: 250px; */
   background-image: linear-gradient(to bottom right,#310202, #490303,#620404,#930606, #c40808); 
   color: whitesmoke;
 /* padding-right: 30px; */
 }
</style>
    
    </head>
    <body>
       <!-- <div class="topnav">
<ul>
   <li><a
href="index.php.">Home</a>
</li> -->
<!--<li><a
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

-->
<!-- <lo>
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"  fill="#cc0000" class="bi bi-person-circle" viewBox="0 0 16 16"  onclick="openNav()">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg> 
<b style="color:#cc0000; text-transform: uppercase;"><?php echo @$_SESSION['get_username']; ?></b>
<!--<button onclick="history.back()" style="background-color: #cc0000; padding: 8px 10px; color: white; border: none; ">Previous</button><br>--> 
        <?php @$_SESSION['get_username'];?>
<!-- </lo>
<lio><a onclick="history.back()">Back</a>
    
       
</lio>
</ul>
</div> --> -->
        
        <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <ab onclick="history.back()">Previous page</ab>
  <a href="#" >Settings</a>
  <a href="#">Dark/Light theme</a>
  <a href="#"> Correct name</a>
  <a href="logout2.php">Logout</a>
</div>
    

<script src="mysidenav.js"></script>

        
 <?php
 $idpass = @$_SESSION['get_username'];
  $idpassword = $_SESSION['get_pass'];
 $connect = mysqli_connect("localhost","root","","bright_gems");
 

 
  $query_name = "SELECT firstname,middlename,age,upload,class,password FROM admissio WHERE firstname='$idpass' AND password='$idpassword'";
    $check_name = mysqli_query($connect, $query_name);
 
// if (mysqli_num_rows($check_name) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($check_name)) {
 
    $name = $row['firstname'];    
    $middlename = $row['middlename']; 
    $age = $row['age'];
    $upload = $row['upload'];
    $class = $row['class'];
    $pass = $row['password'];
    }

    $up = $upload;
 ?>

     
        <br>
        <br>
        <br>
        <br>
     
        <div class="container" >
       <!--this is for card a--> 
           <div class="card1">
               <center>
               <b>TYPE A</b> <br> 
               <img src="upload_images/<?php echo $upload;?>" alt="image not found" width='90px' height='90px' style="border-radius:25px;" /><br>
         <b>NAME : <?php echo $name;?>&nbsp;<?php echo $middlename;?></b><br>
         <b> AGE : <?php echo $age;?></b><br><br>
         <b> CLASS : <?php echo $class;?></b><br><br>
          <b> E-ID : <?php echo $pass;?></b>
            </center>
              
               
        </div>
       <!--THIS IS END OF CARD A-->
   
         </center>
             
        </div>
        <!--end of card c-->
       </div>
        <br><br><br><br><br><br>
        
        
        
        
        <!-- <div class="row form-group">
<div class="col col-md-3">
<label for="email-input" class=" form-control-label"> Vehicle</label>
</div>
<div class="col-12 col-md-9">

<select name="car_id" id="car_id" class="form-control-label" >
<?php
//$list = mysqli_query($connect,"SELECT * FROM `results` ");
//while ($row_ah = mysqli_fetch_assoc($list)) {
?>
<option value="<?php // echo $row_ah['id']; ?>"><?php // echo $row_ah['name']; ?></option>
<?php //} ?>
</select> -->

</div>
</div>
    </body>
     <footer>
    <!-- <marquee><h5 style="color: white;">  Generated on <?php echo date("D j M Y h:i:s A")  ?></h5></marquee> -->
    </footer>
</html>


