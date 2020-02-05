<?php
require_once('connect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/gym.css">
</head>
<body>
 <div class="container">
 <div class="gym">
 	<div class="foto">
 			<img src="img/g1.jpg" alt="Italian Trulli">
</div>
</div>

<div class="gym1">
 	<div class="foto">
 			<img src="img/g2.jpg" alt="Italian Trulli">
 		</div>
 </div>

</div>

<div class="gym1">
 	<div class="foto">
 			<img src="img/g3.jpg" alt="Italian Trulli">
 		</div>
 </div>



</div>

<div class="gym1">
 	<div class="foto">
 			<img src="img/g4.jpg" alt="Italian Trulli">
 		</div>
 </div>
<br>
</div>
 <div class="gym1">
 	<div class="foto">
 			<img src="img/g5.jpg" alt="Italian Trulli">
 		</div>
 </div>

</div> 

<div class="gym1">
 	<div class="foto">
 			<img src="img/g6.jpg" alt="Italian Trulli">
 		</div>

 </div>

 <div id="set">
 <?php
$sql = "SELECT id, uur, cal, oefening1, oefening2, oefening3, oefening4, oefening5, oefening6, oefening7 FROM stats";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. "
        <br> 
        - uur: ". $row["uur"]. "
        <br> 
        - cal: " . $row["cal"] . "
        <br>  
        - oefening1: " . $row["oefening1"] . "
        <br> 
        - oefening2: " . $row["oefening2"] . "
        <br>
         - oefening3: " . $row["oefening3"] . "
         <br>
          - oefening4: " . $row["oefening4"] . "
          <br>
           - oefening5: " . $row["oefening5"] . "
           <br>
           - oefening6: " . $row["oefening6"] . "
           <br> 
           - oefening7: " . $row["oefening7"] . "
           <br><HR><br>";
    }
} else {
    echo "0 results";
}

$conn->close();
        ?>	


















 	
 </div>

</div>






</body>
</html>