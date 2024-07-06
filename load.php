<!DOCTYPE html>
<html>
    <head>
        <title>
          ajax load  
        </title>
    </head>
    <body>
        
        <script src="ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $.post("viewresult.php",
    {
      name: "Donald Duck",
      city: "Duckburg"
    },
    function(data,status){
//      alert(data);
      document.getElementById("demo").innerHTML = data;
    });
  });
});
</script>
<input type="button" name="button" id="button" value="button">
<button name="butt">submit</button>      




<p id="demo">Let AJAX change this text.</p>

<button type="button" onclick="loadDoc()">Change Content</button>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
//  xhttp.onreadystatechange = function() {
//    if (this.readyState == 4 && this.status == 200) {
//    document.getElementById("demo").innerHTML = this.responseText;
//    }
  xhttp.open("GET", "data.php", true);
  xhttp.send();
  document.getElementById("demo").innerHTML = xhttp.responseText;
}
//}
</script>]


<!--
xhttp = new XMLHttpRequest();
  
  };
  xhttp.open("GET", "getcustomer.php?q="+str, true);
  xhttp.send();-->
}
    </body>
</html>