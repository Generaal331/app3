<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/style1.css">

	
</head>
<body>
 <div class="blok1">
 	Vul hier u calorien in
 	<form method="post">
 
 <input type="text" name="field_gerecht" id="fname" placeholder="gerecht" required />
 <input type="text" name="field_Vetpercentage" placeholder="Vetpercentage" />
 <input type="text" name="field_Koolhydraten" placeholder="Koolhydraten" required /><br>
 <input type="text" name="field_Suikers" id="email" placeholder="Suiker" required /><br>
 <input type="text" name="field_calorieen" id="passwd" placeholder="calorieen" required /><br>
 <input type="submit" name="submit" value="Update" />
</form>
</div>

<?php
require_once('connect.php');

if(isset($_POST['submit'])){
    $gerecht = $_POST['field_gerecht'];
    $Vetpercentage = $_POST['field_Vetpercentage'];
    $Koolhydraten = $_POST['field_Koolhydraten'];
    $Suikers = $_POST['field_Suiker'];
    $password = $_POST['field_calorieen'];

    $sql = "INSERT INTO eten
    (gerecht, Vetpercentage, Koolhydraten, Suiker, calorieen)
    VALUES('$gerecht', '$Vetpercentage', '$Koolhydraten', '$Suiker', '$calorieen')";
    if($conn->query($sql) === TRUE) {
        header('location: login.php');
    } else {
        echo "error: " . $sql . "<br>" . $conn->error;
    }
}

//close database connection
$conn->close();
?>
 
    
 	
  
</body>
</html>