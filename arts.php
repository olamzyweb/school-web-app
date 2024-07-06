<!DOCTYPE html>
<html>
    <head>
        <title>art</title>
     <link  rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
  padding: 8px 29px;
  background-color: blue;
  color: white;
}











.bottomright {
  position: absolute;
  bottom: 8px;
  right: 16px;
  font-size: 18px;
}
  




.container {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 100%;
  height:0;
  transition: .5s ease;
}

.container:hover .overlay {
  bottom: 0;
  height: 100%;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
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
</li>
</ul>
</div>
<center>
    <div  class="jumbotron"style="font-size: 100px; font-family: verdana; color: blue; font-style: italic;">ARTS AND CULTURE</div>
  
    <?php

$connect = mysqli_connect("localhost","root","","bright_gems");


if(isset($_POST['choose_name'])){
  $name = $_POST['name'];
  $inc=1;
   
  $query_name = "SELECT * FROM result WHERE name = '$name'";
    $check_name = mysqli_query($connect, $query_name);
    
   
    
    
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
//       echo "<td>" .$row['password']."</td>";
//       echo "<td>" .$row['class']."</td>";
       echo "</tr>" ;
       $inc++;
       
            
    }
}



        echo  ' </table>';
        
        
        
        
        
        if(isset($_POST['all_names'])){
  $name = $_POST['name'];
  $inc=1;
   
  $query_name = "SELECT * FROM result ";
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
//       echo "<td>" .$row['password']."</td>";
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
        
  
  


    
    
    
        <center>
        <form name="tables_db" action="arts.php" method="POST" enctype="multipart/form-data">
<!--            <select name="name" required="">
                <option value="" disabled selected hidden>choose name</option>
                <option value="oladunni">oladunni</option>
                <option value="olamide">olamide</option>
                <option value="olajumoke">olajumoke</option>
                <option value="ire">ire</option>
                <option value="ibukun">ibukun</option>
                <option value="olanrewaju">olanrewaju</option>               
            </select><br>-->
            
            <input type="text" name="name" placeholder="search for name"/>
            <br>
            <input type="submit" name="choose_name" value="choose name"/><br>
        <input type="submit" name="all_names" value="all names"/>
        
        </form>
        </center>
  </center>
    </div>
    
    
    <div class="container">
        <img src="img/room.jpg" alt="Avatar" class="image">
  <div class="overlay">
<!--    <div class="text">Hello World</div>-->
<img src="img/teacher.jpg" alt="Avatar" ">
  </div>
</div>
    
    
    
    </body>
</html>
