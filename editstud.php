<!DOCTYPE html>
<html>
    <head>
        <title>admission</title>
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
  
        
    
    
    
    
    <!--<div class=" container jumbotron " style="color: blue; font-style: italic; font-size: 50px;"><img src="img/badge.jpg" width="180px" height="200px"/><label> <b>THE BRIGHT GEMS SCHOOLS</b></label><br><h6 style="margin-left: 150px">DISCIPLINE,INTEGRITY and MORALS</h6></div>-->
  <style>   
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; 
}
  
  
  body {
     /*background-color:whitesmoke;*/
     background-image: url('img/data.jpg') ;
     background-size:  100%; 
     height: 100%;
     background-repeat: repeat;
     background-attachment: fixed;     
}

</style>


       <script>
        window.addEventListener('load', function() {
 document.querySelector('input[type="file"]').addEventListener('change', function() {
              if (this.files && this.files[0]) {
               var img = document.getElementById('my_image');  // $('img')[0]
               var fi = document.getElementById('upload_file'); 
               
            //   Calculate File Size to know what to upload         
                   if (fi.files.length > 0) { 
                   for (const i = 0; i <= fi.files.length - 1; i++) { 
                       const fsize = fi.files.item(i).size; 
                       const file = Math.round((fsize / 1000)); 
                       // The size of the file. 
                       if (file > 3000) { 
                           alert( 
         "Image too large, please resize image to 100kb. Your current image size is: "+file/1000+"mb ("+file+"kb). Image should be: Horizontal = 400px by Vertical = 300px."); 

                                return false;                
                       }  else {
       //        LOAD IMAGE            
                      img.src = URL.createObjectURL(this.files[0]); // set src to blob url
                      img.onload = imageIsLoaded;
                       }
                   } 
               }
            }
        });
     });
     </script>   

</head>
    <body>
         <?php
        session_start()
        ?>
        <div class="container">
               <style>

     
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
</style>

<div class="topnav">
<ul>
   <li><a
href="admin3.php">Dashboard</a>
</li>
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
</li>
<li><a
href="schoolfees.php.">School fees</a>
</li>
<li><a
href="mission and vision.php.">Mission and Vision</a>
</li>-->
<!--<li><a
href="activities.php.">Activities</a>-->
</li>
<!--<li><a
href="contact us.php.">Contact us</a>
</li>-->
</ul>
</div>
        </div>
        <script>
        window.addEventListener('load', function() {
 document.querySelector('input[type="file"]').addEventListener('change', function() {
              if (this.files && this.files[0]) {
               var img = document.getElementById('my_image');  // $('img')[0]
               var fi = document.getElementById('filetoupload'); 
               
            //   Calculate File Size to know what to upload         
                   if (fi.files.length > 0) { 
                   for (const i = 0; i <= fi.files.length - 1; i++) { 
                       const fsize = fi.files.item(i).size; 
                       const file = Math.round((fsize / 1000)); 
                       // The size of the file. 
                       if (file > 3000) { 
                           alert( 
         "Image too large, please resize image to 100kb. Your current image size is: "+file/1000+"mb ("+file+"kb). Image should be: Horizontal = 400px by Vertical = 300px."); 

                                return false;                
                       }  else {
       //        LOAD IMAGE            
                      img.src = URL.createObjectURL(this.files[0]); // set src to blob url
                      img.onload = imageIsLoaded;
                       }
                   } 
               }
            }
        });
     });
     </script>   

     
    
     
     
     <?php
        $con = mysqli_connect("localhost","root","","bright_gems");
     
      if(isset($_POST['subz'])){
//  $search = $_POST['search'];
   $ide = $_POST['id'];
  $inc=1;
   
  $query_name = "SELECT * FROM admissio WHERE  password = '$ide'";
    $check_name = mysqli_query($con, $query_name);
    
      
    
       
    while($row= mysqli_fetch_assoc($check_name)){
        $olyy = $row['upload'];
      
//       echo "<tr align = 'center'>";
     $row['id'];
     $namee = $row['firstname'];
     $midd = $row['middlename'];
     $surn = $row['surname'];
     $ag = $row['age'];
      $addr = $row['address'];
        $fthnam = $row['fathers_name'];
        $mthnam = $row['mothers_name'];
        $fthnum = $row['fathers_number'];
        $mthnum = $row['mothers_number'];
        $ema = $row['email'];
          $clas = $row['class'];
        $passw = $row['password'];
        $olyy = $row['upload'];
        $gende = $row['gender'];
//       echo "<td>" ."<img src='upload_images/$oly' width='100px' height='100px'>". "</td>";
       $datee = $row['date_create'];
        $ero=$row['id'];
          
       
        
       $inc++;
       
            
    }

    
    
    
    
    
    
      }
     
     
     ?>
     <form action="editstud.php" method="POST">
      <!--<input type="text" name="search"/>-->
         <input type="text" name="id" placeholder="Input student id">
     <input type="submit" name="subz">
     </form>
        
        <?php
        $connect = mysqli_connect("localhost","root","","bright_gems");
        
        
       
        
        if(isset($_POST['submit'])){
            
            
            $firstname = $_POST['fo1'];
            $middlename = $_POST['fo2'];
             $surname = $_POST['fo3'];
            $age = $_POST['fo4'];
            $address = $_POST['fo5'];
            $mothersname = $_POST['fo6'];
            $fathersname = $_POST['fo7'];
            $fathersnumber = $_POST['fo8'];
            $mothersnumber = $_POST['fo9'];
            $email = $_POST['fo10'];
            $password = $_POST['fo11'];
            @$uploa = $_POST['filetoupload'];             
            $class= $_POST['fo12'];
             $gender= $_POST['fo15'];
            
 $get_pass = $get_name ="";
        $search = "SELECT * FROM admissio WHERE password = '$password'";
       $check_name = mysqli_query($connect,$search);
       while ($find = mysqli_fetch_assoc($check_name)){
           $get_pass = $find['password'];
          $get_name = $find['firstname'];
       }
        
        if($password == $get_pass ){
//            echo "<script>alert('$firstname with pass number $password is already registered.')</script>";
        
            
            
            
            
       
            
            
//        else {
//             echo "file not uploaded";
//         }
   
            
            $name = $_FILES['filetoupload']['name'];
              $target_dir = "upload_images/"; //this is the directory to upload to
    //get_file name and set to target directory
    $target_file = @($target_dir . basename($_FILES["filetoupload"]["name"]));
    @($getfile_name = $_FILES['filetoupload']['name']);
    @($getfile_size = $_FILES['filetoupload']['size']);
    @($getfile_tmp_dir = $_FILES['filetoupload']['tmp_name']);
    @($getfile_type = $_FILES['filetoupload']['type']);
    @($identifyFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)));
   
            
          if($getfile_size < "60000 bytes" ){
        if($identifyFileType=="jpg" || $identifyFileType=="png"){
        move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file);
          
        echo "<script> alert('$getfile_name has been uploaded');</script>";
       
           
            
            

        $query2 = "UPDATE admissio SET firstname='$firstname' , middlename='$middlename',surname='$surname',age='$age',address='$address',fathers_name='$fathersname',mothers_name='$mothersname',fathers_number='$fathersnumber',mothers_number='$mothersnumber',email='$email',password='$password',upload='$name',class='$class',gender='$gender' WHERE password = '$password'";
    $result = mysqli_query($connect, $query2);
   if($result == true){
    echo "<script>alert('Thanks for updating. $firstname .pls take note of your E-id:$password')</script>";
}else {
    echo "<script>alert('an error occured')</script>";
}

    
   
           
    
        
        }else {
            echo "<script> alert('please upload an image with a jpg or png format '); </script>";  
         }    
        } else {
            echo "<script> alert('$getfile_name is above 60kb. please upload an image less than 60 kb'); </script>";  
         } 
        } else {  }
   
        }  




        
        
        
        
        
        
        
        
        ?>
        
        
       
        
        
        
        
        
          <?php
        $random = mt_rand(10,100000);
//      echo "$random";
      echo "<br>";
      $name = "tbg/";
      $cutname = substr($name,0,4);
    $op= "$cutname$random";
//      echo "$cutname$random";
       ?>
        
        
        
        
       
        
        
        
        
        
        
        
        
<div class="container">
    <div style="font-size: 70px; color: #990000; font-style: italic;"><center>Edit student</center></div>
    <!--<center style="color: #990000"  >NOTE: The form below is only for ease of registration in the school.Students to be admitted are to visit the school after this form has been filled.</center>-->
   <div class="alert alert-warning alert-dismissable">
  <strong>Info!</strong> Reinput image before submition.
</div>
    <br>
   <center>
       <form name="sub1" action="editstud.php" method="POST" enctype="multipart/form-data">
        
        <div>
    
             <div style="width: 100px; height: 100px;">
                 <img src='upload_images/<?php echo $olyy?>' alt="click on choose file below to load image" width="100px" height="100px" style="border: 4px #990000 solid; " id="my_image"/>
           </div>
         
            <input type="file" name="filetoupload" id="filetoupload"  value="<?php echo $olyy;?>" placeholder="<?php echo $olyy;?>"/> <br>
         <br>
         <input type="text" name="fo1" id="nam" placeholder=" Enter firstname & surname" style="border-radius: 8px;height: 40px; width: 700px;" value="<?php echo @$namee;?>"required/><br>&nbsp;
       <br>
            <input type="text" name="fo2" placeholder="Enter middlename"style="border-radius: 8px;height: 40px; width: 700px;" value="<?php echo @$midd;?>" required/><br>
        <br>
        <input type="text" name="fo3" placeholder="Enter surname"style="border-radius: 8px;height: 40px; width: 700px;" value="<?php echo @$surn;?>"required/><br>
        <br>
        <input type="text" name="fo4" placeholder="Enter age"style="border-radius: 8px;height: 40px; width: 700px;"value="<?php echo @$ag;?>"required/><br>
        <br>
        <input type="text" name="fo5" placeholder="Enter address"style="border-radius: 8px;height: 40px; width: 700px;" value="<?php echo @$addr;?>"required/><br>
        <br>
        <input type="text" name="fo6" placeholder="Enter mothers name" style="border-radius: 8px;height: 40px; width: 700px;" value="<?php echo @$fthnam;?>"required/><br>
        <br>
        <input type="text" name="fo7" placeholder="Enter fathers name"style="border-radius: 8px;height: 40px; width: 700px;" value="<?php echo @$mthnam;?>"required/><br>
        <br>
        <input type="text" name="fo8" placeholder="Enter fathers number"style="border-radius: 8px;height: 40px; width: 700px;" value="<?php echo @$fthnum;?>"required/><br>
        <br>
        <input type="text" name="fo9" placeholder="Enter mothers number" style="border-radius: 8px;height: 40px; width: 700px;" value="<?php echo @$mthnum;?>"required/><br>
        <br>
        <br>
        <input type="text" name="fo12" placeholder="Enter class" style="border-radius: 8px;height: 40px; width: 700px;" value="<?php echo @$clas;?>"required/><br>
        <br>
        <input type="text" name="fo10" placeholder="Enter email" style="border-radius: 8px;height: 40px; width: 700px;" value="<?php echo @$ema;?>"required/><br>
        <br>
        <select   required=""  name="fo15" style="border-radius: 8px;height: 40px; width: 700px;"">
    <option value="<?php echo @$gende;?>"><?php echo @$gende;?></option>
    <option value="MALE">MALE</option>
    <option value="FEMALE">FEMALE</option>
    </select>
        <input type="text" name="fo11" id="demo" value="<?php echo @$datee;?>"  placeholder="" style="border-radius: 8px;height: 40px; width: 700px;"readonly=""/><br>
        <br>
        <input type="text" name="fo11" id="demo" value="<?php echo @$passw;?>"  placeholder="pass<?php echo @$opu;?>" style="border-radius: 8px;height: 40px; width: 700px;"readonly=""/><br>
        <br>
         <input type="text" name="fo14" id="demo" value="E-id:<?php echo @$passw;?>"  placeholder="pass<?php echo @$opu;?>" style="border-radius: 8px;height: 40px; width: 700px;"readonly=""/><br>
        <br>
        
        <input type="submit" name="submit" value="submit" style="color: white; background-color: #333333; width:250px;"/>
        <br>
        <br>
        <br>
        
        
        </div>
    
    
    </form>
       
     
       
<script>
//    var ola = document.getElementById("nam") ;
// var oli = document.getElementById("demo").value =
//Math.floor(Math.random() * 10000) + 1;
//
//var ole = ola+oli;
</script>
</center>
   </div>
        
        
        
        
        
        
        
</body>
</html>

