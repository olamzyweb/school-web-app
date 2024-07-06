<!DOCTYPE>
<html>
    <head>
        <title>about</title>
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
         <?php
        session_start()
        ?>
        <div class="container">
         <div class="jumbotron" style="color: blue; font-style: italic; font-size: 50px;"><img src="img/badge.jpg" width="120px" height="120px"/><label> <b>THE BRIGHT GEMS SCHOOLS</b></label><br><h6 style="margin-left: 150px">DISCIPLINE,INTEGRITY and MORALS<h6></div>
                     <!--<div class="dropdown" style="margin-right:85%; background-color: wheat;">
                         <button class="dropbtn">
                             <menu></menu>
                             <menu></menu>
                             <menu></menu>
                         </button>
  <div class="dropdown-content">
    <a href="home.php.">Home</a>
    <a href="admission.php">Admission</a>
    <a href="database2.php">Student login</a>
  </div>-->
 <div style="margin-left:85%;"><input type="text" name="search box" placeholder="Search"/><input type="submit" name="submit" value="Search"/></div> <br>

 <style>
     menu{
  width: 35px;
  height: 5px;
  background-color: black;
  margin: 6px 0;
}
body {
     background-color:whitesmoke;
/*     background-image: url('img/olamide.jpg') ;*/
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
  padding: 10px 64px;
  background-color: blue;
  color: white;
   
}

.dropbtn {
  background-color: white;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: blue;}
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
href="mission and vision.php.">Mission and Vision</a>-->
</li>
<li><a
href="activities.php.">Activities</a>
</li>
<li><a
href="database2.php.">login</a>
</li>
</ul>
</div>
<br>




<div><img src="img/olamide.jpg" style="width: 1120px; height: 500px"></div>






<br>
<br>
<br>
<br>





<svg width="5em" height="5em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg>




<svg width="5em" height="5em" viewBox="0 0 16 16" class="bi bi-chat-square-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
</svg>




<svg width="5em" height="5em" viewBox="0 0 16 16" class="bi bi-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg>





<svg width="5em" height="5em" viewBox="0 0 16 16" class="bi bi-at" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"/>
</svg>

<br>
<br>
<br>
<br>
<div id="dem" class="carousel slide" data-ride="carousel">

   Indicators 
  <ul class="carousel-indicators">
    <li data-target="#dem" data-slide-to="0" class="active"></li>
    <li data-target="#dem" data-slide-to="1"></li>
    <li data-target="#dem" data-slide-to="2"></li>
  </ul>
  
   The slideshow 
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="img/room.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
        <img src="img/olamide.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
        <img src="img/logo.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
   Left and right controls 
  <a class="carousel-control-prev" href="#dem" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#dem" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
      


    

<?php

?>




      
      
      <center style="margin-top: 60px;">
          <label>convert fom usd to Naira,Cedi or Rand</label><br>
          <input type="text" id="get_figure" placeholder="enter dollar to naira"/>
          <select id="country" name="select country">
              <option value="select country">select country</option>
          <option value="(N)NIG">(N)NIG</option>
          <option value="(C)GHA">(C)GHA</option>
          <option value="(R)RSA">(R)RSA</option>
          </select><br>
          <input type="submit" id="dollar_to_one" value="CONVERT SELECTED"/>
          <input type="submit" id="dollar_to_all" value="CONVERT ALL"/><br>
          <br>
          
          <input type="text" id="show_single" placeholder="Selected country"/>
          <br>
          <label id="show_naira">
              
          </label><br>
          
          <label id="show_cedi">
              
          </label><br>
          
          
          <label id="show_rand">
              
          </label><br>
      </center>

      
      
      <?php
      $random = rand(10,100000);
      echo "$random";
      echo "<br>";
      $name = "olamide";
      $cutname = substr($name,0,4);
      echo "$cutname$random";
      ?>
      
      <script>
      // DOLLAR TO NAIRA
         function dollar_to_naira(d1){
             return 400* d1;
         }
     
      // DOLLAR TO cedi
         function dollar_to_cedi(d2){
             return 5.82* d2;
         }
      
      // DOLLAR TO rand
         function dollar_to_rand(d3){
             return 16.91* d3;
         }
      
      
      // This is for convert selected or for singe conversion
      $(document).ready(function(){
          $('#dollar_to_one').click(function(){
              var get_figure = document.getElementById('get_figure').value;
              var country = document.getElementById('country').value;
              
              if(get_figure===""){
                  alert('insert amount to convert');
              }else {
                  if(country==="select country"){
                   alert('select country to convert dollars to its currency')  
            }else {
                if(country === "(N)NIG"){
                        
                        var converted = dollar_to_naira(get_figure);
                        document.getElementById('show_single').value = "N"+converted.toFixed(2);
                        
            }
                
                
                if(country === "(C)GHA"){
                        
                        var converted = dollar_to_cedi(get_figure);
                        document.getElementById('show_single').value = "C"+converted.toFixed(3);
                        
                }
                
                if(country === "(R)RSA"){
                        
                        var converted = dollar_to_rand(get_figure);
                        document.getElementById('show_single').value = "R"+converted.toFixed(3);
                        
                }
                
                
                
                
                
            }
          
        
        }
           }); 
           });
            
            
            //this is for all
              $(document).ready(function(){
                  $('#dollar_to_all').click(function(){
                      var get_figure = document.getElementById('get_figure').value;
                      if(get_figure === ""){
                          alert('insert amount to convert');
                      }else {
                          
                          var converted = dollar_to_naira(get_figure);
                          document.getElementById('show_naira').innerHTML ="N"+converted;
                          
                          var converted2 = dollar_to_cedi(get_figure);
                          document.getElementById('show_cedi').innerHTML ="C"+converted2;
                          
                          
                          
                          var converted3 = dollar_to_rand(get_figure);
                          document.getElementById('show_rand').innerHTML ="R"+converted3;
                          
                          
                      }
                      
                      
                      
                      
                  });
                  
                  
              });
              
              
              
              
              
              
              
              
              
          
          
          
      
      
      
      </script>
      
      
      
      
      </div>  
        <center>
        <input type="text" id="demo"/>
        </center>
<script>
document.getElementById("demo").value =
Math.floor(Math.random() * 100000) ;
</script>



<!--// this is for auto addition(onkeyup)-->
<label>auto addition</label>
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








</script>





<!--this is on key press-->
<br>
<br>

<input type="text" id="ol" onkeypress="myFunction()">

<script>
function myFunction() {
  document.getElementById("ol").style.backgroundColor = "red";
}
</script>

<!--load image into a border
<script>
window.addEventListener('load',function() {
   document.querySelector('input[type="file"]').addEventListener('change',function(){
      if(this.files && this.files[0]){
          var img = document.getElementById('my_image');//$('img')[0]
          var fi = document.getElementById('upload_file');
          
          // calculate file size to know what to upload 
          if (fi.files.length > 0) {
              for (const i = 0; i <= fi.files.length-1; i++){
                  const fsize = fi.files.item(i).size;
                  const file = Math.round((fsize/1000));
                  
                  
                  
                  if (file > 148){
                      alert(
                              "image too large,please resize image to 100kb. your current image size is: "+file/1000+"mb ("+file+"kb). image should be: horizontal = 400px by vertical = 300px.");
                      return false;
                  } else {
                      //loadimg
                      img.src = URL.createObjectURL(this.file[0]);
                      img.onload = imageIsLoaded;
                  }
              }
          }
          
          
      } 
   }); 
});



</script>


<center>
    <div style="width: 150px; height: 150px;">
        <img src="#" alt="----------picture loads here-----------" id="my_image" style="border: 4px #00cc00 solid; width: 150px; height: 150px;"/>
    </div>
    <input type="f ile" name="upload" id="upload_file"/>
    
</center>-->







<script>
        window.addEventListener('load', function() {
 document.querySelector('input[type="file"]').addEventListener('change', function() {
              if (this.files && this.files[0]) {
               var img = document.getElementById('my_image');  // $('img')[0]
               var fi = document.getElementById('upload_file'); 
               
            //   Calculate File Size to know what to upload         
                   if (fi.files.length > 0) { 
                   for (const i = 0; i <= fi.files.length - 1; i++) { 
                       const fsize = fi.files.item(i).size; 
                       const file = Math.round((fsize / 1000)); 
                       // The size of the file. 
                       if (file > 148) { 
                           alert( 
         "Image too large, please resize image to 100kb. Your current image size is: "+file/1000+"mb ("+file+"kb). Image should be: Horizontal = 400px by Vertical = 300px."); 

                                return false;                
                       }  else {
       //        LOAD IMAGE            
                      img.src = URL.createObjectURL(this.files[0]); // set src to blob url
                      img.onload = imageIsLoaded;
                       }
                   } 
               }
            }
        });
     });
     </script>   
     
     <!--TEST IMAGE UPLOAD HERE-->
     <center>
         
         <div style="width: 150px; height: 150px;">
 <img src="#" alt="------------Picture loads here-----------" id="my_image" style="border: 4px #00cc00 solid; width: 150px; height: 150px;"/>
           </div>
         
         <input type="file" name="upload"  id="upload_file"/> 
         

         
         
         
         
             <div class="container mt-3">
  <h2>Modal Example</h2>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Modal body..
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>



</body>
</html>


