<!DOCTYPE html>
<html>
    <head>
        <title>parent form</title>
    </head>
    <body>
        <?php
        session_start()
        ?>
          <?php
    $username = $_SESSION['get_username'];
    echo "<center>welcome $username </center>";
    ?>
    <?php
    $connect = mysqli_connect("localhost","root","","bright_gems");
    
    if(isset($_POST['sub'])){
        
        
        
        $name = $_POST['name'];
        $mathematics = $_POST['mathematics']; 
         $english = $_POST['english'];
          $bst = $_POST['bst'];
         $rnv = $_POST['rnv'];
         $cca = $_POST['cca'];
         $bstudies = $_POST['bstudies'];
         $yoruba = $_POST['yoruba'];
         $french = $_POST['french'];
         $pvs = $_POST['pvs'];
          $total = $_POST['total'];
           $pass = $_POST['pass'];
      
$query = "INSERT INTO resul (name,mathematics,english,bst,rnv,cca,bstudies,yoruba,french,pvs,total,pass) VALUES('$name','$mathematics','$english','$bst','$rnv','$cca','$bstudies','$yoruba','$french','$pvs','$total','$pass')";
$checknam = mysqli_query($connect, $query);
      if($checknam==true){
          echo '<script>alert(result updated successfully)</script>';
      } else {
          echo '<script>alert(something went wrong)</script>';    
      }  
      $tot = $mathematics + $english + $bst + $rnv + $cca + $bstudies + $yoruba + $french + $pvs  ;  
           I
           
           
    }           
           
    
        
        ?>
        
        
    
        <form name="boy" action="admission.php" method="POST" enctype="multipart/form-data">
        
            <input type="text" name="name"/>
            <input type="text" name="mathematics"/>
        <input type="text" name="english"/>
        <input type="text" name="bst"/>
        <input type="text" name="rnv"/>
        <input type="text" name="cca"/>
        <input type="text" name="bstudies"/>
        <input type="text" name="yoruba"/>
            <input type="text" name="french"/>
            <input type="text" name="pvs"/>
            <input type="text" placeholder="<?php echo $tot;?>" name="total"/>
            <input type="text" name="pass"/>
            <input type="submit" name="sub"/>
            
            
        
        
        </form>
            

    </body>
</html>
