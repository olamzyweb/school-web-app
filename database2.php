<?php session_start();?>
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Boostrap & family-->
  <!--<link rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
 <link rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 
  <!--<script src="ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
  <script src="cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
        
    
    
    
    
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
  background-color: #cc0000;
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
  lio{
    float: right;
}

lio a {
  display: block;
  padding: 8px 62px;
  background-color: #cc0000;
  color: white;
}

</style>
    
    </head>
    <body>
       <div class="topnav">
<ul>
   <li><a
href="index.php.">Home</a>
</li>
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
--><lio><a onclick="goBack()">Back</a>
    
       
</lio>
</ul>
</div>


        
<!--        <div class="container">
         <div class="jumbotron" style="color: blue; font-style: italic; font-size: 50px;"><img src="img/badge.jpg" width="120px" height="120px"/><label> <b>THE BRIGHT GEMS SCHOOLS</b></label><br><h6 style="margin-left: 150px">DISCIPLINE,INTEGRITY and MORALS</h6></div>
        <div style="margin-left:85%;"><input type="text" name="search box" placeholder="Search"/><input type="submit" name="submit" value="Search"/></div> <br>-->

        
        
        
        
        
        
        



 <!--<div class="contain">-->
         <!--<img src="img/room.jpg" alt="Avatar" class="image" style="width:1100px ; ">-->
  <!--<div class="middle">-->
    <!--<div class="text">-->
     
<br>
<br>
<br>
<!--<br>
<br>
<br>
<br>-->


<center>
    <!--<form name="to_database" action="database2.php" method="POST" enctype="multipart/form-data">-->
         <div style="border: 3px solid red; background-color: #333333; height: 350px; width: 300px; padding: 7px; border-radius: 8px;">
        
        
        
        <?php
$connect = mysqli_connect("localhost","root","","bright_gems");
 


if(isset($_POST['log'])){
    $get_username = $_POST['user'];
    $get_password = $_POST['pass'];
    
    $query = "SELECT * FROM admissio WHERE firstname = '$get_username'AND password = '$get_password'";
     $result = mysqli_query($connect, $query);
     
     $user_result = "";
     $pass_result = "";
     
     
    while($row = mysqli_fetch_assoc($result)){
        $user_result = $row['firstname'];
    $pass_result = $row['password'];
              
    }
    
    if($user_result == $get_username && $pass_result == $get_password){
         $_SESSION['get_username'] = $get_username;
          $_SESSION['get_pass'] = $get_password;
        header('location:resultview.php');
       
//        echo 'success';        
    }  else {
          echo '<div class="container">
  <div class="alert alert-danger alert-dismissible" id="myAlert">
    <button type="button" class="close">&times;</button>
    <strong>Error!</strong> Invalid name or password.
  </div>
</div>
<script>
$(document).ready(function(){
  $(".close").click(function(){
    $("#myAlert").alert("close");
  });
});
</script>
';    
      }  
    $_SESSION["user"] = $get_username;
    
    
   
    
    
}

?>

        
        
        
<!--       
            <label>ENTER STUDENT DETAILS</label><br>
            <br>
            <input type="text" name="user" placeholder="enter firstname and surname" style="border-radius: 9px;" required/><br>
           <br>
           <br>
           <input type="password" name="pass" placeholder="enter E-ID/USER PASS" style="border-radius: 9px;" required/><br>      
            <br>
            <br>
            <input type="submit" name="log" value="Login" style="background-color: red; width: 90px; border-radius: 7px;"/><br>
-->
         
         
         
         
         
         
       
        
        <div class="container">
  
  <form action="database2.php" class="was-validated" method="POST" enctype="multipart/form-data" >
    
      <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="user" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">E-ID:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter E-ID" name="pass" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> Check this box for validity.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
      <button type="submit" name="log" class="btn btn-danger">Login</button>
  </form>
</div>
         
         
         
         
         
         
         
         
         </div>        

        <!--</form>-->
</center>
    <!--</div>-->     
    <!--</div>-->
         <!--</div>-->
    <!--</div>-->


        <?php
    $connec = mysqli_connect("localhost","root","","bright_gems");
    
    if(isset($_POST['sub'])){
       
        
        
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
          $total = $_POST['total'];
           $pass = $_POST['pass'];
      
$quer = "INSERT INTO results (name,mathematics,english,bst,rnv,cca,bstudies,yoruba,french,pvs,total,pass) VALUES('$name','$mathematics','$english','$bst','$rnv','$cca','$bstudies','$yoruba','$french','$pvs','$total','$pass')";
$checknam = mysqli_query($connec, $quer);
      if($checknam==true){
          echo '<script>alert(result updated successfully)</script>';
      } else {
          echo '<script>alert(something went wrong)</script>';    
      }  
      
    
//      if(isset($_POST['calc'])){I
// $tot = $mathematics + $english + $bst + $rnv + $cca + $bstudies + $yoruba + $french + $pvs ;  
    }
//      }
    
           
           
           
    
        
        ?>
        
        
    
    <form name="boy" action="database2.php" method="POST" enctype="multipart/form-data">
        
<!--        <input type="text" name="name"><br><br>
        <input type="number" id="firstnum" name="mathematics"/><br><br>
        <input type="number" id="secondnum" name="english"/><br><br>
        <input type="number" id="thirdnum"  name="bst"/><br><br>
        <input type="number" id="fourthnum"  name="rnv"/><br><br>
        <input type="number" id="fifthnum"  name="cca"/><br><br>
        <input type="number" id="sixthnum" name="bstudies"/><br><br>
        <input type="number" id="seventhnum" name="yoruba"/><br><br>
        <input type="number" id="eighthnum" name="french"/><br><br>
        <input type="number" id="ninthnum"name="pvs"/><br><br>
        <input type="number" id="answer"  name="total"/><br><br>
        <input type="text" id="pass" name="pass"/><br><br>
        <input type="submit" name="sub"/><br>
            
            -->
        
        
        </form>
            

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
//     var hnum =parseInt(document.getElementById('fourthnum').value);
      
      
      
      
      
      
      
      
     
     var answer = firstnum + secondnum+thirdnum+fourthnum+fifthnum+sixthnum+seventhnum+eighthnum+ninthnum;
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
//     var hnum =parseInt(document.getElementById('fourthnum').value);
      
      
      
      
      
      
      
      
     
     var answer = firstnum + secondnum+thirdnum+fourthnum+fifthnum+sixthnum+seventhnum+eighthnum+ninthnum;
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
//     var hnum =parseInt(document.getElementById('fourthnum').value);
      
      
      
      
      
      
      
      
     
     var answer = firstnum + secondnum+thirdnum+fourthnum+fifthnum+sixthnum+seventhnum+eighthnum+ninthnum;
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
//     var hnum =parseInt(document.getElementById('fourthnum').value);
      
      
      
      
      
      
      
      
     
     var answer = firstnum + secondnum+thirdnum+fourthnum+fifthnum+sixthnum+seventhnum+eighthnum+ninthnum;
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
//     var hnum =parseInt(document.getElementById('fourthnum').value);
      
      
      
      
      
      
      
      
     
     var answer = firstnum + secondnum+thirdnum+fourthnum+fifthnum+sixthnum+seventhnum+eighthnum+ninthnum;
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
//     var hnum =parseInt(document.getElementById('fourthnum').value);
      
      
      
      
      
      
      
      
     
     var answer = firstnum + secondnum+thirdnum+fourthnum+fifthnum+sixthnum+seventhnum+eighthnum+ninthnum;
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
//     var hnum =parseInt(document.getElementById('fourthnum').value);
      
      
      
      
      
      
      
      
     
     var answer = firstnum + secondnum+thirdnum+fourthnum+fifthnum+sixthnum+seventhnum+eighthnum+ninthnum;
     if(isNaN(seventhnum)){
         document.getElementById('answer').value = 0;
     } else {
         if(isNaN(answer)){
             document.getElementById('answer').value = firstnum + secondnum+thirdnum+fourthnum+fifthnum+sixthnum+seventhnum;
         }else {
             document.getElementById('answer').value = answer;
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
//     var hnum =parseInt(document.getElementById('fourthnum').value);
      
      
      
      
      
      
      
      
     
     var answer = firstnum + secondnum + thirdnum + fourthnum + fifthnum + sixthnum + seventhnum + eighthnum + ninthnum;
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
//     var hnum =parseInt(document.getElementById('fourthnum').value);
      
      
      
      
      
      
      
      
     
     var answer = firstnum + secondnum + thirdnum + fourthnum + fifthnum + sixthnum + seventhnum + eighthnum + ninthnum;
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

