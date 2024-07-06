<!DOCTYPE>
<html>
    <head>
        <title>database</title>
    <link  rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
         <div class="jumbotron" style="color: blue; font-style: italic; font-size: 50px;"><img src="img/badge.jpg" width="120px" height="120px"/><label> <b>THE BRIGHT GEMS SCHOOLS</b></label><br><h6 style="margin-left: 150px">DISCIPLINE,INTEGRITY and MORALS</h6></div>
        <div style="margin-left:85%;"><input type="text" name="search box" placeholder="Search"/><input type="submit" name="submit" value="Search"/></div> <br>

        
        
        
        <style>
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
  padding: 8px 35px;
  background-color: blue;
  color: white;
}











.bottomright {
  position: absolute;
  bottom: 8px;
  right: 16px;
  font-size: 18px;
}
  

</style>

<div class="topnav">
<ul>
<!--   <li><a
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
href="contact us.php.">Contact us</a>
</li>
</ul>
</div>-->
        
        
        
        
        
        
        
        
        
        
        
        
<?php
$connect = mysqli_connect("localhost","root","","school");


if(isset($_POST['log'])){
    $get_username = $_POST['user'];
    $get_password = $_POST['pass'];
    
    $query = "SELECT * FROM user_login WHERE username = '$get_username'AND password = '$get_password'";
     $result = mysqli_query($connect, $query);
     
     $user_result = "";
     $pass_result = "";
     
     
    while($row = mysqli_fetch_assoc($result)){
        $user_result = $row['username'];
    $pass_result = $row['password'];
              
    }
    
    if($user_result == $get_username && $pass_result == $get_password){
       header('location: home.php' );
        
    }else{
        echo"<script>alert(' criminals .EFCC dey come')</script>";
    }
    
    
    
    
    
}



if(isset($_POST['reg_staff'])){
   $get_username = $_POST['reg_user'];
    $get_password = $_POST['reg_pass'];
   $get_confirm_password = $_POST['confirm_pass'];
   
   if($get_confirm_password == $get_password){
        $query2 = "INSERT INTO user_login (username, password) VALUES('$get_username','$get_password')";
    $result = mysqli_query($connect, $query2);
   if($result == true){
    echo "<script>alert('you have successfully registered $get_username as a staff')</script>";
}else {
    echo "<script>alert('an error occured')</script>";
}
   }else {
       echo "<script>alert(' password does not match')</script>";
   }
   
   
   
   
}




?>
        <!--get info from database-->
        <center>
        <form name="to_database" action="mydatabase.php" method="POST" enctype="multipart/form-data">
            <label>GET LOGIN INFORMATION FROM DATABASE</label><br>
            <input type="text" name="user" placeholder="enter username" required/><br>
            <input type="password" name="pass" placeholder="enter password" required/><br>      
            <input type="submit" name="log" value="login"/><br>
        
        </form>
            
            <br>
            <br>
            <br>
            <br>
        <!--give info to database-->
        <form action="mydatabase.php" method="POST" enctype="multipart/form-data">
            <div style="border: 3px solid blue; background-color: lightblue; height: 300px; width: 400px; padding: ">
            <label>REGISTER INFORMATION TO DATABASE</label><br>
            <input type="text" name="reg_user" placeholder="enter username" required style="height: 50px; width: 300px; border-radius: 6px;"/><br>
            <br>
          <input type="text" name="reg_pass" placeholder="enter password" required style="height: 50px; width: 300px; border-radius: 6px;"/><br>      
         <br>
          <input type="text" name="confirm_pass" placeholder="confirm password" required style="height: 50px; width: 300px; border-radius: 6px;"/><br>
          <br>
          <input type="submit" name="reg_staff" value="register staff"/><br>
        
        
        
        
        
        
        </form>
        </div>
        
        </center>
        
        
    </body>
</html>
