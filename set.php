<!DOCTYPE html>
<html>
<head>
	<title>set</title>
	<link rel="stylesheet" href="css/set.css">
</head>
<body>
<div class="blok2">
 	Vul hier u sets in
 	<form method="post">
 
 <input type="text" name="field_machine" id="fname" placeholder="machine" required />
 <input type="text" name="field_reps" placeholder="aantal reps" />
 <input type="text" name="field_tijd" placeholder="tijd"  /><br>
 <input type="text" name="field_niveau" placeholder="niveau"  /><br>
 <input type="text" name="field_gewicht"  placeholder="gewicht"  /><br>
 <input type="submit" name="submit" value="Update" />
</form>
</div>

<?php
require_once('connect.php');

if(isset($_POST['submit'])){
    $gerecht = $_POST['field_machine'];
    $Vetpercentage = $_POST['field_reps'];
    $Koolhydraten = $_POST['field_tijd'];
    $Suikers = $_POST['field_niveau'];
    $password = $_POST['field_gewicht'];

    $sql = "INSERT INTO stats
    (machine, reps, tijd, niveau, gewicht)
    VALUES('$machine', '$reps', '$tijd', '$niveau', '$gewicht')";
    if($conn->query($sql) === TRUE) {
        header('location: index.html');
    } else {
        echo "error: " . $sql . "<br>" . $conn->error;
    }
}

//close database connection
$conn->close();
?>
</body>
</html>