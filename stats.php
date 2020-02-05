<?php
require_once('connect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/style2.css">
	<link rel="stylesheet" href="css/style3.css">
</head>
<body>
<div class="blok2">
<?php
$sql = "SELECT gerecht, Vetpercentage, Koolhydraten, Suiker, calorieen,  FROM eten";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> gerecht: ". $row["gerecht"]. "
       <br> 
        - cal: " . $row["cal"] . "
        <br>  
        - Vetpercentage: " . $row["Vetpercentage"] . "
        <br> 
        - Koolhydraten: " . $row["Koolhydraten"] . "
        <br>
         - Suiker: " . $row["Suiker"] . "
         <br>
          - calorieen: " . $row["calorieen"] . "
           <br><HR><br>";
    }
} else {
    echo "0 results";
}

$conn->close();
        ?>
</div>
</body>
</html>