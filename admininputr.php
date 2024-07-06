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
  
        <script src="class.js"></script>
  <script src="w3.js"></script> 
    
    
    
    
    
    
    
    </head>
    <body>
        <?php
        session_start()
        ?>
         
        
        
<!--        <div class="container">
         <div class="jumbotron" style="color: blue; font-style: italic; font-size: 50px;"><img src="img/badge.jpg" width="120px" height="120px"/><label> <b>THE BRIGHT GEMS SCHOOLS</b></label><br><h6 style="margin-left: 150px">DISCIPLINE,INTEGRITY and MORALS</h6></div>
        <div style="margin-left:85%;"><input type="text" name="search box" placeholder="Search"/><input type="submit" name="submit" value="Search"/></div> <br>-->

        
        
        
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
  padding: 8px 79px;
  background-color: #990000;
  color: white;
}











.bottomright {
  position: absolute;
  bottom: 8px;
  right: 16px;
  font-size: 18px;
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

<div class="topnav">
<ul>
   <li><a
href="admin3.php.">Back to Admin</a>
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
-
<li><a
href="activities.php.">Activities</a>
</li>
<!--<li><a
href="contact us.php.">login</a>
</li>
<!--</ul>
</div>
        
        
        
        
        
        
        
        
        
        
        
        
//<?php
//$connect = mysqli_connect("localhost","root","","bright_gems");
// 
//
//
//if(isset($_POST['log'])){
//    $get_username = $_POST['user'];
//    $get_password = $_POST['pass'];
//    
//    $query = "SELECT * FROM admissio WHERE firstname = '$get_username'AND password = '$get_password'";
//     $result = mysqli_query($connect, $query);
//     
//     $user_result = "";
//     $pass_result = "";
//     
//     
//    while($row = mysqli_fetch_assoc($result)){
//        $user_result = $row['firstname'];
//    $pass_result = $row['password'];
//              
//    }
//    
//    if($user_result == $get_username && $pass_result == $get_password){
//         $_SESSION['get_username'] = $get_username;
//        header('location:resultview.php');
////        echo 'success';        
//    }else{
//        echo"<script>alert('WELLDONE MR HACKER CONTINUE O, EFCC DEY COME.')</script>";
//    }
//    $_SESSION["user"] = $get_username;
//    
//    
//   
//    
//    
//}
//
//?>




 <!--<div class="contain">-->
         <!--<img src="img/room.jpg" alt="Avatar" class="image" style="width:1100px ; ">-->
  <!--<div class="middle">-->
    <!--<div class="text">-->
     
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center>
<!--    <form name="to_database" action="database2.php" method="POST" enctype="multipart/form-data">
        <div style="border: 3px solid red; background-color: #333333; height: 350px; width: 600px; padding: 7px;">
            <label>GET LOGIN INFORMATION FROM DATABASE</label><br>
            <br>
            <input type="text" name="user" placeholder="enter firstname" style="border-radius: 9px;" required/><br>
           <br>
           <br>
           <input type="password" name="pass" placeholder="enter matrix number" style="border-radius: 9px;" required/><br>      
            <br>
            <br>
            <input type="submit" name="log" value="login" style="background-color: red; width: 90px; border-radius: 7px;"/><br>
        </div>
        </form>
</center>-->
    <!--</div>-->     
    <!--</div>-->
         <!--</div>-->
    <!--</div>-->


        <?php
    $connec = mysqli_connect("localhost","root","","bright_gems");
    
    if(isset($_POST['sub'])){
       
        // this is for the exam score
        
        $name = $_POST['name'];
        $mathematics = $_POST['mathematics']; 
         $english = $_POST['english'];
          $bst = $_POST['bst'];
         $rnv = $_POST['rnv'];
         $cca = $_POST['cca'];
         $bstudies = $_POST['bstudies'];
         $yoruba = $_POST['yoruba'];
         $french = $_POST['french'];
         $pvs = $_POST['pvs'];
         $geo = $_POST['geol'];

// this is for ca1
         $mathematicsca1 = $_POST['mathca1']; 
         $englishca1 = $_POST['englishca1'];
          $bstca1 = $_POST['bstca1'];
         $rnvca1 = $_POST['rnvca1'];
         $ccaca1 = $_POST['ccaca1'];
         $bstudiesca1 = $_POST['bstudiesca1'];
         $yorubaca1 = $_POST['yorubaca1'];
         $frenchca1 = $_POST['frenchca1'];
         $pvsca1 = $_POST['pvsca1'];
         $geoca1 = $_POST['geolca1'];

// this is for ca2
         $mathematicsca2 = $_POST['mathca2']; 
         $englishca2 = $_POST['englishca2'];
          $bstca2 = $_POST['bstca2'];
         $rnvca2 = $_POST['rnvca2'];
         $ccaca2 = $_POST['ccaca2'];
         $bstudiesca2 = $_POST['bstudiesca2'];
         $yorubaca2 = $_POST['yorubaca2'];
         $frenchca2 = $_POST['frenchca2'];
         $pvsca2 = $_POST['pvsca2'];
         $geoca2 = $_POST['geolca2'];
        
        
         $total = $_POST['total'];
           $pass = $_POST['pass'];
           $class = $_POST['clas'];
           $eid = $_POST['eid'];
           $term = $_POST['term'];
           $teachremark = $_POST['teachremark'];
           $gender = $_POST['gender'];

      
$quer = "INSERT INTO results (name,mathematics,english,physics,chemistry,biology,fmaths,economics,computer,agric,geography,mathca1,englishca1,phyca1,chemca1,bioca1,fmathca1,econca1,compca1,agricca1,geoca1,mathca2,englishca2,phyca2,chemca2,bioca2,fmathca2,econca2,compca2,agricca2,geoca2,total,pass,class,upass,term,teachremark,gender) VALUES('$name','$mathematics','$english','$bst','$rnv','$cca','$bstudies','$yoruba','$french','$pvs','$geo','$mathematicsca1','$englishca1','$bstca1','$rnvca1','$ccaca1','$bstudiesca1','$yorubaca1','$frenchca1','$pvsca1','$geoca1','$mathematicsca2','$englishca2','$bstca2','$rnvca2','$ccaca2','$bstudiesca2','$yorubaca2','$frenchca2','$pvsca2','$geoca2','$total','$pass','$class','$eid','$term','$teachremark','$gender')";
$checknam = mysqli_query($connec, $quer);
      if($checknam == true){
          echo "<script>window.alert('result updated successfully');</script>";
      } else {
          echo "<script>alert('something went wrong');</script>";    
      }  
      
    
//      if(isset($_POST['calc'])){I
// $tot = $mathematics + $english + $bst + $rnv + $cca + $bstudies + $yoruba + $french + $pvs ;  
    };
//      }
    
           
   
           
    
        
        ?>
        <form action="admininputr.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="get"><input type="submit" name="getbut">
</form>
      
    <center>
    <form name="boy" action="admininputr.php" method="POST" enctype="multipart/form-data">
         <div style="border: 3px solid red;border-radius: 10px; background-color: #333333; height: auto; width: auto; padding: 7px;">
       
             <br>
             <br>
             
                      
             
             
             <!-- <select name="name" id="car_id" class="form-control-label" > -->
<?php
 if(isset($_POST['getbut'])){
$studentid = $_POST['get'];

 


$list = mysqli_query($connec,"SELECT * FROM `admissio` WHERE password = '$studentid' ");
 
while ($row_ah = mysqli_fetch_assoc($list)) {
?>
                 <input name="name" type="text" readonly value="<?php echo $row_ah['firstname'];echo ' '; echo $row_ah['surname']; ?>"><br>
                 <input name="gender" type="text" readonly value="<?php echo $row_ah['gender']; ?>">
                 <?php }} ?>
<!-- </select><br><br> -->
<select id="id01" name="clas" style="width: 150px">
         <option w3-repeat="class">{{classname}}</option>
         </select><br><br>

<select id="termopt" name="term" style="width: 300px">
  <option w3-repeat="class" value="1st term">1st TERM</option>
  <option w3-repeat="class" value="2nd term">2nd TERM</option>
  <option w3-repeat="class" value="3rd term">3rd TERM</option>
</select><br><br>
             <input type="number" id="firstnum" name="mathematics" placeholder="MATHEMATICS" required="KINDLY FILL OUT"/> <input type="number" id="firstnumca1" name="mathca1" placeholder="ca1" required="KINDLY FILL OUT"/> <input type="number" id="firstnumca1" name="mathca2" placeholder="ca2" required="KINDLY FILL OUT"/><br><br>
             <input type="number" id="secondnum" name="english" placeholder="ENGLISH" required=""/> <input type="number" id="firstnumca1" name="englishca1" placeholder="ca1" required="KINDLY FILL OUT"/> <input type="number" id="firstnumca1" name="englishca2" placeholder="ca2" required="KINDLY FILL OUT"/><br><br>
             <input type="number" id="thirdnum"  name="bst" placeholder="PHYSICS" required=""/> <input type="number" id="firstnumca1" name="bstca1" placeholder="ca1" required="KINDLY FILL OUT"/> <input type="number" id="firstnumca1" name="bstca2" placeholder="ca2" required="KINDLY FILL OUT"/><br><br>
        <input type="number" id="fourthnum"  name="rnv" placeholder="CHEMISTRY" required=""/> <input type="number" id="firstnumca1" name="rnvca1" placeholder="ca1" required="KINDLY FILL OUT"/> <input type="number" id="firstnumca1" name="rnvca2" placeholder="ca2" required="KINDLY FILL OUT"/><br><br>
        <input type="number" id="fifthnum"  name="cca" placeholder="BIOLOGY" required=""/> <input type="number" id="firstnumca1" name="ccaca1" placeholder="ca1" required="KINDLY FILL OUT"/> <input type="number" id="firstnumca1" name="ccaca2" placeholder="ca2" required="KINDLY FILL OUT"/><br><br>
        <input type="number" id="sixthnum" name="bstudies" placeholder="FURTHER MATHS" required=""/> <input type="number" id="firstnumca1" name="bstudiesca1" placeholder="ca1" required="KINDLY FILL OUT"/> <input type="number" id="firstnumca1" name="bstudiesca2" placeholder="ca2" required="KINDLY FILL OUT"/><br><br>
        <input type="number" id="seventhnum" name="yoruba" placeholder="ECONOMICS" required=""/> <input type="number" id="firstnumca1" name="yorubaca1" placeholder="ca1" required="KINDLY FILL OUT"/> <input type="number" id="firstnumca1" name="yorubaca2" placeholder="ca2" required="KINDLY FILL OUT"/><br><br>
        <input type="number" id="eighthnum" name="french" placeholder="COMPUTER" required=""/> <input type="number" id="firstnumca1" name="frenchca1" placeholder="ca1" required="KINDLY FILL OUT"/> <input type="number" id="firstnumca1" name="frenchca2" placeholder="ca2" required="KINDLY FILL OUT"/><br><br>
        <input type="number" id="ninthnum"name="pvs" placeholder="AGRIC" required=""/> <input type="number" id="firstnumca1" name="pvsca1" placeholder="ca1" required="KINDLY FILL OUT"/> <input type="number" id="firstnumca1" name="pvsca2" placeholder="ca2" required="KINDLY FILL OUT"/><br><br>
         <input type="number" id="tenthnum" name="geol" placeholder="GEO" required=""/> <input type="number" id="firstnumca1" name="geolca1" placeholder="ca1" required="KINDLY FILL OUT"/> <input type="number" id="firstnumca1" name="geolca2" placeholder="ca2" required="KINDLY FILL OUT"/><br><br>
        <input type="number" id="answer"  name="total" placeholder="TOTAL" readonly=""/><br><br>
        <input type="text" id="pass" name="pass" placeholder="PASS OR FAIL" readonly=""/><br><br>
        <input type="text" id="pass" name="teachremark" placeholder="Teacher remark" /><br><br>
          <input type="text" id="eid" name="eid" placeholder="ENTER STUDENT ID" value="<?php echo @$studentid;?>" required/><br>
<!--<input type="text" name="clas" placeholder="CLASS"/><br><br>-->
        
          <input type="submit" name="sub"/><br>
             </div>
            </form>
    </center>

    <?php
    $liss = mysqli_query($connec,"SELECT password FROM `admissio` WHERE firstname = $firstnam ");
    
    ?>    
    
    
    
    
     <!--this is for class drop down-->
        <script>
w3.getHttpObject("class.js", myFunction);

function myFunction(x) {
  w3.displayObject("id01", x);
}
</script>
<!--class dropdown end-->
    
    <script>
$(document).ready(function(){
   $('#firstnum').keyup(function(){
     
     
     var firstnum = parseInt(document.getElementById('firstnum').value);
     var secondnum = parseInt(document.getElementById('secondnum').value);
     var thirdnum =parseInt(document.getElementById('thirdnum').value); 
     var fourthnum =parseInt(document.getElementById('fourthnum').value);
     var fifthnum =parseInt(document.getElementById('fifthnum').value);
     var sixthnum =parseInt(document.getElementById('sixthnum').value);
     var seventhnum =parseInt(document.getElementById('seventhnum').value);
     var eighthnum =parseInt(document.getElementById('eighthnum').value);
     var ninthnum =parseInt(document.getElementById('ninthnum').value);
      var tenthnum =parseInt(document.getElementById('tenthnum').value);
//     var hnum =parseInt(document.getElementById('fourthnum').value);
      
      
      
      
      
      
      
      
     
     var answer = firstnum + secondnum+thirdnum+fourthnum+fifthnum+sixthnum+seventhnum+eighthnum+ninthnum+tenthnum;
     if(isNaN(firstnum)){
         document.getElementById('answer').value = 0;
     } else {
         if(isNaN(answer)){
             document.getElementById('answer').value = firstnum;
         }else {
             document.getElementById('answer').value = answer;
         }
     }
     
     
//     if(answer <= 20){
//    document.getElementById('answer').style.color = "yellow";
//document.getElementById('answer').style.backgroundColor = "red";
//
//} else {
//    document.getElementById('answer').style.color = "green";
//    document.getElementById('answer').style.backgroundColor = "blue";
//}

//if(isNaN(firstnum)){
//    document.getElementById('firstnum').value = 0;
//}else {
//    if(firstnum > 0)
//        document.getElementById('firstnum').value = "";
//        document.getElementById('firstnum').value = firstnum;    
//}


   });
});    


     
     
     
     
     
     
     
     
     
      $(document).ready(function(){
   $('#secondnum').keyup(function(){
     
     
     var firstnum = parseInt(document.getElementById('firstnum').value);
     var secondnum = parseInt(document.getElementById('secondnum').value);
     var thirdnum =parseInt(document.getElementById('thirdnum').value); 
     var fourthnum =parseInt(document.getElementById('fourthnum').value);
     var fifthnum =parseInt(document.getElementById('fifthnum').value);
     var sixthnum =parseInt(document.getElementById('sixthnum').value);
     var seventhnum =parseInt(document.getElementById('seventhnum').value);
     var eighthnum =parseInt(document.getElementById('eighthnum').value);
     var ninthnum =parseInt(document.getElementById('ninthnum').value);
     var tenthnum =parseInt(document.getElementById('tenthnum').value);
      
      
      
      
      
      
      
      
     
     var answer = firstnum + secondnum+thirdnum+fourthnum+fifthnum+sixthnum+seventhnum+eighthnum+ninthnum+tenthnum;
     if(isNaN(secondnum)){
         document.getElementById('answer').value = 0;
     } else {
         if(isNaN(answer)){
             document.getElementById('answer').value = firstnum + secondnum;
         }else {
             document.getElementById('answer').value = answer;
         }
     }
 });
 });
    
    $(document).ready(function(){
   $('#thirdnum').keyup(function(){
     
     
     var firstnum = parseInt(document.getElementById('firstnum').value);
     var secondnum = parseInt(document.getElementById('secondnum').value);
     var thirdnum =parseInt(document.getElementById('thirdnum').value); 
     var fourthnum =parseInt(document.getElementById('fourthnum').value);
     var fifthnum =parseInt(document.getElementById('fifthnum').value);
     var sixthnum =parseInt(document.getElementById('sixthnum').value);
     var seventhnum =parseInt(document.getElementById('seventhnum').value);
     var eighthnum =parseInt(document.getElementById('eighthnum').value);
     var ninthnum =parseInt(document.getElementById('ninthnum').value);
      var tenthnum =parseInt(document.getElementById('tenthnum').value);
//     var hnum =parseInt(document.getElementById('fourthnum').value);
      
      
      
      
      
      
      
      
     
     var answer = firstnum + secondnum+thirdnum+fourthnum+fifthnum+sixthnum+seventhnum+eighthnum+ninthnum+tenthnum;
     if(isNaN(thirdnum)){
         document.getElementById('answer').value = 0;
     } else {
         if(isNaN(answer)){
             document.getElementById('answer').value = firstnum + secondnum + thirdnum;
         }else {
             document.getElementById('answer').value = answer;
         }
     }
     });
 });
     
     $(document).ready(function(){
   $('#fourthnum').keyup(function(){
     
     
     var firstnum = parseInt(document.getElementById('firstnum').value);
     var secondnum = parseInt(document.getElementById('secondnum').value);
     var thirdnum =parseInt(document.getElementById('thirdnum').value); 
     var fourthnum =parseInt(document.getElementById('fourthnum').value);
     var fifthnum =parseInt(document.getElementById('fifthnum').value);
     var sixthnum =parseInt(document.getElementById('sixthnum').value);
     var seventhnum =parseInt(document.getElementById('seventhnum').value);
     var eighthnum =parseInt(document.getElementById('eighthnum').value);
     var ninthnum =parseInt(document.getElementById('ninthnum').value);
      var tenthnum =parseInt(document.getElementById('tenthnum').value);
//     var hnum =parseInt(document.getElementById('fourthnum').value);
      
      
      
      
      
      
      
      
     
     var answer = firstnum + secondnum+thirdnum+fourthnum+fifthnum+sixthnum+seventhnum+eighthnum+ninthnum+tenthnum;
     if(isNaN(fourthnum)){
         document.getElementById('answer').value = 0;
     } else {
         if(isNaN(answer)){
             document.getElementById('answer').value = firstnum + secondnum+thirdnum+fourthnum;
         }else {
             document.getElementById('answer').value = answer;
         }
     }
     });
 });
     
     $(document).ready(function(){
   $('#fifthnum').keyup(function(){
     
     
     var firstnum = parseInt(document.getElementById('firstnum').value);
     var secondnum = parseInt(document.getElementById('secondnum').value);
     var thirdnum =parseInt(document.getElementById('thirdnum').value); 
     var fourthnum =parseInt(document.getElementById('fourthnum').value);
     var fifthnum =parseInt(document.getElementById('fifthnum').value);
     var sixthnum =parseInt(document.getElementById('sixthnum').value);
     var seventhnum =parseInt(document.getElementById('seventhnum').value);
     var eighthnum =parseInt(document.getElementById('eighthnum').value);
     var ninthnum =parseInt(document.getElementById('ninthnum').value);
      var tenthnum =parseInt(document.getElementById('tenthnum').value);
//     var hnum =parseInt(document.getElementById('fourthnum').value);
      
      
      
      
      
      
      
      
     
     var answer = firstnum + secondnum+thirdnum+fourthnum+fifthnum+sixthnum+seventhnum+eighthnum+ninthnum+tenthnum;
     if(isNaN(fifthnum)){
         document.getElementById('answer').value = 0;
     } else {
         if(isNaN(answer)){
             document.getElementById('answer').value = firstnum + secondnum+thirdnum+fourthnum+fifthnum;
         }else {
             document.getElementById('answer').value = answer;
         }
     }
     });
 });
     
     
     $(document).ready(function(){
   $('#sixthnum').keyup(function(){
     
     
     var firstnum = parseInt(document.getElementById('firstnum').value);
     var secondnum = parseInt(document.getElementById('secondnum').value);
     var thirdnum =parseInt(document.getElementById('thirdnum').value); 
     var fourthnum =parseInt(document.getElementById('fourthnum').value);
     var fifthnum =parseInt(document.getElementById('fifthnum').value);
     var sixthnum =parseInt(document.getElementById('sixthnum').value);
     var seventhnum =parseInt(document.getElementById('seventhnum').value);
     var eighthnum =parseInt(document.getElementById('eighthnum').value);
     var ninthnum =parseInt(document.getElementById('ninthnum').value);
      var tenthnum =parseInt(document.getElementById('tenthnum').value);
//     var hnum =parseInt(document.getElementById('fourthnum').value);
      
      
      
      
      
      
      
      
     
     var answer = firstnum + secondnum+thirdnum+fourthnum+fifthnum+sixthnum+seventhnum+eighthnum+ninthnum+tenthnum;
     if(isNaN(sixthnum)){
         document.getElementById('answer').value = 0;
     } else {
         if(isNaN(answer)){
             document.getElementById('answer').value = firstnum + secondnum+thirdnum+fourthnum+fifthnum+sixthnum;
         }else {
             document.getElementById('answer').value = answer;
         }
     }
     });
 });
     
     
     
     $(document).ready(function(){
   $('#seventhnum').keyup(function(){
     
     
     var firstnum = parseInt(document.getElementById('firstnum').value);
     var secondnum = parseInt(document.getElementById('secondnum').value);
     var thirdnum =parseInt(document.getElementById('thirdnum').value); 
     var fourthnum =parseInt(document.getElementById('fourthnum').value);
     var fifthnum =parseInt(document.getElementById('fifthnum').value);
     var sixthnum =parseInt(document.getElementById('sixthnum').value);
     var seventhnum =parseInt(document.getElementById('seventhnum').value);
     var eighthnum =parseInt(document.getElementById('eighthnum').value);
     var ninthnum =parseInt(document.getElementById('ninthnum').value);
      var tenthnum =parseInt(document.getElementById('tenthnum').value);
//     var hnum =parseInt(document.getElementById('fourthnum').value);
      
      
      
      
      
      
      
      
     
     var answer = firstnum + secondnum+thirdnum+fourthnum+fifthnum+sixthnum+seventhnum+eighthnum+ninthnum+tenthnum;
     if(isNaN(seventhnum)){
         document.getElementById('answer').value = 0;;
     if(isNaN(seventhnum)){
     } else {
         if(isNaN(answer)){
             document.getElementById('answer').value = firstnum + secondnum+thirdnum+fourthnum+fifthnum+sixthnum+seventhnum;
         }else {
             document.getElementById('answer').value = answer;
         }
     }
 }
     });
 });
     
     
     
     $(document).ready(function(){
   $('#eighthnum').keyup(function(){
     
     
     var firstnum = parseInt(document.getElementById('firstnum').value);
     var secondnum = parseInt(document.getElementById('secondnum').value);
     var thirdnum =parseInt(document.getElementById('thirdnum').value); 
     var fourthnum =parseInt(document.getElementById('fourthnum').value);
     var fifthnum =parseInt(document.getElementById('fifthnum').value);
     var sixthnum =parseInt(document.getElementById('sixthnum').value);
     var seventhnum =parseInt(document.getElementById('seventhnum').value);
     var eighthnum =parseInt(document.getElementById('eighthnum').value);
     var ninthnum =parseInt(document.getElementById('ninthnum').value);
      var tenthnum =parseInt(document.getElementById('tenthnum').value);
//     var hnum =parseInt(document.getElementById('fourthnum').value);
      
      
      
      
      
      
      
      
     
     var answer = firstnum + secondnum + thirdnum + fourthnum + fifthnum + sixthnum + seventhnum + eighthnum + ninthnum + tenthnum;
     if(isNaN(eighthnum)){
         document.getElementById('answer').value = 0;
     } else {
         if(isNaN(answer)){
             document.getElementById('answer').value = firstnum + secondnum + thirdnum + fourthnum + fifthnum + sixthnum + seventhnum + eighthnum ;
         }else { 
             document.getElementById('answer').value = answer;
         }
     }
     });
 });
     
     
     
     $(document).ready(function(){
   $('#ninthnum').keyup(function(){
     
     
     var firstnum = parseInt(document.getElementById('firstnum').value);
     var secondnum = parseInt(document.getElementById('secondnum').value);
     var thirdnum =parseInt(document.getElementById('thirdnum').value); 
     var fourthnum =parseInt(document.getElementById('fourthnum').value);
     var fifthnum =parseInt(document.getElementById('fifthnum').value);
     var sixthnum =parseInt(document.getElementById('sixthnum').value);
     var seventhnum =parseInt(document.getElementById('seventhnum').value);
     var eighthnum =parseInt(document.getElementById('eighthnum').value);
     var ninthnum =parseInt(document.getElementById('ninthnum').value);
      var tenthnum =parseInt(document.getElementById('tenthnum').value);
//     var hnum =parseInt(document.getElementById('fourthnum').value);
      
      
      
      
      
      
      
      
     
     var answer = firstnum + secondnum + thirdnum + fourthnum + fifthnum + sixthnum + seventhnum + eighthnum + ninthnum + tenthnum;
     if(isNaN(ninthnum)){
         document.getElementById('answer').value = 0;
     } else {
         if(isNaN(answer)){
             document.getElementById('answer').value = firstnum + secondnum + thirdnum + fourthnum + fifthnum + sixthnum + seventhnum + eighthnum + ninthnum;
         }else {
             document.getElementById('answer').value = answer;
         }
     }
     
      
    });
 });
     
     
     
     
       $(document).ready(function(){
   $('#tenthnum').keyup(function(){
     
     
     var firstnum = parseInt(document.getElementById('firstnum').value);
     var secondnum = parseInt(document.getElementById('secondnum').value);
     var thirdnum =parseInt(document.getElementById('thirdnum').value); 
     var fourthnum =parseInt(document.getElementById('fourthnum').value);
     var fifthnum =parseInt(document.getElementById('fifthnum').value);
     var sixthnum =parseInt(document.getElementById('sixthnum').value);
     var seventhnum =parseInt(document.getElementById('seventhnum').value);
     var eighthnum =parseInt(document.getElementById('eighthnum').value);
     var ninthnum =parseInt(document.getElementById('ninthnum').value);
     var tenthnum =parseInt(document.getElementById('tenthnum').value);
      
      
      
      
      
      
      
      
     
     var answer = firstnum + secondnum+thirdnum+fourthnum+fifthnum+sixthnum+seventhnum+eighthnum+ninthnum+tenthnum;
     if(isNaN(tenthnum)){
         document.getElementById('answer').value = 0;
     } else {
         if(isNaN(answer)){
             document.getElementById('answer').value = firstnum + secondnum + thirdnum + fourthnum + fifthnum + sixthnum + seventhnum + eighthnum + ninthnum + tenthnum;
         }else {
             document.getElementById('answer').value = answer;
         }
     }
     
     
     
     
     
     
     if(answer < 450){
   document.getElementById('pass').value = "FAIL";
}else{
    if(answer >= 700){
         document.getElementById('pass').value = "PASS,A1";
    }else{
        if(answer >= 600){
             document.getElementById('pass').value = "PASS,B3";
        }else{
        if(answer >= 450 ){
             document.getElementById('pass').value = "PASS,C5";
        }
    }
}
}

if(answer < 450){
    document.getElementById('answer').style.color = "yellow";
document.getElementById('answer').style.backgroundColor = "red";

} else {
    document.getElementById('answer').style.color = "blue";
   document.getElementById('answer').style.backgroundColor = "lightblue";
}
   
 
 
     
 });
 });
     
     
     
    
    
    </script>
    
    
    
    <!--// this is for auto addition(onkeyup)-->
<!--<label>auto addition</label>
<input type="number" id="firstnum" value="0" placeholder="enter first number"><br>
<label>+</label><br>
<input type="number" id="secondnum" value="0" placeholder="enter second number"><br>
<input type="number" id="thirdnum" value="0" placeholder="enter third number"><br>
<input type="number" id="fourthnum" value="0" placeholder="enter fourth number"><br>



ans:<input type="text" id="answer">
    

<script>
$(document).ready(function(){
   $('#firstnum').keyup(function(){
     
     
     var firstnum = parseInt(document.getElementById('firstnum').value);
     var secondnum = parseInt(document.getElementById('secondnum').value);
     var thirdnum =parseInt(document.getElementById('thirdnum').value); 
      var fourthnum =parseInt(document.getElementById('fourthnum').value);
     
     var answer = firstnum + secondnum+thirdnum+fourthnum;
     if(isNaN(secondnum)){
         document.getElementById('answer').value = 0;
     } else {
         if(isNaN(answer)){
             document.getElementById('answer').value = secondnum;
         }else {
             document.getElementById('answer').value = answer;
         }
     }
     
      
    


if(answer <= 20){
    document.getElementById('answer').style.color = "yellow";
document.getElementById('answer').style.backgroundColor = "red";

} else {
    document.getElementById('answer').style.color = "green";
    document.getElementById('answer').style.backgroundColor = "blue";
}

if(isNaN(firstnum)){
    document.getElementById('firstnum').value = 0;
}else {
    if(firstnum > 0)
        document.getElementById('firstnum').value = "";
        document.getElementById('firstnum').value = firstnum;    
}


   });
});    




$(document).ready(function(){
   $('#secondnum').keyup(function(){
      
       
       var firstnum =parseInt(document.getElementById('firstnum').value);
       var secondnum =parseInt(document.getElementById('secondnum').value); 
   var thirdnum =parseInt(document.getElementById('thirdnum').value); 
     var fourthnum =parseInt(document.getElementById('fourthnum').value);
        
        var answer = firstnum+secondnum+thirdnum+fourthnum;
    if(isNaN(firstnum)){
        document.getElementById('answer').value = 0;
    } else {
        if(isNaN(answer)){
            document.getElementById('answer').value = firstnum;
        }else {
            document.getElementById('answer').value = answer;
        }
    }
    }); 
});


$(document).ready(function(){
   $('#thirdnum').keyup(function(){
      
       
       var firstnum =parseInt(document.getElementById('firstnum').value);
       var secondnum =parseInt(document.getElementById('secondnum').value); 
   var thirdnum =parseInt(document.getElementById('thirdnum').value); 
    var fourthnum =parseInt(document.getElementById('fourthnum').value);
   
   
    var answer = firstnum+secondnum+thirdnum+fourthnum;
    if(isNaN(firstnum)){
        document.getElementById('answer').value = 0;
    } else {
        if(isNaN(answer)){
            document.getElementById('answer').value = firstnum;
        }else {
            document.getElementById('answer').value = answer;
        }
    }
    }); 
});




$(document).ready(function(){
   $('#fourthnum').keyup(function(){
      
       
       var firstnum =parseInt(document.getElementById('firstnum').value);
       var secondnum =parseInt(document.getElementById('secondnum').value); 
   var thirdnum =parseInt(document.getElementById('thirdnum').value); 
   var fourthnum =parseInt(document.getElementById('fourthnum').value);
   
   
    var answer = firstnum+secondnum+thirdnum+fourthnum;
    if(isNaN(firstnum)){
        document.getElementById('answer').value = 0;
    } else {
        if(isNaN(answer)){
            document.getElementById('answer').value = firstnum;
        }else {
            document.getElementById('answer').value = answer;
        }
    }
    }); 
});








</script>-->

    
    
    
    
    
    
    
    
    </body>
</html>

