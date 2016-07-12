<?php
  include("../classes/DBoperation_2.php");
 if($_SERVER["REQUEST_METHOD"]=="POST"){ 
		$day = $_POST["day"];
		$na  = $_POST["na"];
		$pi  = $_POST["pi"];
		$status=$_POST["status"];
		echo $day." ".$na." ".$pi;
		$save=new DBoperation_2();
		$save->addNewSubscription($day,$na,$pi,$status);
		header("Location: ../views/view_subscription.php");
    }
?>