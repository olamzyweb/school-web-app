<!DOCTYPE html>
<html>
    <head>
        <title>result view</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link  rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <link href="sidenavsettings.css" rel="stylesheet">
    </head>
    <body>
     
        <?php
        session_start();
        
        if(@$_SESSION["get_username"] != true){
          echo "<script>alert('Please login first')</script>";
          echo "<script> window.location.assign('admin.php')</script>";
    //header("Location: admin.php");
    exit;
}
        ?>
        
        
<!--<div class="container">
        <div class="jumbotron" style="color: blue; font-style: italic; font-size: 50px;"><img src="img/badge.jpg" width="120px" height="120px"/><label> <b>THE BRIGHT GEMS SCHOOLS</b></label><br><h6 style="margin-left: 150px">DISCIPLINE,INTEGRITY and MORALS<h6></div>-->
        <!--<div style="margin-left:85%;"><input type="text" name="search box" placeholder="Search"/><input type="submit" name="submit" value="Search"/></div> <br>-->

        
        
        
        <style>
body {
     background-image: url('img/data.jpg');
     background-size: 100% 100%; 
     background-repeat: no-repeat;
     background-attachment: fixed;
     background-origin: content-box;
      
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
  padding: 8px 49px;
  background-color: #cc0000;
  color: white;
}


lo {
    float: right;
}








.bottomright {
  position: absolute;
  bottom: 8px;
  right: 16px;
  font-size: 18px;
}
  
button {
    color: white;
    background-color: #333333;
    width: 300px;
    height: 65px; 
    font-size: 15px; 
    border-radius: 9px;
    
    
}
</style>
<div class="container">
<div class="topnav">
<ul>
   <li><a
href="admin2.php">Home</a>
</li>

<lo>
    
    <b style="text-transform: uppercase; color:#660000;">Admin <?php echo $_SESSION['get_username']; ?></b> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"  fill="#cc0000" class="bi bi-person-circle" viewBox="0 0 16 16" onclick="openNav()">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg><br> 
        <?php $_SESSION['get_username'];?>
</lo>
</ul>
</div>
<br>
<center>
    <a href="admininputr.php" ><button>Enter result</button></a><br>
<br>
<!-- <a href="adsubmitass.php" ><button>Input an assignment</button></a><br> -->
<br>
<a href="admission_list.php" ><button>View total students</button></a><br>
<br>
<!-- <a href="database2.php" ><button>Input bill statement</button></a><br> -->
<br>
<a href="adminedit.php" ><button>Edit result</button></a><br>
</center>
<br>
<br>
<br>
<br>
<br>
</div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <ab onclick="history.back()">Previous page</ab>
  <a href="#" >Settings</a>
  <a href="#">Dark/Light theme</a>
  <a href="#"> Correct name</a>
  <a href="logout2.php">Logout</a>
</div>
    

<script src="mysidenav.js"></script>