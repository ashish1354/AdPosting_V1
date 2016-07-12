<?php
  include("../classes/DBoperation.php");
  $show=new  DBoperation();
  
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
  	  echo "ID=$sid head=$head Con=$content Conn=$contact";

      $file_tmp  =$_FILES['img']['tmp_name'];
      $file_name = $_FILES['img']['name'];
      $file_type =$_FILES['img']['type'];

  	  $ID=$show->addNewAD($sid,$head,$content,$contact);
      if($ID > 0){
        move_uploaded_file($file_tmp,"../../images/ad/".$ID.".jpg");
        header("Location: ../views/view_ad.php");

      }
      else{
        echo "Faild";
      }

  }
?>