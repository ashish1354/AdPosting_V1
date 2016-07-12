<?php


$show=new  DBoperation();

  if($_SERVER["REQUEST_METHOD"]=="POST"){ 

	print_r($_POST);

	$val_1= " view Trans_ID=".$_POST['txn_id']." Payment_date= ".$_POST['payment_date'] ;
    
    $val_2="payment_status= ".$_POST['payment_status'];
    $val_3="payment_gross=".$_POST['payment_gross'];
  	$sql="INSERT into pay(ttime,tid,info_1,info_2) values ( sysdate(),'".$val_1."','".$val_2."','".$val_3."');";

  	$show->executeQuery($sql);
  }

  if($_SERVER["REQUEST_METHOD"]=="GET"){ 

	print_r($_GET);
  }
?>