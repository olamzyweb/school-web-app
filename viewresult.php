
<?php
// Start the session
session_start();
include('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" >
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
  <script src="class.js"></script>
  <script src="w3.js"></script>
  <link href="sidenavsettings.css" rel="stylesheet">

    
    </head>
    <body>
        <div class="container">
        <?php
//        session_start()
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
  /* background-color: #cc0000; */
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
  

</style>
<div class="container">
<!-- <div class="topnav">
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
<li><a
href="database2.php.">login</a>
</li>-->
<!-- 
<li>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <b style="color:#660000; text-transform: uppercase;" onclick="openNav()"><?php echo @$_SESSION['get_username']; ?></b> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"  fill="#cc0000" class="bi bi-person-circle" viewBox="0 0 16 16" onclick="openNav()">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>&nbsp;<br> 
        <?php @$_SESSION['get_username'];?>
</li>
</ul>
</div> --> -->
   <center>
       <!--<p style="color: #cccccc"><?php // echo $_SESSION['get_username']?>'s SCORE FOR THE TERM-->
   </center>
    <?php

$connect = mysqli_connect("localhost","root","","bright_gems");


if(isset($_POST['choose_name'])){
//  $name = $_POST['nam'];
  $ola = @$_SESSION['get_username'];
  $upass = $_POST['upass'];
  $clas = $_POST['clas'];
  $term1 = $_POST['term'];
  $inc=1;
  
  
  echo "";
  
  echo '<center>';
  echo '<p style="color: #cccccc">';
  // echo @$_SESSION['get_username'];  echo 's SCORE FOR THE TERM';    
  echo'</center>';  
  
  
  
  
   
//     $user = "";
//     $pas = "";
    
//    echo $_SESSION['get_username'] ; 
    
//   if($name == $user){
    
    
    
    
  
 $query_nam = "SELECT * FROM results WHERE  class = '$clas' AND upass = '$upass' AND term = '$term1'";
 $check_name = mysqli_query($connect, $query_nam);
       
//    while($row = mysqli_fetch_array($check_name)){
//        $user = $row['name'];
          
    

    
//     echo '<div class="container">';
//     echo  '<table id="printable" border="3px solid" width="1000px" height="100px" align="center" class="table-dark table-striped table-hover">';
//    echo   '<thead>';
//        echo           '<tr>';
//            echo           '<th>id</th>';
//                   echo    '<th>name</th>';
//                   echo    '<th>mathematics</th>';
//                   echo    '<th>english</th>';
//                   echo    '<th>bst</th>';
//                   echo    '<th>rnv</th>';
//                   echo    '<th>cca</th>';
//                   echo    '<th>bstudies</th>';
//                   echo    '<th>yoruba</th>';
//                   echo    '<th>french</th>';
//                   echo    '<th>pvs</th>';
//                    echo    '<th>total</th>';
//                    
//          echo    '<th>pass</th>';
////          echo    '<th>action</th>';
//                    echo   '</tr>';
//    echo  ' </thead>';
   
 
    while($row= mysqli_fetch_array($check_name)){
        $namme= $row['name'];
    $math= $row['mathematics'];
     $mathca1= $row['mathca1'];
      $mathca2= $row['mathca2'];
    $eng= $row['english'];
    $engca1= $row['englishca1'];
    $engca2= $row['englishca2'];
    $phy= $row['physics'];
    $phyca1= $row['phyca1'];
    $phyca2= $row['phyca2'];
    $chem= $row['chemistry'];
    $chemca1= $row['chemca1'];
    $chemca2= $row['chemca2'];
    $bio= $row['biology'];
     $bioca1= $row['bioca1'];
      $bioca2= $row['bioca2'];
    $fmath= $row['fmaths'];
    $fmathca1= $row['fmathca1'];
    $fmathca2= $row['fmathca2'];
    $econ= $row['economics'];
    $econca1= $row['econca1'];
    $econca2= $row['econca2'];
    $comp= $row['computer'];
    $compca1= $row['compca1'];
    $compca2= $row['compca2'];
    $agric= $row['agric'];
    $agricca1= $row['agricca1'];
    $agricca2= $row['agricca2'];
    $geo= $row['geography'];
    $geoca1= $row['geoca1'];
    $geoca2= $row['geoca2'];
    $tott= $row['total'];
    $grade= $row['pass'];
     $classs= $row['class'];
    $EID = $row['upass'];
    $term = $row['term'];
    $teacherremark = $row['teachremark'];
    $gender = $row['gender'];
    
    }
}
    
    
//       echo "<tr align = 'center'>";
//       echo "<td>" .$inc."</td>";
//       echo "<td>" .$row['name']."</td>";
//       echo "<td>" .$row['mathematics']."</td>";
//       echo "<td>" .$row['english']."</td>";
//       echo "<td>" .$row['physics']."</td>";
//       echo "<td>" .$row['chemistry']."</td>";
//       echo "<td>" .$row['biology']."</td>";
//       echo "<td>" .$row['fmaths']."</td>";
//       echo "<td>" .$row['economics']."</td>";
//       echo "<td>" .$row['computer']."</td>";
//       echo "<td>" .$row['agric']."</td>";
//        echo "<td>" .$row['geography']."</td>";
//       echo "<td>" .$row['total']."</td>";
//       echo "<td>" .$row['pass']."</td>";
////       echo '<td><button name="but" style="background-color: blue;">edit</button></td>';
//       echo "</tr>" ;
//       
//      
//       
//       $inc++;
//       
//            
//    }
//    
//
////$total = ['yoruba'];
////$tot = ['french'];
////$to = $total + $tot ;      
////        
//
//       echo  ' </table>'; 
//    echo '</div>';
//} else {
//       echo'<b><h3>RESULT NOT FOUND</h3></b>' ;
//    }   


      
        
    

    
        if(isset($_POST['all_names'])){
//  $name = $_POST['nam'];
//   $pass = $_POST['pass'
  $inc=1;
   
  $query_name = "SELECT * FROM results ";
    $check_name = mysqli_query($connect, $query_name);
    
    
     echo  '<div class="container" > <table border="3px solid" width="1100px" height="500px" align="center" class="table-hover table-striped table-dark">';
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
            
            <form name="tables_db" action="viewresult.php" method="POST" enctype="multipart/form-data">
<!--            <select name="name" required="">
                <option value="" disabled selected hidden>choose name</option>
                <option value="oladunni">oladunni</option>
                <option value="olamide">olamide</option>
                <option value="olajumoke">olajumoke</option>
                <option value="ire">ire</option> 
                <option value="ibukun">ibukun</option>
                <option value="olanrewaju">olanrewaju</option>               
            </select><br>-->
            
                <?php
//$host = gethostbyaddr($_SERVER["REMOTE_ADDR"]);
//echo $host;
//?>
    <?php 
            
//            print_r($_SESSION);
              $sess = @$_SESSION["get_pass"] ; 
              
              if($sess == ""){
                  echo "<script>alert('Please login first')</script>";
                  echo "<script> window.location.assign('database2.php')</script>";
//                    header('location:database2.php');
              }
              
              
              ?>
                <!--<input type="text" name="nam" id="autocomplete" placeholder="search for name" style="width: 300px"/>-->
            <!--<br>-->
            <!--<input type="text" name="clas" placeholder="re-enter class" style="width: 300px"/>-->
           <br><br>
            <select id="id01" name="clas" style="width: 300px">
  <option w3-repeat="class">{{classname}}</option>
</select></br></br>
         
<select id="termopt" name="term" style="width: 300px">
  <option w3-repeat="class" value="1st term">1st TERM</option>
  <option w3-repeat="class" value="2nd term">2nd TERM</option>
  <option w3-repeat="class" value="3rd term">3rd TERM</option>
</select>

            <br><br>
            <input type="text" name="upass" value="<?php echo $sess ;?>" placeholder="re-enter password" style="width: 300px" readonly=""/>
            <br>
            <input type="submit" name="choose_name"  style="background-color: #333333; color: whitesmoke"value="Show result"/><br>
        <!--<input type="submit" name="all_names" value="all names"/>-->
        
        </form>
        </center>
  
    </div>
    
        <!--this is for class drop down-->
        <script>
w3.getHttpObject("class.js", myFunction);

function myFunction(x) {
  w3.displayObject("id01", x);
}
</script>
<!--class dropdown end-->
        
<!--         <script type='text/javascript' >
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
s                 $('#autocomplete').val(ui.item.label); // display the selected text
                $('#selectuser_id').val(ui.item.value); // save selected id to input
                return false;
            }
        });
     });   
    </script>-->

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <ab onclick="history.back()">Previous page</ab>
  <a href="resultview.php" >Dashboard</a>
  <a href="#">Dark/Light theme</a>
  <a href="#"> Correct name</a>
  <a href="logout2.php">Logout</a>
</div>
    

<script src="mysidenav.js"></script>




<div class="container" id="tab">
<table  class="table table-dark table-bordered table-hover table-active">
    <thead>
   
        <tr> <h5 style="text-transform: uppercase; text-align:left;"><th>STUDENT NAME:</th><td colspan="6"><?php echo @$namme;?></td></h5></tr>
        <tr>
    <th colspan="3"><h5>STUDENT CLASS:<?php echo @$classs;?></h5></th><th colspan="4"><h5>TERM :<?php echo @$term;?></h5></th>
    <tr> <th colspan="3"><h5>GENDER:<?php echo @$gender;?></h5></th>
    <th colspan="4"><h5>STUDENT E-ID:<?php echo @$EID;?></h5></th>
    </tr>  
    </tr>  
    
    <tr>
        <th>Subject</th>
        <th>1ST CA</th>
        <th>2ND CA</th>
         <th>EXAM</th>
          <th>TOTAL</th>
          <th>AVERAGE</th>
           <th>GRADE</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Mathematics</td>
        <td><?php echo @$mathca1?></td>
        <td><?php echo @$mathca2?></td>
        <td><?php echo @$math?></td>
        <td><?php echo @$mathca1 + @$mathca2 + @$math?></td>
        <td><?php echo $k = @$math / 100?></td>
      <td><?php echo @$math?></td>
      </tr>
      <tr>
        <td>English</td>
        <td><?php echo @$engca1?></td>
        <td><?php echo @$engca2?></td>
        <td><?php echo @$eng?></td>
        <td><?php echo @$engca1 + @$engca2 + @$eng?></td>
        <td><?php echo $j = @$eng / 100?></td>
        <td><?php echo @$eng?></td>
      </tr>
      <tr>
        <td>Physics</td>
        <td><?php echo @$phyca1?></td>
        <td><?php echo @$phyca2?></td>
        <td><?php echo @$phy?></td>
        <td><?php echo @$phyca1 + @$phyca2 + @$phy?></td>
        <td><?php echo $i = @$phy / 100?></td>
          <td><?php echo @$phy?></td>
      </tr>
      <tr>
        <td>Chemistry</td>
        <td><?php echo @$chemca1?></td>
         <td><?php echo @$chemca2?></td>
          <td><?php echo @$chem?></td>
          <td><?php echo @$chemca1 + @$chemca2 + @$chem?></td>
        <td><?php echo $h = @$chem / 100?></td>
         <td><?php echo @$chem?></td>
      </tr>
      <tr>
        <td>Biology</td>
        <td><?php echo @$bioca1?></td>
          <td><?php echo @$bioca2?></td>
            <td><?php echo @$bio?></td>
            <td><?php echo @$bioca1 + @$bioca2 + @$bio?></td>
        <td><?php echo $g = @$bio / 100?></td>
           <td><?php echo @$bio?></td>
      </tr>
      <tr>
        <td>Further maths</td>
        <td><?php echo @$fmathca1?></td>
         <td><?php echo @$fmathca2?></td>
          <td><?php echo @$fmath?></td>
          <td><?php echo @$fmathca1 + @$fmathca2 + @$fmath?></td>
        <td><?php echo $f = @$fmath / 100?></td>
          <td><?php echo @$fmath?></td>
      </tr>
      <tr>
        <td>Economics</td>
        <td><?php echo @$econca1?></td>
         <td><?php echo @$econca2?></td>
          <td><?php echo @$econ?></td>
          <td><?php echo @$econca1 + @$econca2 + @$econ?></td>
        <td><?php echo $d = @$econ / 100?></td>
        <td><?php echo @$econ?></td>
      </tr>
      <tr>
        <td>Computer</td>
        <td><?php echo @$compca1?></td>
         <td><?php echo @$compca2?></td>
          <td><?php echo @$comp?></td>
          <td><?php echo @$compca1 + @$compca2 + @$comp?></td>
        <td><?php echo $c = @$comp / 100?></td>
         <td><?php echo @$comp?></td>
      </tr>
      <tr>
        <td>Agric</td>
        <td><?php echo @$agricca1?></td>
          <td><?php echo @$agricca2?></td>
            <td><?php echo @$agric?></td>
            <td><?php echo @$agricca1 + @$agricca2 + @$agric?></td>
        <td><?php echo $b = @$agric / 100?></td>
         <td><?php echo @$agric?></td>
      </tr>
      <tr>
        <td>Geography</td>
        <td><?php echo @$geoca1?></td>
          <td><?php echo @$geoca2?></td>
            <td><?php echo @$geo?></td>
            <td><?php echo @$geoca1 + @$geoca2 + @$geo?></td>
        <td><?php echo $a = @$geo / 100?></td>
         <td><?php echo @$geo?></td>
      </tr>
      <tr>
        <td>Total</td>
        <td><?php echo @$tott?></td>
         <td><?php echo @$tott?></td>
          <td><?php echo @$tott?></td>
        <td><?php echo @$tott / 100?></td>
      </tr>
       <!-- <tr>
        <td>Average</td>
        <td><?php // echo @$tott / 10?></td>
        <td><?php //echo $a +$b +$c +$d +$k +$f +$g +$h +$i +$j?></td>
      </tr> -->
       <tr>
        <td>Grade</td>
        <td colspan="6"><?php echo @$grade?></td>
        <!-- <td><?php // echo @$grade ?></td> -->
      </tr>
      <tr>
        <td>Teacher remark</td>
        <td  colspan="6"><?php echo @$teacherremark?></td>
      </tr>
      
    </tbody>
  </table>

</div>


 

    <p>
        <center>
       <button id="btPrint" onclick="createPDF()" class="fa fa-print"> Print result </button>
    </center>
        </p>
</body>
<script>
    function createPDF() {
        var sTable = document.getElementById('tab').innerHTML;

        var style = "<style>";
        style = style + "table {width: 100%;font: 17px Calibri;background-color:#f0f0f0;}";
        style = style + "table, th, td {border: solid 2px #DDD; border-collapse: collapse;";
        style = style + "padding: 2px 3px;text-align: center;}";
        style = style + "</style>";

        // CREATE A WINDOW OBJECT.
        var win = window.open('', '', 'height=700,width=700');

        win.document.write('<html><head>');
        win.document.write('<title>THE BRIGHT GEMS</title>'); 
        win.document.write('<title><?php echo $namme?> result</title>');   // <title> FOR PDF HEADER.
        win.document.write(style);          // ADD STYLE INSIDE THE HEAD TAG.
        win.document.write('</head>');
        win.document.write('<body>');
        win.document.write(sTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
        win.document.write('</body></html>');

        win.document.close(); 	// CLOSE THE CURRENT WINDOW.

        win.print();    // PRINT THE CONTENTS.
    }
</script>

</div>
      
        
    </body>
</html>
