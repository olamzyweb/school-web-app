<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
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





img {
  opacity: 0.5;
  filter: alpha(opacity=50); /* For IE8 and earlier */
 -webkit-transition: width 2s; /* Safari */
  transition: width 2s;

}




/* .jumbotron{
    
} */

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
  
<!--  <div class="card-columns">
    <div class="card mb-4 ">
        <div class="card-head">TITLE</div>
        <div class="card-body text-center">
        <p class="card-text"><?php //  while($row = mysqli_fetch_array($check_nam)){ echo $row['message']; }?></p>
      </div>
        <div class="card-footer bg-light"></div>
    </div>
    <div class="card bg-warning">
      <div class="card-body text-center">
        <p class="card-text">Some text inside the second card</p>
      </div>
    </div>
    <div class="card bg-success">
      <div class="card-body text-center">
        <p class="card-text">Some text inside the third card</p>
      </div>
    </div>
    <div class="card bg-danger">
      <div class="card-body text-center">
        <p class="card-text">Some text inside the fourth card</p>
      </div>
    </div>  
    <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Some text inside the fifth card</p>
      </div>
    </div>
    <div class="card bg-info">
      <div class="card-body text-center">
        <p class="card-text">Some text inside the sixth card</p>
      </div>
    </div>
      
      
      
      //<?php 
//      if(isset($_POST['download'])){
////          $url = 'uploaded_files/icon.txt';
//          $file_name = basename($url);
//          
//          if(file_put_contents($file_name, file_get_contents($url))){
//              echo "File downloaded sucessfully";
//          }
//          else{
//              echo "File downloading failed.";
//          }
//          
//          $filename = 'uploaded_files/icons.txt';
//          int readfile(string uploaded_files/icons.txt[,bool $use_include_path = false[,resource $context]])

//          $file_url='uploaded_files/icons.txt';
//          $header = header('content-Type: application/octet-stream');
//          header("Content-Transfer-Encoding: utf-8");
//          header("Content-disposition: attachment;filename=\"".basename($file_url)."\"");
//          readfile($file_url);
//          
//          
          
          
          
          
//      }
      
      
      
      ?>
      <a href="uploaded_files/" download="w3logo">
          <img src="upload_images/thor.jpg" alt="W3Schools" width="104" height="142">
</a>
      <input type="submit" name="download"/>-->
<div class="container">
<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bright_gems";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




//
//// Retrieve news articles from the database
//$sql3 = "SELECT id, title, description, image_url, date FROM news ORDER BY date DESC LIMIT 1";
//$result3 = $conn->query($sql3);
//
//
//
//if ($result3->num_rows > 0) {
//  // Output each news article in a div card
//  while($row = $result3->fetch_assoc()) {
//    $news_id3 = $row["id"];
//    $news_title3 = $row["title"];
//    $news_description3 = $row["description"];
//    $news_image_url3 = $row["image_url"];
//    $news_date3 = $row["date"];
//    
//    
//    
//    
//    
//    
//    // Output the news article in a div card
//     
//     
//    echo '<div class="col-md-8 col-sm-8 col-xs-12">';
//    echo '<div class="card bg-light">';
//   
//    echo '<div class="card-body text--center">';
//    echo '<img  class="card-img-bottom" src="' . $news_image_url3 . '" alt="' . $news_title3 . '" width="100" height="200">';
//    echo '<h4 class="card-text">' . $news_title3 . '</h4>';
////    echo '<p class="card-text">' . $news_description3 . '</p>';
//    echo '<p class="card-text">' . date("F j, Y", strtotime($news_date3)) . '</p>';
//    echo '<a href="read_news.php?id=' . $news_id3 . '" class="btn btn-primary stretched-link bottomright">Read More</a>';
//     echo '</div>';
//       echo '</div>';
//      
//      
//       echo '</div>';
//        
//       
//       
//       
//       
//  }
//  
//  } else {
//  echo "No news articles found.";
//}
//  
//
//





echo 'second one';

// Retrieve news articles from the database1
$sql = "SELECT id, title, description, image_url, date FROM news ORDER BY date DESC ";
$result = mysqli_query($conn,$sql);



if ($result->num_rows > 0) {
  // Output each news article in a div card
  while($row = mysqli_fetch_array($result)) {
    $news_id = $row["id"];
    $news_title = $row["title"];
    $news_description = $row["description"];
    $news_image_url = $row["image_url"];
    $news_date = $row["date"];
    
    
    
    
    
    
    // Output the news article in a div card
     
//     
    echo '<div class="card mb-4">';
//    echo '<div class="card bg-light">';
//   
//    
    echo '<img class="card-img-top" src="' . $news_image_url . '" alt="' . $news_title . '" width="100" height="200">';
echo '<div class="card-body">';
    echo '<h2 class="card-title">' . $news_title . '</h2>';
    echo '<p class="card-text">' . $news_description . '</p>';
    
    echo '<a href="blogdetails.php?id=' . $news_id .$news_title .'" class="btn btn-primary stretched-link bottomright">Read More &rarr; </a>';
    echo '<div class="card-footer text-muted">';
     echo '<p>' . date("F j, Y", strtotime($news_date)) . '</p>';
    echo '</div>';
       echo '</div>';
      
      
            
           
        echo '</div>'; 
//       echo '</div>';
//        
//       
       
       
       
  }
  
  } else {
  echo "No news articles found.";
}
  





//
//// Retrieve news articles from the database2
//$sql2 = "SELECT id, title, description, image_url, date FROM news WHERE category='education' ORDER BY date DESC LIMIT 3";
//$result2 = $conn->query($sql2);
//
//
//
//
//if ($result2->num_rows > 0) {
//  // Output each news article in a div card
//  while($row = $result2->fetch_assoc()) {
//    $news_id1 = $row["id"];
//    $news_title1 = $row["title"];
//    $news_description1 = $row["description"];
//    $news_image_url1 = $row["image_url"];
//    $news_date1 = $row["date"];
//    
//    
//    
//    
//    
//    
//    // Output the news article in a div card
//     
//     
//    echo '<div class="jumbotron">';
//    echo '<div class="card bg-light">';
//   
//    echo '<div class="card-body text--center">';
//    echo '<img  class="card-img-bottom" src="' . $news_image_url1 . '" alt="' . $news_title1 . '" width="100" height="100">';
//    echo '<h4 class="card-text">' . $news_title1 . '</h4>';
////    echo '<p class="card-text">' . $news_description1 . '</p>';
//    echo '<p class="card-text">' . date("F j, Y", strtotime($news_date1)) . '</p>';
//    echo '<a href="read_news.php?id=' . $news_id1 . '" class="btn btn-primary stretched-link bottomright">Read More</a>';
//     echo '</div>';
//       echo '</div>';
// echo '</div>';
//        
//  }
//  
//  } else {
//  echo "No news articles found.";
//}
//  
//




 
$conn->close();
?>
</div>

<!--
 <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="single-blog">
                  <div class="single-blog-img">
                    <a href="blog-details.html">
                        <img src="<?php echo $news_image_url1?>" alt="">
                    </a>
                  </div>
                  <div class="blog-meta">
                    <span class="comments-type">
                      <i class="bi bi-chat"></i>
                      <a href="#">11 comments</a>
                    </span>
                    <span class="date-type">
                      <i class="bi bi-calendar"></i>2016-03-05 / 09:10:16
                    </span>
                  </div>
                  <div class="blog-text">
                    <h4>
                      <a href="#">Post my imagine Items</a>
                    </h4>
                    <p>
                      Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit.
                    </p>
                  </div>
                  <span>
                    <a href="blog-details.html" class="ready-btn">Read more</a>
                  </span>
                </div>
              </div>-->


 <div class="card mb-4">
 <img class="card-img-top" src="<?php echo htmlentities($news_image_url);?>" alt="<?php echo htmlentities($news_id);?>" width="100" height="100">
            <div class="card-body">
              <h2 class="card-title"><?php echo htmlentities($news_description);?></h2>
                 <p><b>Category : </b> <a href="category.php?catid=<?php echo htmlentities($news_id)?>"><?php echo htmlentities($news_description);?></a> </p>
       
              <a href="news-details.php?nid=<?php echo htmlentities($news_id);echo $news_title?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo htmlentities($news_date);?>
           
            </div>
          </div>



>
    </body>
        </html>