<?php
session_start();
ob_start();
?>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style2.css">
	<title>login</title>
</head>
<body>
 <div class="container">
    <div class="blok2">
      <div id="mainblok1">
        	<form method="post" onsubmit="return validateForm()">
            <input type="email" name="field_naam" id="naam" placeholder="naam" required/>
            <input type="password" name="field_password" id="passwd" placeholder="Wachtwoord" required/><br>
            <input type="submit" name="login" value="Login"/>
         </div>
         <form method="get" action="registeren.php">
            <button class="button button4"><a href="registeren.php">1</a></button>
            </form>
     </div>
 
            <?php
        
                require_once('connect.php');
                if(isset($_POST['login'])){
                    $email = mysqli_real_escape_string($conn, $_POST['field_firstname']);
                    $password = mysqli_real_escape_string($conn, $_POST['field_password']);
                    $sql = "SELECT * FROM customer WHERE firstname= ? AND password= ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("ss", $firstname, $password);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    if($result->num_rows === 0) {
                        exit('Deze gebruiker bestaat niet');
                    } else {
                        $_SESSION['email'] = $firstname;
                        $_SESSION['customerID'] = $row['id'];
                        while($row = $result->fetch_assoc()){
                            $_SESSION['customerID'] = $row['id'];
                        }
                        header("Location: index.html");
                    }
                    $stmt->close();
                }
                    
            ?>
            </form>
        <script>
        function validateForm() {
        if(!validateEmail(document.getElementById("login").value)){
            alert("ongeldig gebruiker");
            return false;
        }
        }  
        function validateEmail(email) {
            var re = ("/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]
                    +)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,
                    3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/");
            return re.test(String(email).toLowerCase());
        }
        </script>
</body>
</html>