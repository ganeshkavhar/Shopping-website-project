<?php
session_start();
unset($_SESSION["admin"]);

session_destroy();


echo "<script>
    alert('Logout successfully')
	
	window.location='index.php';

     </script>";
 ?>