<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
 
  <script src="ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
        

    
    </head>
    <body>
        <div class="container">
        <?php
        session_start();
        include 'header.php';
        include 'style.php';
        ?>
        
<!--        <div class="jumbotron" style="color: blue; font-style: italic; font-size: 50px;"><img src="img/badge.jpg" width="120px" height="120px"/><label> <b>THE BRIGHT GEMS SCHOOLS</b></label><br><h6 style="margin-left: 150px">DISCIPLINE,INTEGRITY and MORALS<h6></div>
        <div style="margin-left:85%;"><input type="text" name="search box" placeholder="Search"/><input type="submit" name="submit" value="Search"/></div> <br>-->

        
        
        

<?php
$connection = mysqli_connect('localhost','root','','bright_gems');

if(isset($_POST['submit'])){
    
    $pst_title = $_POST['post_title'];
    $pst_subtitle = $_POST['post_subtitle'];
    $post = $_POST['post'];
    $pst_id = $_POST['pst_id'];
    

//    $q = "INSERT INTO blog(pst_title,pst_subtitle,post,pst_id) VALUES('$pst_title','$pst_subtitle','$post',$pst_id)";
    $query = mysqli_query($connection,"insert into blog(pst_title,pst_subtitle,post,pst_id) VALUES('$pst_title','$pst_subtitle','$post',$pst_id)");
    if($query == true){
        echo "<script>alert('accepted')</script>";
    } else {
    echo "<script>alert('not accepted')</script>";    
    }
    
}


?>

<?php
        $random = rand(10,100000);
//      echo "$random";
      echo "<br>";
      $name = "tbgpst";
//      $nam = "e";
      $cutname = substr($name,0,10,);
    $opu = "$cutname$random";
//      echo "$cutname$random";
       ?>



<center>
   <!--<div class="container">--> 
<h1>Start a post</h1>
<form action="blog1.php" name="form1" method="POST" enctype="multipart/form-data">
<!--<div class="form-group">-->
  <!--<label for="psttitle">POST TITLE:</label>-->
  <input type="text"  name="post_title"required>
 <!--<div class="valid-feedback">Valid.</div>-->
    <!--<div class="invalid-feedback">Please fill out this field.</div>-->
<!--</div>-->
<!--<div class="form-group">-->
  <!--<label for="pstsub">POST SUB-TITLE:</label>-->
  <input type="text"  name="post_subtitle" required>
<!--<div class="valid-feedback">Valid.</div>-->
    <!--<div class="invalid-feedback">Please fill out this field.</div></div>-->
<!--<div class="form-group">-->
      <!--<label for="comment">POST:</label>-->
      <textarea  name="post" required></textarea>
     <!--<div class="valid-feedback">Valid.</div>-->
    <!--<div class="invalid-feedback">Please fill out this field.</div>-->
<!--</div>-->
    <!--<div class="form-group">-->
      <!--<label for="post_id">post_id:</label>-->
      <input  name="pst_id" value="<?php echo $opu;?>" required>
     <!--<div class="valid-feedback">Valid.</div>-->
    <!--<div class="invalid-feedback">Please fill out this field.</div>-->
<!--</div>-->
    
    
    
    
<input type="submit" value="submit" name="submit">
  </form>
<!--</div>-->
</center>
        
        
        
        
        
        
        
        </body>
        </html>