



<?php


    $connect = mysqli_connect('localhost', 'root', '', 'dammy_project');

    
    
    
  $local_govt = $_REQUEST['localgovt'];
  
  
  
  
   $inc = 1;
  $sql_lg = "SELECT * FROM member_registration WHERE localgovt = '$local_govt'";
  $result = mysqli_query($connect, $sql_lg);
  echo "<center>";
  echo "<caption style='font-size: 24px;'>$local_govt DETAILS</caption>";
      echo "<table border='1'>";
    echo "<thead>";
      echo "<tr>";
        echo " <th>S/N</th>";
          echo "<th>Name</th>";
          echo "<th>Gender</th>";
         echo "<th>Dob</th>";
         echo "<th>Address</th>";
         echo "<th>Local Govt</th>";
        echo "<th>Phone</th>";
         echo "<th>Email</th>";
         echo "<th>Payment</th>";
       echo " </tr>";
   echo " </thead>";
   
     echo " <tbody>";
          while($row = mysqli_fetch_assoc($result)){
          
             echo "<tr>";
               echo "<td>".$inc."</td>";
                 echo "<td>".$row['name']."</td>";
                 echo "<td>".$row['gender']."</td>";
                 echo "<td>".$row['dob']."</td>";
                 echo "<td>".$row['address']."</td>";
                echo "<td>".$row['localgovt']."</td>";
                echo "<td>".$row['phone']."</td>";
                echo "<td>".$row['email']."</td>";
                 echo "<td>".$row['payment']."</td>";
                echo "</tr>";
                $inc++;
                  }         
         echo "</tbody>";
                    echo " </table>";
echo "</center>";