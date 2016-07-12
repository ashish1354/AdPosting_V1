<?php 
   include('header.php');
	session_unset(); 
  if($_SESSION["aid"]==""){
       header("Location: ../views/index.php"); 
  }
 ?>
