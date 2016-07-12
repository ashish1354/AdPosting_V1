<?php

  if($show->getDateDiff($last_date)){
   header("Location: ../views/ADmanagement.php?msg=You don't have any subscription.");
  }

  if (($tt_add-$pub_add)<=0) {
      header("Location: ../views/ADmanagement.php?msg=Your can not create new AD See your add limit.");
  }
  
  if($_SERVER["REQUEST_METHOD"]=="GET"){ 
  	  $result_1=$show->getCategoryName();
  	  $cid=$_GET["id"];
  	  if ($cid=="") {
  	  	$cid=$result_1[0]['id'];
  	  }
  	  $result_2=$show->getSubCategoryDetailsByCAtegory($cid);
  }

  if($_SERVER["REQUEST_METHOD"]=="POST"){ 
  	  $sid=$_POST["sid"];
  	  $head=$_POST["head"];
  	  $content=$_POST["content"];
  	  $contact=$_POST["contact"];
  	  echo "ID=$sid head=$head Con=$content Conn=$contact  uid=";

      $uid=$_SESSION['id'];
      $file_tmp  =$_FILES['img']['tmp_name'];
      $file_name = $_FILES['img']['name'];
      $file_type =$_FILES['img']['type'];

  	  $ID=$show->addNewAD($sid,$head,$content,$contact,$uid);
      if($ID > 0){
        move_uploaded_file($file_tmp,"../../images/ad/".$ID.".jpg");
        header("Location: ../views/view_ads.php");

      }
      else{
        echo "Faild";
      }

  }
?>