<?php
 	
 	$conn = new mysqli('localhost', 'root', '', 'app1');

 	if ($conn->cennect_errno) {
 		echo "Fout: ". $conn->connect_error;
 	}
 	?> 