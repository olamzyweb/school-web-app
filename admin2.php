<!DOCTYPE html>
<html>
    <head lang="en">
          <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   
    
    
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
        
<!--        <div class="jumbotron" style="color: blue; font-style: italic; font-size: 50px;"><img src="img/badge.jpg" width="120px" height="120px"/><label> <b>THE BRIGHT GEMS SCHOOLS</b></label><br><h6 style="margin-left: 150px">DISCIPLINE,INTEGRITY and MORALS<h6></div>
        <div style="margin-left:85%;"><input type="text" name="search box" placeholder="Search"/><input type="submit" name="submit" value="Search"/></div> <br>
-->
        
        
        
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
href="index.php.">Home</a>
</li>

<lo>
     <b style="text-transform: uppercase; color:#660000;"><?php echo @$_SESSION['get_username']; ?></b> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"  fill="#cc0000" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg><br> 
        <?php @$_SESSION['get_username'];?>
</lo>


</ul>
</div>
<?php    

 $connect = mysqli_connect("localhost","root","","bright_gems");
 $quer = "SELECT COUNT(firstname)FROM admissio";
 $result = mysqli_query($connect, $quer);
 $row = mysqli_fetch_array($result);
 $totalstud = $row[0];
 
// this is for total no of messages
       $que = "SELECT COUNT(message)FROM messages";
        $resul = mysqli_query($connect, $que);
        $rows = mysqli_fetch_array($resul);
        $totalmess = $rows[0];
       
 // this is for total no of results
       $qu = "SELECT COUNT(name)FROM results";
        $resu = mysqli_query($connect, $qu);
        $rowss = mysqli_fetch_array($resu);
        $totalresul = $rowss[0];
       
                
                
?>
    <div class="container" class>
<br><br>

        <center>
    <a href="" ><button>TOTAL NO OF CLASSES  6</button></a><br>
<br>
<a href="admission_list.php" ><button>TOTAL NO OF STUDENTS  <?php echo $totalstud;?></button></a><br>
<br>
<a href="" ><button>TOTAL NO OF MESSAGES  <?php echo $totalmess;?></button></a><br>
<br>
<a href="adminviewresult.php" ><button>TOTAL RESULTS  <?php echo $totalresul;?></button></a><br>
<br>
<a href="admin3.php" ><button>Proceed to edit page <br><svg xmlns="http://www.w3.org/2000/svg" width="16" height="26" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1.708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/></svg></button></a><br>
</center>
        
        <!-- this is for the new dashboard -->
        <p>
         <div class="row">
    <div class="col">
     <!--this for card b--> 
     <!-- <div style="width: 200px; 
          height: 100px;  
          background-image: linear-gradient(to bottom right,#310202, #490303,#930606,#620404, #c40808); 
          color: whitesmoke; 
          padding-right: 30px;
          border-radius: 26px; ">
            <center><br><h6> TOTAL NO OF CLASSES</h6>
              <h6>6</h6> </center>
        </div> -->
     <!--end of card b--> 
    
    
    </div>
    <!-- <div class="col">
    <a href="admission_list.php"> 
 <div style="width: 200px; height: 100px;   background-image: linear-gradient(to bottom right,#310202, #490303,#930606,#620404, #c40808); color: whitesmoke; padding-right: 30px; border-radius: 20px; ">
               <center>
                   <b>TYPE A</b>
                  <br> <h6>TOTAL NO OF STUDENTS</h6>
            <h6><?php //echo $totalstud;?></h6></center>
 </div> </a>
    </div> -->
    <!-- <div class="col">
    
     <div style="width: 200px; height: 100px; background-image: linear-gradient(to bottom right,#310202, #490303,#930606,#620404, #c40808); color: whitesmoke; padding-right: 30px; border-radius: 26px; ">             
         <center>      
        <br> <h6>TOTAL NO OF MESSAGES</h6>
              <h6><?php //echo $totalmess;?></h6></center>
        </div>
    end of card c-->
    <!-- </div> -->
  <!-- </div> --> 
        <!-- <br><br> -->
        <!-- <div class="row"> -->
  <!-- <div class="col"> -->
  <!-- <div style="width: 200px; height: 100px;  background-image: linear-gradient(to bottom right,#310202, #490303,#620404,#930606, #c40808); color: whitesmoke; padding-right: 30px; border-radius: 26px; "> -->
               <!-- <center> -->
             <!-- <br><h6>TOTAL RESULTS</h6> -->
             <!-- <h6><?php //echo $totalresul;?></h6> -->
            <!-- </center> -->
               <!--end of card d--> 
               
        <!-- </div>
  </div>
  <div class="col">
  <div style="width: 200px; height: 100px; background-image: linear-gradient(to bottom right,#310202, #490303,#620404,#930606, #c40808); color: whitesmoke; padding-right: 30px; border-radius: 26px; ">
               <center>
                <h6>TYPE E</h6><br> 
            </center> -->
               <!--end of card e--> 
               
        <!-- </div>
  </div>
  <div class="col">
  <a href="admin3.php" style="color: whitesmoke;">
     <div style="width: 200px; height: 100px;  background-image: linear-gradient(to bottom right,#310202, #490303,#620404,#930606, #c40808); color: whitesmoke; padding-right: 30px; border-radius: 26px; ">
               <center> -->
               <!-- <br><h6>Proceed to edit page <br><svg xmlns="http://www.w3.org/2000/svg" width="16" height="26" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1.708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/></svg> -->
                  <!-- </h6> -->
            <!-- </center> -->
               <!--end of card f--> 
               
        </div>
         </a>
  </div>
</div>
        
    </body>
</html>
