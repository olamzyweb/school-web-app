<!DOCTYPE html>
<html>
    <head>
        <title>result view</title>
        <link  rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    </head>
    <body>
     
        <?php
        session_start()
        ?>
        
        
<!--<div class="container">
        <div class="jumbotron" style="color: blue; font-style: italic; font-size: 50px;"><img src="img/badge.jpg" width="120px" height="120px"/><label> <b>THE BRIGHT GEMS SCHOOLS</b></label><br><h6 style="margin-left: 150px">DISCIPLINE,INTEGRITY and MORALS<h6></div>-->
        <!--<div style="margin-left:85%;"><input type="text" name="search box" placeholder="Search"/><input type="submit" name="submit" value="Search"/></div> <br>-->

        
        
        
        <style>
body {
     /*background-color:whitesmoke;*/
     background-image: url('img/data.jpg') ;
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
  

</style>

<div class="topnav">
<ul>
   <li><a
href="index.php.">Home</a>
</li><!--
<!--<li><a
href="about.php.">About</a>
</li>
<li><a
href="admission.php.">Admission</a>
</li>
<li><a
href="academics.php.">Academics</a>
</li>-->
<!--<li><a
href="arts.php.">Arts</a>
</li>-->
<!--<li><a
href="schoolfees.php.">School fees</a>
</li>
<li><a
href="mission and vision.php.">Mission and Vision</a>
</li>-->
<!--<li><a
href="activities.php.">Activities</a>
</li>
<li><a
href="database2.php.">login</a>
</li>
-->
<lo>
    Logged in <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"  fill="#cc0000" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg><br> 
</lo>



<?php

$connect = mysqli_connect("localhost","root","","bright_gems");


 
 if(isset($_POST['submit'])){ 
       $name = $_POST['ola'];
       $class = $_POST['class'];
        $file = $_POST['filetoupload'];
        




   
    
   
        
//        
//         $search = "SELECT * FROM ass_submit WHERE name = '$name'";
//       $check_name = mysqli_query($connect,$search);
//       while ($find = mysqli_fetch_assoc($check_name)){
//           
//          $get_name = $find['name'];
//       }
//        
//        if($name == $get_name){
//            echo "<script>alert('$name is already registered.')</script>";
//        } else {  
//        
        
            $query2 = "INSERT INTO ass_submits (name,class,file) VALUES('$name','$class','$file')";
    $result = mysqli_query($connect, $query2);
    
    
     $target_dir = "uploaded_files/"; //this is the directory to upload to
    //get_file name and set to target directory
    $target_file = @($target_dir . basename($_FILES["filetoupload"]["name"]));
    @($getfile_name = $_FILES['filetoupload']['name']);
    @($getfile_size = $_FILES['filetoupload']['size']);
    @($getfile_tmp_dir = $_FILES['filetoupload']['tmp_name']);
    @($getfile_type = $_FILES['filetoupload']['type']);
    @($identifyFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)));
   
    
        
        if($getfile_size > "1000 bytes" ){
        if($identifyFileType=="txt" || $identifyFileType=="doc" || $identifyFileType=="docx"){
        move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file);
          
        echo "<script> alert('$getfile_name has been uploaded');</script>";
       
        } else {
            echo "<script> alert('$getfile_name is above 5kb'); </script>";  
         }    
        } else {
            echo "<script> alert('please upload the recommended file as specified above'); </script>";  
         } 
        }
//        else {
//             echo "file not uploaded";
//         }
   
   
    
         ?>




<center>
    
    <br>
    <br><br><br><br><br>

<form name="ass" action="submitass22.php" method="POST" enctype="multipart/form-data">
   <div style="border: 3px solid red; background-color: #333333; height: 350px; width: 600px; padding: 10px;">
    <input  type="text" name="ola" placeholder="enter name"/><br>
    <input type="text" name="class"  placeholder="enter class"/><br>
    <input type="file" name="filetoupload"/><br>
<input type="submit" name="submit" value="submit"/>
   </div>
</form>
</center>
</body>
</html>