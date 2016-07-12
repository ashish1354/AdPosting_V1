<?php

  session_start();
  if($_SESSION["email"]==""){
       header("Location: index.php"); 
  }
  include("../classes/DBoperation.php");
  $show=new  DBoperation();

  $data=$show->getUserDetailsById($_SESSION['id']);
  $last_date= $data['est'];
  $tt_add=$data['ads_li'];
  
  $pub_add=$show->getPublisedAdCountByUid($_SESSION['id']);

  echo "<br>".$tt_add-$pub_add."<br>";

  $en=$_GET["enable"];
  if($en!=""){
    if (($tt_add-$pub_add)<=0) {
      $Location="Location: ../views/ADmanagement.php?msg=Your can not create new AD See your add limit.";
    }else{
    	$show->enableAD($en);
      $Location="Location: ../views/view_ads.php";
    }
  }
  $di=$_GET["disable"];
  if($di!=""){
  	$show->disableAD($di);
    $Location="Location: ../views/view_ads.php";
  }
  header($Location); 

?>