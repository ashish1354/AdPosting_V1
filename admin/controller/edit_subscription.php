<?php
  include("../classes/DBoperation_2.php");
   $name=$slug=$key="";

  if($_SERVER["REQUEST_METHOD"]=="GET"){ 
  	  $show=new  DBoperation_2();
	  $result=$show->getSubscriptionByID($_GET["id"]);
	  $result=$result[0];
	  $day=$result["day"];
	  $ads=$result["ads"];
	  $prise=$result["prise"];
	  $id=$result["id"];
	  if ($result["status"]=="TRUE") {
	  	$enable="checked";
	  }
	  else {
	  	$disable="checked";
	  }
  }

  if($_SERVER["REQUEST_METHOD"]=="POST"){ 
		$day = $_POST["day"];
		$ads  = $_POST["na"];
		$prise  = $_POST["pi"];
		$id  = $_POST["id"];
		$status=$_POST["status"];

		$save=new DBoperation_2();
		$save->editSubscription($id,$day,$ads,$prise,$status);
		header("Location: ../views/view_subscription.php");
    }
?>