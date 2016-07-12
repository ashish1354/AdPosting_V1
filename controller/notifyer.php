<?php



include("../classes/DBoperation.php");
$show=new  DBoperation();
  
  if($_SERVER["REQUEST_METHOD"]=="POST"){ 

    $val_1= "Trans_ID=".$_POST['txn_id']." Payment_date= ".$_POST['payment_date'] ;
    
    $val_2="payment_status= ".$_POST['payment_status'];

  	$sql="INSERT into pay(ttime,tid,info_1,info_2) values ( sysdate(),'".$val_1."','".$val_2."','".$val_3."');";

  	$show->executeQuery($sql);
  }

    $sql="INSERT into pay(ttime,tid,info_1,info_2) values ( sysdate(),'Notify colled',' sd','sds');";

  	$show->executeQuery($sql);
?>