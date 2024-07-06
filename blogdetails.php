
<html>

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
        session_start();
//        include 'header';
//        include 'style.php';
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
       background-attachment: fixed; 
     
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

img{
    /*width: 50%;*/
    
    /*height: 30%;*/
}



img {
  opacity: 0.5;
  filter: alpha(opacity=50); /* For IE8 and earlier */
 -webkit-transition: width 2s; /* Safari */
  transition: width 2s;
  
}




.jumbotron{
    
}

.bottomright {
  position: absolute;
  bottom: 8px;
  right: 16px;
  font-size: 18px;
}
  .bottomleft {
  position: absolute;
  bottom: 8px;
  left: 16px;
  font-size: 18px;
}


</style>

<div class="topnav">
<ul>
   <li><a
href="index.php.">Home</a>
</li>
</ul>
</div>







<div class="container">
  




<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bright_gems";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}






$pid=intval($_GET['id']);
echo $pid;
$sl = "SELECT id, title, description, image_url, date FROM news WHERE id='$pid' ";
$result = mysqli_query($conn,$sl);
if (!$result) {
    printf("error : %s/n", mysqli_error($conn));
    exit();
}else{
    while ($row=mysqli_fetch_array($result)) {
        
   

  // Output each news article in a div card
  
    $news_id = $row["id"];
    $news_title = $row["title"];
    $news_description = $row["description"];
    $news_image_url = $row["image_url"];
    $news_date = $row["date"];
  }
}

  
?>
    <div class="container jumbotron">
          <div class="card mb-4">
      
            <div class="card-body">
              <h2 class="card-title"><?php echo htmlentities($news_title);?></h2>
              <p><b>Category : </b> <a href="category.php?catid=<?php // echo htmlentities($row['cid'])?>"><?php // echo htmlentities($row['category']);?></a> 
                <!--<b>Sub Category : </b><?php echo htmlentities($row['subcategory']);?> <b> Posted on </b><?php echo htmlentities($row['date']);?></p>-->
            </div>

              <img class="img-fluid rounded" src="<?php echo htmlentities($news_image_url);?>" alt="<?php echo htmlentities($news_title);?>"/>
  
              <p class="card-text"><?php 
$pt=$news_description;
              echo  (substr($pt,0));?></p>
             
            </div>
           
           </div>
            </div>
        
        </div>
    
    
    </body>
    
</html>