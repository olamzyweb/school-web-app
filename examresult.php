<!DOCTYPE>
<html>
    <head>
        <title>exam result</title>
         <link  rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
         <div class="jumbotron" style="color: blue; font-style: italic; font-size: 50px;"><img src="img/badge.jpg" width="120px" height="120px"/><label> <b>THE BRIGHT GEMS SCHOOLS</b></label><br><h6 style="margin-left: 150px">DISCIPLINE,INTEGRITY and MORALS</h6></div>
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
  padding: 8px 45px;
  background-color: blue;
  color: white;
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
<!--<li><a
href="contact us.php.">login</a>
</li>-->
</ul>
</div>
<br>
<br>
<br>
<br>
<br>



<!--<div class="container" >
<table border="1" class="table-hover table-striped table-dark " style="; width: 1150px; height: 500px;">
    <thead>
        <tr style="background-color: blue; color: white;">
            <th>NAMES</th>
            <th>Mathematics</th>
            <th>English</th>
            <th>BST</th>
            <th>RNV</th>
            <th>CCA</th>
            <th>B/Studies</th>
            <th>Yoruba</th>
            <th>French</th>
            <th>PVS</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Olanrewaju olamide</td>
            <td>60</td>
            <td>60</td>
            <td>50</td>
            <td>40</td>
            <td>50</td>
            <td>40</td>
            <td>30</td>
            <td>45</td>
            <td>35</td>
        </tr>
        <tr>
            <td>Okwujiakwu Kelechi</td>
            <td>50</td>
            <td>60</td>
            <td>40</td>
            <td>30</td>
            <td>45</td>
            <td>40</td>
            <td>30</td>
            <td>34</td>
            <td>59</td>
        </tr>
        <tr>
            <td>Aina olaoluwa</td>
            <td>45</td>
            <td>49</td>
            <td>60</td>
            <td>50</td>
            <td>40</td>
            <td>55</td>
            <td>35</td>
            <td>57</td>
            <td>45</td>
        </tr>
        <tr>
            <td>Bodunrin Ibukun</td>
            <td>60</td>
            <td>30</td>
            <td>60</td>
            <td>60</td>
            <td>45</td>
            <td>29</td>
            <td>56</td>
            <td>40</td>
            <td>60</td>
        </tr>
        <tr>
            <td>Oladipupo Opeyemi</td>
            <td>23</td>
            <td>50</td>
            <td>34</td>
            <td>57</td>
            <td>34</td>
            <td>60</td>
            <td>40</td>
            <td>37</td>
            <td>60</td>
        </tr>
        <tr>
            <td>Yero Esther</td>
            <td>60</td>
            <td>40</td>
            <td>50</td>
            <td>57</td>
            <td>58</td>
            <td>60</td>
            <td>43</td>
            <td>35</td>
            <td>57</td>
        </tr>
        <tr>
            <td>Abidoye Ifeoluwa</td>
            <td>60</td>
            <td>40</td>
            <td>50</td>
            <td>34</td>
            <td>45</td>
            <td>54</td>
            <td>49</td>
            <td>59</td>
            <td>56</td>
        </tr>
        <tr>
            <td>Ike Daniella</td>
            <td>59</td>
            <td>50</td>
            <td>60</td>
            <td>45</td>
            <td>45</td>
            <td>56</td>
            <td>54</td>
            <td>35</td>
            <td>54</td>
        </tr>
        <tr>
            <td>Olanrewaju Olajumoke</td>
            <td>57</td>
            <td>45</td>
            <td>60</td>
            <td>54</td>
            <td>35</td>
            <td>56</td>
            <td>56</td>
            <td>45</td>
            <td>37</td>
        </tr>
        <tr>
            <td>Bodunrin Ire</td>
            <td>34</td>
            <td>56</td>
            <td>60</td>
            <td>34</td>
            <td>45</td>
            <td>56</td>
            <td>60</td>
            <td>45</td>
            <td>59</td>
        </tr>
    </tbody>
</table>
</div>-->

<center>        
    <p style="font-size: 30px; color: blue;">I/N:Check result below with your firstname and surname only.</p>   
</center> 

<br>
<br>
<br>
<br>
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
            <div style="border:3px solid blue; width:250px;height: 200px; padding:20px ; background-color:lightblue ;">
        <form name="tables_db" action="examresult.php" method="POST" enctype="multipart/form-data">
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
            <br>
            <input type="submit" name="choose_name" value="choose name"/><br>
        <br>
            <input type="submit" name="all_names" value="all names"/>
        
        </form>
             </div>
        </center>
  












<br>
<br>
<br>
<br>
<marquee style="background-color: white; color: blue; font-size: 30px;font-style:italic ; "> If you were not able to access your result,contact the admin immediately.</marquee>

    </body>
</html>
