<?php
 
  if($show->getDateDiff($last_date)){
   header("Location: ../views/ADmanagement.php?msg=You don't have any subscription.");
  }

  $NpNo=$_GET['NpNo'];
  $PpNo=$_GET['PpNo'];
  $name=$_GET['search'];
  $cid=$_GET['selc'];
  $sid=$_GET['sels'];
  $changed=0;

	$result_1=$show->getCategoryName();
  	//$cid=$_GET["id"];
  	if ($cid!="") {
  	 	$result_2=$show->getSubCategoryDetailsByCAtegory($cid);
  	}
  	else{
  	$result_2=$show->getALLSubCategoryDetails();
    }

    $id=$_SESSION['id'];
  if ($NpNo!="") {
  	$val=($NpNo-1)*10;
  	$result=$show->getADWithCondition($val,$cid,$sid,$name,$id);
  	$PpNo=$NpNo-1;
  	$NpNo+=1;
   	$changed=1;
  }
  if ($PpNo!="" && $changed!=1) {

  	$val=($PpNo-1)*10;
  	$result=$show->getADWithCondition($val,$cid,$sid,$name,$id);
  	$NpNo=$PpNo;
  	$PpNo-=1;
  	$changed=1;
  }
  if($changed==0 || $NpNo==1)
  {
  	$result=$show->getADWithCondition(0,$cid,$sid,$name,$id);
  	$NpNo=2;
  }
?>