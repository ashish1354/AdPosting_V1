<?php
    if($show->getDateDiff($last_date)){
   header("Location: ../views/ADmanagement.php?msg=You don't have any subscription.");
  }

  if($_SERVER["REQUEST_METHOD"]=="GET"){ 
  	  $result_1=$show->getCategoryName();
      $eid=$_GET["eid"];
      $details=$show->getADByID($eid,$_SESSION['id']);
      $cid=$_GET["id"];
      if ($cid=="") {
        $sid=$details[0]['sid'];
        $cid=$show->getCategoryIDBySubcategoryId($sid);       
      }
  	  $result_2=$show->getSubCategoryDetailsByCAtegory($cid);
      $head   =$details[0]['head'];
      $content=$details[0]['content'];
      $contact=$details[0]['contact'];
  }

  if($_SERVER["REQUEST_METHOD"]=="POST"){ 
  	  $sid=$_POST["sid"];
  	  $head=$_POST["head"];
  	  $content=$_POST["content"];
  	  $contact=$_POST["contact"];
      $id=$_POST["eid"];


      $file_tmp  =$_FILES['img']['tmp_name'];
      $file_name = $_FILES['img']['name'];
      $file_type =$_FILES['img']['type'];

  	  $show->updateAD($id,$sid,$head,$content,$contact);

        move_uploaded_file($file_tmp,"../../images/ad/".$id.".jpg");
        header("Location: ../views/view_ads.php");


  }
?>