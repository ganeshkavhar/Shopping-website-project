<?php
	
	session_start();
     $connection=mysqli_connect("localhost", "root","","rajat");

     if(!$connection){
     	echo "<h1>Connection Error</h1>";
     }
?>