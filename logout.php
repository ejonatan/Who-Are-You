<?php

session_start();

?>

<!--  Authors: Emily Jonatan
			   Pranav Talwar
      File: logout.php
 -->
 
 <?php

if(isset($_SESSION['id'])) {
    session_destroy();
    header("Location: home.php");
}
    
?>