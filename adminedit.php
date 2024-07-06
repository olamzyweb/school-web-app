<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="yo">
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
        session_start()
        ?>
        
<!--        <div class="jumbotron" style="color: blue; font-style: italic; font-size: 50px;"><img src="img/badge.jpg" width="120px" height="120px"/><label> <b>THE BRIGHT GEMS SCHOOLS</b></label><br><h6 style="margin-left: 150px">DISCIPLINE,INTEGRITY and MORALS<h6></div>
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
.btn{
    background:#fff;
    color: darkred;
    font-size: 0.9em;
    padding: 4px 4px;
    text-decoration:none;
}
.btn:hover{
    background:darkred;
    color:#fff;
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
href="database2.php.">login</a>
</li>-->
</ul>
</div>
   <center>
       <!--<p style="color: #cccccc"><?php // echo $_SESSION['get_username']?>'s SCORE FOR THE TERM-->
   </center>
    <?php

$connect = mysqli_connect("localhost","root","","bright_gems");

if(isset($_GET['id'])){
    echo "<script>window.confirm('Do you want to delete');</script>";
    $id=$_GET['id'];
    
    $delete=mysqli_query($connect,"DELETE FROM `results` WHERE `id`='$id'");

    if ($delete==true) {
       
        echo '<script> alert("DELETE SUCCESSFUL")</script>';
        echo '<div class="alert alert-success alert-dismissable">
  <strong>SUCCESS!</strong> DELETE SUCCESSFUL.
</div>';
    }else{
       echo '<script> alert("UNABLE TO DELETE")</script>';
    }
}
if(isset($_POST['choose_name'])){
 $name = $_POST['nam'];
  $ola = $_SESSION['get_username'];
 $pass = $_POST['pas'];
  $inc=1;
  
  
  echo "";
  
  echo '<center>';
  echo '<p style="color: #cccccc">';
  echo $_SESSION['get_username'];  echo 's SCORE FOR THE TERM';  
    echo'</center>';  
  
  
  
  
   
//     $user = "";
//     $pas = "";
    
//    echo $_SESSION['get_username'] ; 
    
//   if($name == $user){
    
 $query_nam = "SELECT * FROM results WHERE name = '$name' AND password = '$pass'";
 $check_nam = mysqli_query($connect, $query_nam);
       
//    while($row = mysqli_fetch_array($check_name)){
//        $user = $row['name'];
              
    
    
    echo '<div class="container">';
     echo  '<table border="3px solid" width="1000px" height="100px" align="center" class="table-dark table-striped table-hover">';
    echo   '<thead>';
        echo           '<tr>';
            echo           '<th>id</th>';
                   echo    '<th>name</th>';
                   echo    '<th>mathematics</th>';
                   echo    '<th>english</th>';
                   echo    '<th>phy</th>';
                   echo    '<th>chem</th>';
                   echo    '<th>bio</th>';
                   echo    '<th>fmaths</th>';
                   echo    '<th>econ</th>';
                   echo    '<th>comp</th>';
                   echo    '<th>agric</th>';
                   echo    '<th>geo</th>';
                    echo    '<th>total</th>';
                    
          echo    '<th>pass</th>';
//          echo    '<th>action</th>';
                    echo   '</tr>';
    echo  ' </thead>';
            
    
    while($row= mysqli_fetch_array($check_nam)){
        
       echo "<tr align = 'center'>";
       echo "<td>" .$row['id']."</td>";
       echo "<td>" .$row['name']."</td>";
       echo "<td>" .$row['mathematics']."</td>";
       echo "<td>" .$row['english']."</td>";
       echo "<td>" .$row['physics']."</td>";
       echo "<td>" .$row['chemistry']."</td>";
       echo "<td>" .$row['biology']."</td>";
       echo "<td>" .$row['fmaths']."</td>";
       echo "<td>" .$row['economics']."</td>";
       echo "<td>" .$row['computer']."</td>";
       echo "<td>" .$row['agric']."</td>";
       echo "<td>" .$row['geography']."</td>";
       echo "<td>" .$row['total']."</td>";
       echo "<td>" .$row['pass']."</td>";
//       echo '<td><button name="but" style="background-color: blue;">edit</button></td>';
       echo "</tr>" ;
       
       $inc++;
       
            
    }

//$total = ['yoruba'];
//$tot = ['french'];
//$to = $total + $tot ;      
//        

      
        } else {
    echo '<script>windows.alert("data does not exist") </script>';    
}


    echo  ' </table>';      
        
    echo '</div>';

    
        if(isset($_POST['all_names'])){
//  $name = $_POST['nam'];
//   $pass = $_POST['pass'
  $inc=1;
   
  $query_name = "SELECT * FROM results ";
    $check_name = mysqli_query($connect, $query_name);
    
    
     echo  '<div class="container"> <table border="3px solid" width="1100px" height="500px" align="center" class="table-hover table-striped table-dark">';
    echo   '<thead>';
        echo           '<tr>';
            echo           '<th>id</th>';
                echo    '<th>name</th>';
                   echo    '<th>mathematics</th>';
                   echo    '<th>english</th>';
                   echo    '<th>phy</th>';
                   echo    '<th>chem</th>';
                   echo    '<th>bio</th>';
                   echo    '<th>fmaths</th>';
                   echo    '<th>econ</th>';
                   echo    '<th>comp</th>';
                   echo    '<th>agric</th>';
                   echo    '<th>geo</th>';
                    echo    '<th>total</th>';
                   echo    '<th>pass</th>';
                    echo    '<th>class</th>';
                        echo    '<th>E-ID</th>';
                           echo    '<th>action</th>';
                echo   '</tr>';
    echo  ' </thead>';
            

    while($row= mysqli_fetch_array($check_name)){
        
       echo "<tr align = 'center'>";
       echo "<td>" .$row['id']."</td>";
       echo "<td>" .$row['name']."</td>";
       echo "<td>" .$row['mathematics']."</td>";
       echo "<td>" .$row['english']."</td>";
       echo "<td>" .$row['physics']."</td>";
       echo "<td>" .$row['chemistry']."</td>";
       echo "<td>" .$row['biology']."</td>";
       echo "<td>" .$row['fmaths']."</td>";
       echo "<td>" .$row['economics']."</td>";
       echo "<td>" .$row['computer']."</td>";
       echo "<td>" .$row['agric']."</td>";
       echo "<td>" .$row['geography']."</td>";
       echo "<td>" .$row['total']."</td>";
       echo "<td>" .$row['pass']."</td>";
       echo "<td>" .$row['class']."</td>";
           echo "<td>" .$row['upass']."</td>";
           $erow=$row['id'];
        echo '<td><a href="editstud.php"><button name="bute" style="background-color: blue;">Edit</button></a>&nbsp
       <a href="adminedit.php?id='.$erow.'" class="btn">Delete</a> </td>';
       
    
       echo "</tr>" ;
       $inc++;
       
            
    }
}        
        echo  ' </table> </div>';
  
  ?>


        
        
        
        <br>
        <br>
        <br>
        
<!--  
  <center>
         
     <select name="local_govt" id="localgovt" required="true">
           <option value="" selected="" hidden="" disabled="">Select Local Govt To View</option>
            <option value="Oshodi/Isolo LGA">Oshodi/Isolo LGA</option>
            <option value="Ifako Ijaiye LGA">Ifako Ijaiye LGA</option>
            <option value="Alimosho LGA">Alimosho LGA</option>
            <option value="Agege LGA">Agege LGA</option>
        </select><br><br>
        
        
        <input type="button" id="search_lg" value="Search Local Govt"/>
        <br>
        
        
        <div id="display_lg"></div>
        
        
        
        </center>
        
        
        
         <script>
            $(document).ready(function () {
            $("#search_lg").click(function () {
            
            var localgovt = document.getElementById('localgovt').value;
           
              if (window.XMLHttpRequest)
                  {// code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp=new XMLHttpRequest();
                  }
                else
                  {// code for IE6, IE5
                  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }    
                 
                   xmlhttp.open("GET","local_govt.php?localgovt="+localgovt,true);
                                 xmlhttp.send();  
                                 
                              xmlhttp.onreadystatechange = function(){                                   
                      if(xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                        
                  document.getElementById('display_lg').innerHTML = xmlhttp.responseText;
                     
                                }
                        };
                    
                });
            });    
         </script>
        -->
        
        
        

    
        <center>
            
            <form name="tables_db" action="adminedit.php" method="POST" enctype="multipart/form-data">
<!--            <select name="name" required="">
                <option value="" disabled selected hidden>choose name</option>
                <option value="oladunni">oladunni</option>
                <option value="olamide">olamide</option>
                <option value="olajumoke">olajumoke</option>
                <option value="ire">ire</option> 
                <option value="ibukun">ibukun</option>
                <option value="olanrewaju">olanrewaju</option>               
            </select><br>-->
            
                <input type="text" name="nam" id="autocomplete" placeholder="search for name" style="width: 300px"/>-->
            <br>
            <input type="password" name="pas" id="autocomplete" placeholder="password" style="width: 300px"/>
            <br>
          <input type="submit" name="choose_name" value="choose name"/><br>
        <input type="submit" name="all_names" value="all names"/>
        
        </form>
        </center>
  </center>
    </div>
    
        
        
        
        
         <script type='text/javascript' >
    $( function() {
        $( "#autocomplete" ).autocomplete({
            source: function( request, response ) {
                $.ajax({
                    url: "autocomplete.php",
                    type: 'post',
                    dataType: "json",
                    data: {
                        search: request.term
                    },
                    success: function( data ) {
                        response( data );
                    }
                });
            },
            select: function (event, ui) {
                 $('#autocomplete').val(ui.item.label); // display the selected text
                $('#selectuser_id').val(ui.item.value); // save selected id to input
                return false;
            }
        });
     });   
    </script>



    </body>
</html>