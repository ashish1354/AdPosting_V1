<?php
  include("../classes/DBoperation.php");

  $show=new  DBoperation();

  $NpNo=$_GET['NpNo'];
  $PpNo=$_GET['PpNo'];
  $name=$_GET['search'];
  $cid=$_GET['selc'];
  $changed=0;

  $result_1=$show->getCategoryName();
  if ($NpNo!="") {
  	$val=($NpNo-1)*10;
  	$result=$show->getSubCategory($val,$name,$cid);
  	$PpNo=$NpNo-1;
  	$NpNo+=1;
   	$changed=1;
  }
  if ($PpNo!="" && $changed!=1) {

  	$val=($PpNo-1)*10;
  	$result=$show->getSubCategory($val,$name,$cid);
  	$NpNo=$PpNo;
  	$PpNo-=1;
  	$changed=1;
  }
  if($changed==0 || $NpNo==1)
  {
  	$result=$show->getSubCategory(0,$name,$cid);
  	$NpNo=2;
  }
  
  //header("Location: ../views/view_category.php");   
?>