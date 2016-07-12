<?php
  include("../classes/DBoperation.php");

  $show=new  DBoperation();
  
  $NpNo=$_GET['NpNo'];
  $PpNo=$_GET['PpNo'];
  $name=$_GET['search'];
  $changed=0;

  if ($NpNo!="") {
    $val=($NpNo-1)*5;
    $result=$show->getSubscription($val,$name);
    
    $PpNo=$NpNo-1;
    $NpNo+=1;
    $changed=1;
  }
  if ($PpNo!="" && $changed!=1) {

    $val=($PpNo-1)*5;
    $result=$show->getSubscription($val,$name);
    $NpNo=$PpNo;
    $PpNo-=1;
    $changed=1;
  }
  if($changed==0 || $NpNo==1)
  {
    $result=$show->getSubscription(0,$name);
    $NpNo=2;
  }
  
  //header("Location: ../views/view_category.php");
?>