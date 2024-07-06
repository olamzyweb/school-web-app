<!DOCTYPE html>
<html>
    <head>
        <?php
      $_SESSION=['store_id'];
        
        ?>
        
        <title>academics</title>
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
        <div class="container">
        <div class="jumbotron" style="color: blue; font-style: italic; font-size: 50px;"><img src="img/badge.jpg" width="120px" height="120px"/><label> <b>THE BRIGHT GEMS SCHOOLS</b></label><br><h6 style="margin-left: 150px">DISCIPLINE,INTEGRITY and MORALS<h6></div>
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
  padding: 8px 56px;
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
<!--<li><a
href="arts.php.">Arts</a>
</li>
<li><a
href="schoolfees.php.">School fees</a>
</li>
<li><a
href="mission and vision.php.">Mission and Vision</a>
</li>-->
<li><a
href="activities.php.">Activities</a>
</li>
<li><a
href="database2.php.">login</a>
</li>
</ul>
</div>
<center>
    <div  class="jumbotron"style="font-size: 100px; font-family: verdana; color: blue; font-style: italic;">ACADEMICS</div>
  
<hr>
<hr>



  





<?php

$connect = mysqli_connect("localhost","root","","bright_gems");

 if(isset($_POST['reg'])){        
        $name = $_POST['nam'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $state = $_POST['state'];
          $reg_no = $_POST['reg_no'];    
         $class = $_POST['class'];      
        $fees = $_POST['fees'];
        $foreigner = $_POST['foreigners'];
        
        
          $get_regno = "";
        $search = "SELECT * FROM testing WHERE registration_no = '$reg_no'";
      $check_regno = mysqli_query($connect, $search);
      while($find = mysqli_fetch_assoc($check_regno)){
          $get_regno = $find['registration_no'];
           $get_name = $find['name'];
      }
      
      if($reg_no == $get_regno){
         echo "<script>alert('$get_name is already registered with $reg_no .')</script>"; 
      } else {
        
 $query = "INSERT INTO testing (name,age,email,state,registration_no, class,schoolfees,foreigners) VALUES('$name', '$age', '$email', '$state', '$reg_no', '$class','$fees','$foreigner')";
        $insert_data = mysqli_query($connect, $query);
        if($insert_data == true){
            echo "<script>alert('$name, is now registered with us and has paid $fees.')</script>";
        } else {
            echo "<script>alert('An error has occured.')</script>";
        }
       }
    }
    
 
    /////THIS IS TO SEARCH
     $name = $age = $email = $state = $registeration_no = $class = $foreigner= $fees="";
    if(isset($_POST['src'])){
       $get_regno = $_POST['search_regno'];
       
     
       
       $search_regno = "SELECT * FROM testing WHERE name = '$get_regno'";
        $result  = mysqli_query($connect, $search_regno);
        while($row = mysqli_fetch_assoc($result)){
            //THIS IS TO GET ALL THE DATA RELATED TO THE SEARCHED REGISTRATION NUMBER
            $id = $row['id'];
            $name = $row['name'];
              $age = $row['age'];
              $email = $row['email'];
              $state = $row['state'];
              $registeration_no = $row['registration_no'];
              $class = $row['class'];
              $fees = $row['schoolfees'];
               $foreigner = $row['foreigners'];
              
           $_SESSION['store_id'] = $id;
        }
       
          
        if($get_regno != $name){
            echo "<script>alert('$get_regno is invalid Registration number, Please Contact the Admin')</script>";
        }
        
    }
    
    
    
    ////THIS IS TO UPDATE 
    
        if(isset($_POST['upd'])){
            
   $id = $name = $age = $email = $state = $reg_no = $class = $fees = $foreigner ="";
            
        $name = $_POST['nam'];
            $age = $_POST['age'];
             $email = $_POST['email'];
            $state = $_POST['state'];           
            $reg_no = $_POST['reg_no'];
              $class = $_POST['class'];
                $fees = $_POST['fees'];
             $foreigner = $_POST['foreigners'];
            
             $_SESSION['store_id'] = $id;  
           //$get_id = $_SESSION['store_id'];
           
           $update_syntax = "UPDATE testing SET name = '$name', age = '$age', email = '$email', state = '$state', registration_no = '$reg_no', class = '$class',schoolfees = '$fees', foreigner = '$foreigner' WHERE id = '$id'";
        
          $result = mysqli_query($connect, $update_syntax);
          
         if($result==true){
             echo "<script>alert('Update Successfull!!!')</script>";
              } else {
               echo "<script>alert('You have succesfully tampered with the software')</script>";
          }

        }
        
        
        
        if(isset($_POST['del'])){
            $get_regno_to_delete = $_POST['reg_no'];
            $get_name_to_delete = $_POST['nam'];
       
            $mysqli_delete = "DELETE FROM testing WHERE registration_no= '$get_regno_to_delete' ";
            $result = mysqli_query($connect, $mysqli_delete);
       if($result==true);
       
       
       
       
       
          echo "<script>alert('You have succesfully deleted  $get_regno_to_delete ')</script>";   
        }
         $total_fees ="";
        if(isset($_POST['total'])){
         $sql_sum = "SELECT SUM(schoolfees) as total FROM testing";   
        $result = mysqli_query($connect,$sql_sum);
        while($row = mysqli_fetch_array($result)){
            $total_fees = $row['total'];
        }
         
        }
        
   
    
    ?>
    
       <center>
           <form name="search_student" action="academics.php" method="POST" enctype="multipart/form-data">
               <input type="text" name="search_regno" id="search_name" placeholder="Search Student Reg No. Here"/>
               <input type="submit" name="src" value="SEARCH"/>
           </form>
         
           <br>
           <form name="db test" action="academics.php" method="POST" enctype="multipart/form-data">
           
               <label>Name:</label><input type="text" name="nam" id="olamzy" placeholder="enter Name" value="<?php echo $name;?>"/><br>
<label>Age:</label><input type="number" name="age" placeholder="enter Age" value="<?php echo $age;?>"/><br>
<label>E-mail:</label><input type="email" name="email" placeholder="enter Email" value="<?php echo $email;?>"/><br>
<label>State:</label><input type="text" name="state" placeholder="enter State" value="<?php echo $state;?>"/><br>
<label>Registration No:</label><input type="text" name="reg_no" placeholder="enter Registration" value="<?php echo $registeration_no;?>"/><br>
<label>School Fees:</label><input type="number" name="fees" placeholder="enter school fees" value="<?php echo $fees;?>"/><br>
<label>foreigners:</label><input type="text" name="foreigners" placeholder="enter locality eg nigeria, america" value="<?php echo $foreigner;?>"/><br>
<label>Select Class:</label><select name="class" >
                <option value="<?php echo $class;?>"><?php echo $class;?></option>
                <option value="JSS1">JSS1</option>
                 <option value="JSS2">JSS2</option>
                <option value="JSS3">JSS3</option>
                 <option value="SSS1">SSS1</option>
                 <option value="SSS2">SSS2</option>
                 <option value="SSS3">SSS3</option>

            </select><br>
<input type="submit" name="reg" value="Register"/>
<input type="submit" name="upd" value="UPDATE"/>
<input type="submit" name="del"  id="confirm_delete"value="delete" />
        </form>
           
           <form name="gettotal" action="academics.php" method="POST" enctype="multipart/form-data">
               <input type="submit" name="total" value="view total school fees">
               <label>total amount collected: <?php echo "". $total_fees;?></label>
           </form>
           
           
           <script>
             $(document).ready(function (){
                 $("#confirm_delete").click(function (){
                     var olamide = document.getElementById('olamzy').value;
                     if (olamide === ""){
                         alert ("search student to delete first");
                    $('#search_name').focus();
                    return false;
                     }else{
                         var del_check = confirm("Are you sure you want to delete'"+olamide+"'. you will lose '"+olamide+"'");
                         if(del_check===true){
                             return true;
                         }else {
                             return false;
                         }
                     }
                 });
             });
           
           
           </script>
           
           
           
           
           
           
           <hr>
           <hr>
           
           <?php
           if(isset($_POST['choose_class'])){
               $class = $_POST['class'];
               //loop through all table rows
            $inc=1;
           
   $query_class = "SELECT * FROM testing WHERE class = '$class'"; 
      $find = mysqli_query($connect, $query_class);   
   
       echo '<table border="3px solid" width="500" align="center">';
        
         echo '<tr align = "center">';
         echo '<th>S/N</th>';
         echo '<th>Name</th>';
         echo '<th>Age</th>';
          echo '<th>email</th>';
         echo '<th>state</th>';
         echo '<th>registration_no</th>';
           echo '<th>class</th>';
         
          echo '</tr>';  
          
     while ($row=mysqli_fetch_array($find)){

            echo "<tr align = 'center'>";
            echo "<td>" . $inc."</td>";
            echo "<td>" . $row['name']."</td>";
            echo "<td>" . $row['age']."</td>";        
              echo "<td>" .$row['email']."</td>";
            echo "<td>" . $row['state']."</td>";
            echo "<td>" . $row['registration_no']."</td>";  
            echo "<td>" . $row['class']."</td>";  
            echo "</tr>";
            $inc++;
            }
            
            echo '</table>';  
           
              }
           
         
              
              
              
              
              
              
              
                 if(isset($_POST['all_class'])){
               
               //loop through all table rows
            $inc=1;
           
   $query_class = "SELECT * FROM testing"; 
      $find = mysqli_query($connect, $query_class);   
   
       echo '<table border="3px solid" width="500" align="center">';
        
         echo '<tr align = "center">';
         echo '<th>S/N</th>';
         echo '<th>Name</th>';
         echo '<th>Age</th>';
          echo '<th>email</th>';
         echo '<th>state</th>';
         echo '<th>registration_no</th>';
           echo '<th>class</th>';
         
          echo '</tr>';  
          
     while ($row=mysqli_fetch_array($find)){

            echo "<tr align = 'center'>";
            echo "<td>" . $inc."</td>";
            echo "<td>" . $row['name']."</td>";
            echo "<td>" . $row['age']."</td>";        
              echo "<td>" .$row['email']."</td>";
            echo "<td>" . $row['state']."</td>";
            echo "<td>" . $row['registration_no']."</td>";  
            echo "<td>" . $row['class']."</td>";  
            echo "</tr>";
            $inc++;
            }
            
            echo '</table>';  
           
              }
              
              
              
              
              
              
           
            
           ?>
           
           <form name="table_db" action="academics.php" method="POST" enctype="multipart/form-data">
               <select name="class" required="">
                   <option value="" disabled selected hidden>Choose class</option>
                   <option value="JSS1">JSS1</option>
                    <option value="JSS2">JSS2</option>
                   <option value="JSS3">JSS3</option>
                    <option value="SSS1">SSS1</option>
                    <option value="SSS2">SSS2</option>
                    <option value="SSS3">SSS3</option>
                  
               </select><br>
               <br>
            <input type="submit" name="choose_class" value="Select Class"/> 
            <br>
           
            
           </form>   
            <br>
            <label>Click Below To Display All Student In the School</label>
            <form name="get_all_student" action="academics.php" method="POST" enctype="multipart/form-data">
                <input type="submit" name="all_class" value="All Class"/> 
           </form>
          

  </center>
    </div>
    </body>
</html>