<?php

  include("../classes/DBoperation.php");
  $show=new  DBoperation();

  $data=$show->getUserDetailsById($_SESSION['id']);
  $last_date= $data['est'];
  $tt_add=$data['ads_li'];
  
  $pub_add=$show->getPublisedAdCountByUid($_SESSION['id']);
?>