<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
         <style>
body {
     /*background-color:whitesmoke;*/
     background-image: url('img/data.jpg') ;
     background-size:  100%; 
     height: 100%;
     width: 100%;
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
        <div class="container">
        <?php
        session_start();
    
        ?>
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

        
<!--        <div class="jumbotron" style="color: blue; font-style: italic; font-size: 50px;"><img src="img/badge.jpg" width="120px" height="120px"/><label> <b>THE BRIGHT GEMS SCHOOLS</b></label><br><h6 style="margin-left: 150px">DISCIPLINE,INTEGRITY and MORALS<h6></div>
        <div style="margin-left:85%;"><input type="text" name="search box" placeholder="Search"/><input type="submit" name="submit" value="Search"/></div> <br>-->

        
        
        
    
   <center>
       <!--<p style="color: #cccccc"><?php // echo $_SESSION['get_username']?>'s SCORE FOR THE TERM-->
   </center>
    <?php

$connect = mysqli_connect("localhost","root","","bright_gems");


if(isset($_POST['choose_name'])){
//  $name = $_POST['nam'];
  $ola = $_SESSION['get_username'];
  $upass = $_POST['upass'];
  $clas = $_POST['clas'];
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
    
    
    
    
  
 $query_nam = "SELECT * FROM results WHERE name = '$ola' AND class = '$clas' AND upass = '$upass'";
 $check_name = mysqli_query($connect, $query_nam);
       
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
                   echo    '<th>bst</th>';
                   echo    '<th>rnv</th>';
                   echo    '<th>cca</th>';
                   echo    '<th>bstudies</th>';
                   echo    '<th>yoruba</th>';
                   echo    '<th>french</th>';
                   echo    '<th>pvs</th>';
                    echo    '<th>total</th>';
                    
          echo    '<th>pass</th>';
//          echo    '<th>action</th>';
                    echo   '</tr>';
    echo  ' </thead>';
   
 
    while($row= mysqli_fetch_array($check_name)){
        
       echo "<tr align = 'center'>";
       echo "<td>" .$inc."</td>";
       echo "<td>" .$row['name']."</td>";
       echo "<td>" .$row['mathematics']."</td>";
       echo "<td>" .$row['english']."</td>";
       echo "<td>" .$row['bst']."</td>";
       echo "<td>" .$row['rnv']."</td>";
       echo "<td>" .$row['cca']."</td>";
       echo "<td>" .$row['bstudies']."</td>";
       echo "<td>" .$row['yoruba']."</td>";
       echo "<td>" .$row['french']."</td>";
       echo "<td>" .$row['pvs']."</td>";
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

       echo  ' </table>'; 
    echo '</div>';
} else {
       echo'ghj' ;
    } 


      
        
    

    
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
                   echo    '<th>bst</th>';
                   echo    '<th>rnv</th>';
                   echo    '<th>cca</th>';
                   echo    '<th>bstudies</th>';
                   echo    '<th>yoruba</th>';
                   echo    '<th>french</th>';
                   echo    '<th>pvs</th>';
                   echo    '<th>pass</th>';
//                   echo    '<th>action</th>';
                echo   '</tr>';
    echo  ' </thead>';
            
    
    while($row= mysqli_fetch_array($check_name)){
        
       echo "<tr align = 'center'>";
       echo "<td>" .$inc."</td>";
       echo "<td>" .$row['name']."</td>";
       echo "<td>" .$row['mathematics']."</td>";
       echo "<td>" .$row['english']."</td>";
       echo "<td>" .$row['bst']."</td>";
       echo "<td>" .$row['rnv']."</td>";
       echo "<td>" .$row['cca']."</td>";
       echo "<td>" .$row['bstudies']."</td>";
       echo "<td>" .$row['yoruba']."</td>";
       echo "<td>" .$row['french']."</td>";
       echo "<td>" .$row['pvs']."</td>";
       echo "<td>" .$row['pass']."</td>";
//        echo '<td><button name="but" style="background-color: blue;">edit</button></td>';
//       echo "<td>" .$row['class']."</td>";
       
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
            
            <form name="tables_db" action="adminviewresult.php" method="POST" enctype="multipart/form-data">
<!--            <select name="name" required="">
                <option value="" disabled selected hidden>choose name</option>
                <option value="oladunni">oladunni</option>
                <option value="olamide">olamide</option>
                <option value="olajumoke">olajumoke</option>
                <option value="ire">ire</option> 
                <option value="ibukun">ibukun</option>
                <option value="olanrewaju">olanrewaju</option>               
            </select><br>-->
            
                <!--<input type="text" name="nam" id="autocomplete" placeholder="search for name" style="width: 300px"/>-->
            <!--<br>-->
            <input type="text" name="clas" placeholder="re-enter class" style="width: 300px"/>
            <br><br>
             <input type="text" name="upass" placeholder="re-enter password" style="width: 300px"/>
            <br>
            <input type="submit" name="choose_name"  style="background-color: #333333; color: whitesmoke"value="Show result"/><br>
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