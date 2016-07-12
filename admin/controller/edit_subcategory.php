<?php
  include("../classes/DBoperation.php");

  $name=$slug=$key=$cid="";

  if($_SERVER["REQUEST_METHOD"]=="GET"){ 
  	  $show=new  DBoperation();
	  $result=$show->getSubCategoryDetails($_GET["id"]);
	  $result=$result[0];
	  $name=$result["name"];
	  $slug=$result["slug"];
	  $key=$result["keyy"];
	  $id=$result["id"];
	  $select=$result["cid"];
	  $result=$show->getCategoryName(); 

  }
  if($_SERVER["REQUEST_METHOD"]=="POST"){ 
		$name = $_POST["name"];
		$slug = $_POST["slug"];
		$key  = $_POST["key"];
		$cid  = $_POST["selc"];
		$id   = $_POST["id"];

		$save=new DBoperation();
		$save->editSubCategory($id,$cid,$name,$slug,$key);
		header("Location: ../views/view_subcategory.php");
    }
?>