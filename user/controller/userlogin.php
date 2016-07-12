<?php

  include("../classes/DBoperation.php");

  if($_SERVER["REQUEST_METHOD"]=="POST"){ 
  	$email=$_POST["email"];
  	$pwd  =$_POST["pwd"];

  	$show=new  DBoperation();
  	$result=$show->checkLoginCredentials($email,$pwd);
  	if ($result>0){
   		 session_start();
	     $_SESSION["email"] = $email;
       $_SESSION["id"]= $result;
	     header("location: ../views/dashboard.php");
   	}
   	else
   	{
   		$err="Invalid Email OR Password";
   	}
  }

?>