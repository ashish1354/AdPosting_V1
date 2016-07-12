<?php

   $err=$_GET['msg'];
   $l_date=strtotime($last_date);
   $l_date=date('d-m-Y h:i:s a',$l_date);

   if($show->getDateDiff($last_date)){
  	$tt="TRUE";
   }
?>