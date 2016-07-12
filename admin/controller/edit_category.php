<?php
  include("../classes/DBoperation.php");
   $name=$slug=$key="";

  if($_SERVER["REQUEST_METHOD"]=="GET"){ 
  	  $show=new  DBoperation();
	  $result=$show->getCategoryDetails($_GET["id"]);
	  $result=$result[0];
	  $name=$result["name"];
	  $slug=$result["slug"];
	  $key=$result["keyy"];
	  $id=$result["id"];
  }

  if($_SERVER["REQUEST_METHOD"]=="POST"){ 
		$name = $_POST["name"];
		$slug = $_POST["slug"];
		$key  = $_POST["key"];
		$id   = $_POST["id"];

		$file_tmp  =$_FILES['dataf']['tmp_name'];
		$file_name = $_FILES['dataf']['name'];
	    $file_type =$_FILES['dataf']['type'];

		$save=new DBoperation();
		$save->editCategory($id,$name,$slug,$key);
		if (!$_POST["chbx"]) {
		  move_uploaded_file($file_tmp,"../images/ico/".$id);
		}

		header("Location: ../views/view_category.php");
    }
?>