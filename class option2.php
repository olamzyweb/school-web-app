<!DOCTYPE html>
<html>
    <head>
        <title>choose class</title>
         <link  rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
        
        <?php
        session_start()
        ?>
        <div class="container">
<!--        <div class="jumbotron" style="color: blue; font-style: italic; font-size: 50px;"><img src="img/badge.jpg" width="120px" height="120px"/><label> <b>THE BRIGHT GEMS SCHOOLS</b></label><br><h6 style="margin-left: 150px">DISCIPLINE,INTEGRITY and MORALS<h6></div>
        <div style="margin-left:85%;"><input type="text" name="search box" placeholder="Search"/><input type="submit" name="submit" value="Search"/></div> <br>
-->
        
        
        
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




</style>

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
<li><a
href="database2.php.">login</a>
</li>-->
<lo style="color: black; text-transform: uppercase;">
     <b><?php echo $_SESSION['get_username']; ?></b><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"  fill="#cc0000" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
  </svg> &nbsp;<button onclick="history.back()" style="background-color: #cc0000; padding: 8px 39px; color: white; border: none; ">Previous</button><br> 
        <?php $_SESSION['get_username'];?>

</lo>


</ul>
</div>

<center>
    <h1 style="colour: whitesmoke;">Choose a class to Enter Assignment</h1> 
    <a href="viewresult.php"><button style="background-color: #333333; border: none; color: wheat; width: 180px;height: 50px" >GRADE 1</button></a>&nbsp;&nbsp;&nbsp;
    <a href="viewresult.php"><button style="background-color: #cc0033; border: none; color: wheat; width: 180px;height: 50px">GRADE 2</button></a><br><br><br>
    <a href="viewresult.php"><button style="background-color: #333333; border: none; color: wheat; width: 180px;height: 50px">GRADE 3</button></a>&nbsp;&nbsp;&nbsp;
<a href="viewresult.php"><button style="background-color: #cc0033; border: none; color: wheat; width: 180px;height: 50px">GRADE 4</button></a><br><br><br>
<a href="viewresult.php"><button style="background-color: #333333;border: none; color: wheat; width: 180px;height: 50px">GRADE 5</button></a>&nbsp;&nbsp;&nbsp;
<a href="viewresult.php"><button style="background-color: #cc0033;border: none; color: wheat; width: 180px;height: 50px">GRADE 6</button></a>

</center>
    </body>
</html>
