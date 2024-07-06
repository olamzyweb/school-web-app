 <?php
session_start();
$connect = mysqli_connect("localhost","root","","bright_gems");


//if(isset($_POST['choose_name'])){
//  $name = $_POST['nam'];
//  $ola = @$_SESSION['get_username'];
//  $upass = $_POST['upass'];
//  $clas = $_POST['clas'];
//  $inc=1;
//  
  
  
  
  
    
    
  
// $sql = "SELECT * FROM results";
// $check_name = mysqli_query($connect, $sql);
// 
//   
// 
// echo $check_name;
 
 
 
// $stmt = $connect->prepare($sql);
////$stmt->bind_param("s", $_GET['q']);
//$stmt->execute();
//$stmt->store_result();
//$stmt->bind_result();
//$stmt->fetch();
//$stmt->close();
// 
//    while($row= mysqli_fetch_array($check_name)){
//        $namme= $row['name'];
//    $math= $row['mathematics'];
//   
//    }
////}



//echo "<table>";
//echo "<tr>";
//echo "<th>CustomerID</th>";
//echo "<td>" . $cid . "</td>";
//echo "</tr>";
//    echo "</table>"; 
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


      
        
    
//
//    
//        if(isset($_POST['all_names'])){
////  $name = $_POST['nam'];
////   $pass = $_POST['pass'
//  $inc=1;
//   
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

        echo  ' </table> </div>';
//        
        
       
  
  ?>