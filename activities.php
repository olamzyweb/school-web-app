<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
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
 
  <!--<script src="ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
  <script src="cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
        
    
     
    
    </head>
    <body>
        <div class="container">
        <?php
        session_start()
        ?>
        
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
  padding: 8px 63px;
  background-color: blue;
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
        </div>
 enter your name:<input type="text" id="fname" onkeyup="myFunction()">
            <p>my name is :<span id="demo"></span></p>    
    

    <!--javascript-->
        <div id="show_answer" style="margin-left: 50%;">
            
        </div>
        
    <div>
        <center>
            <label>convert miles to kilometers:</label><br>
        <input type="text" id="getmiles" placeholder=" enter any number to convert miles"/>
        <button type="submit" id="convert">CONVERT</button>
        <p id="show_conversion">
            
        </p>
        </center>
    </div>
        <p  style="margin-left: 70%; color: blue;" id="show_mike"></p>
        
        
        
            <script>
            var num1 = 70;
            var num2 = 30;
            
            var total = num1 * num2
            document.getElementById('show_answer').innerHTML = total;
           
            
            
            function mike(x,y){
                return x + y;
            };
            
            var calculate = mike(5,8);
            document.getElementById('show_mike').innerHTML = calculate
            
            
            
            
            //miles to kilometers
             function mile_to_km(m){
        //1mile = 1.609km
        // 12mile = xkm
               return  m * 1.609;   
            }
            
            $(document).ready(function(){
                    $('#convert').click(function(){
                        
                   
           
        var getmiles= document.getElementById('getmiles').value;
            
            var cal_to_km = mile_to_km(getmiles);
            
            document.getElementById('show_conversion').innerHTML = cal_to_km.toFixed(2);
             });
                });
                
                
                
                
                
                
                function myfunction(){
                    var x = 
                            document.getElementById("fname").value;
                    document.getElementById("demo").innerHTML = x;
                }
                
                
                
                
            
            
            
            
            </script>
    
    
    
            enter your name:<input type="text" id="fname" onkeyup="myFunction()">
            <p>my name is :<span id="demo"></span></p>    
    
    
    
    
    
    
    
    
    </body>
</html>