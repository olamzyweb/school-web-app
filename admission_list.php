<!DOCTYPE html>
<html>
    <head>
        <title>admission list</title>
    
    
    
     <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
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
  <script src="w3.js"></script>
        
    
    
    
    
    
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
     /*background-color:whitesmoke;*/
     background-image: url('img/data.jpg') ;
     background-size:  100%; 
     height: 100%;
     width: 100%;
     background-repeat: repeat;
     
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
.bt{
    background:#fff;
    color: darkblue;
    font-size: 0.9em;
    padding: 4px 4px;
    text-decoration:none;
}
.bt:hover{
    background:lightblue;
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
        <p>Search for a name in the input field:</p>

<p>
<input oninput="w3.filterHTML('#id02', '.ite', this.value)" placeholder="Search for names..">
</p>
        
        <?php
        $connect = mysqli_connect("localhost","root","","bright_gems");
        
        $host = gethostbyaddr($_SERVER["REMOTE_ADDR"]);
echo $host;
        
        if(isset($_POST['submit'])){
//  $name = $_POST['nam'];
//   $pass = $_POST['pass'
  $inc=1;
   
  $query_name = "SELECT * FROM admissio";
    $check_name = mysqli_query($connect, $query_name);
    
    
     echo  '<div class="container">'
    . ' <table id="id02" border="3px solid" style="width:500px; height:500px;"  class="table-hover table-responsive-sm table-striped table-dark">';
    echo   '<thead>';
        echo           '<tr>';
            echo           '<th>id</th>';
                   echo    '<th>firstname</th>';
                   echo    '<th>middlename</th>';
                   echo    '<th>surname</th>';
                   echo    '<th>age</th>';
                   echo    '<th>address</th>';
                   echo    '<th>fathers_name</th>';
                   echo    '<th>mothers_name</th>';
                   echo    '<th>fathers_number</th>';
                   echo    '<th>mothers_number</th>';
                   echo    '<th>email</th>';
                   echo    '<th>password</th>';
                   echo    '<th>upload</th>';
                   echo    '<th>image</th>';
                    echo    '<th>date created</th>';
                    echo    '<th>action</th>';
                echo   '</tr>';
    echo  ' </thead>';
            
    
    while($row= mysqli_fetch_array($check_name)){
        $oly = $row['upload'];
      
       echo "<tr  class='ite' align = 'center'>";
        echo "<td>" .$row['id']."</td>";
       echo "<td >" .$row['firstname']."</td>";
       echo "<td >" .$row['middlename']."</td>";
       echo "<td >" .$row['surname']."</td>";
       echo "<td >" .$row['age']."</td>";
       echo "<td >" .$row['address']."</td>";
       echo "<td >" .$row['fathers_name']."</td>";
       echo "<td >" .$row['mothers_name']."</td>";
       echo "<td >" .$row['fathers_number']."</td>";
       echo "<td >" .$row['mothers_number']."</td>";
       echo "<td >" .$row['email']."</td>";
       echo "<td >" .$row['password']."</td>";
       echo "<td >" .$row['upload']. "</td>";
       echo "<td >" ."<img src='upload_images/$oly' width='100px' height='100px'>". "</td>";
       echo "<td >" .$row['date_create']. "</td>";
        $ero=$row['id'];
          
        echo '<td><a href="editstud.php"><button name="bute" style="background-color: blue;">Edit</button></a>&nbsp
       <a href="admission_list.php?id='.$ero.'" class="btn" ><b id="confirm_delete">Delete</b></a> </td>';
       echo "</tr>" ;
       $inc++;
       
            
    }
}

        
        if(isset($_GET['id'])){
            
            
            
            
            
            
            
            
            
            
    $id=$_GET['id'];
   $quer ="DELETE FROM `admissio` WHERE `id`='$id'";
        
           
           
           
    $delete=mysqli_query($connect,$quer);

    if ($delete==true) {
       
        echo '<script> alert("DELETE SUCCESSFUL")</script>';
        echo '<div class="alert alert-success alert-dismissable">
  <strong>SUCCESS!</strong> DELETE SUCCESSFUL.
</div>';
    }else{
       echo '<script> alert("UNABLE TO DELETE")</script>';
    }
        }
        echo  ' </table> </div>';
  
  ?>

<center>
        <form action="admission_list.php" method="POST" enctype="multipart/form-data">
            <input type="submit" style="width: 250px; height:100px;   background-image: linear-gradient(to bottom right,#310202, #490303,#930606,#620404, #c40808);border-radius: 10px; color: whitesmoke;" name="submit" value="check admission list" />
        </form> 
       </center> 
   
           
       




<?php
// wake up ten seconds from now


switch (connection_status())
{
case CONNECTION_NORMAL:
  $txt = 'Connection is in a normal state';
  break;
case CONNECTION_ABORTED:
  $txt = 'Connection aborted';
  break;
case CONNECTION_TIMEOUT:
  $txt = 'Connection timed out';
  break;
case (CONNECTION_ABORTED & CONNECTION_TIMEOUT):
  $txt = 'Connection aborted and timed out';
  break;
default:
  $txt = 'Unknown';
  break;
}

echo $txt;
?>





<?php
$str = "ola";
echo md5($str);
?>









    </body>
</html>
 