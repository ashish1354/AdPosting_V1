<?php

  include("../classes/Validation.php");
  $val=new Validation();

   if($_SERVER["REQUEST_METHOD"]=="POST"){      
   	$lgid=$_POST["lgid"];
   	$lgpass=$_POST["lgpass"];

   	if ($val->checkIDandPass($lgid,$lgpass)){
   		 session_start();
	     $_SESSION["aid"] = $lgid;
	     header("location: ../views/dashboard.php");
   	}
   	else
   	{
   		echo "<br>id password Not equal";
   	}

   }
?>
