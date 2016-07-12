<?php
  include("../classes/DBoperation.php");
  $show=new  DBoperation();

  	if($_SERVER["REQUEST_METHOD"]=="POST"){ 


		$sid	=$_POST['item_name'];
		$uid	=$_POST['item_number'];
		$pay    =$_POST['payment_gross'];
		$status =$_POST['payment_status'];

		$subscr=$show->getSubscriptionByID($sid);
		$day=$subscr['day'];
		$ads=$subscr['ads'];

		$show->applySubscroptionOnUser($ads,$uid);
		$show->addTxan($uid,$pay,$status);
		$show->disableAllADByID($uid);
	}


?>