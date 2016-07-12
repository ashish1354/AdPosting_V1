<?php 
   include('head.php');
	 session_unset();

 	 if($_SESSION["email"]==""){
       header("Location: ../views/index.php"); 
 	 }
 ?>
