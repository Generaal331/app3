<?php 
ob_start();
?>
<html>
<head>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>

<div class="container">
<div class="blok2">
<form method="post">
 <input type="text" name="field_firstname" id="fname" placeholder="Voornaam" required />
 <input type="text" name="field_infixname" placeholder="Tussenvoegsel" />
 <input type="text" name="field_lastname" placeholder="Achternaam" required /><br>
 <input type="email" name="field_email" id="email" placeholder="E-mailadres" required /><br>
 <input type="password" name="field_password" id="passwd" placeholder="Wachtwoord" required /><br>
 <input type="submit" name="submit" value="Registreren" />
</form>
</div>
</div>
<?php
require_once('connect.php');

if(isset($_POST['submit'])){
    $firstname = $_POST['field_firstname'];
    $infixname = $_POST['field_infixname'];
    $lastname = $_POST['field_lastname'];
    $email = $_POST['field_email'];
    $password = $_POST['field_password'];

    $sql = "INSERT INTO customer
    (firstname, infixname, lastname, email, password)
    VALUES('$firstname', '$infixname', '$lastname', '$email', '$password')";
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