<?php
  include("../classes/DBoperation.php");


  if($_SERVER["REQUEST_METHOD"]=="GET"){ 
  	  $show=new  DBoperation();
	  $result=$show->getCategoryName();
	  $select=$_GET["id"];
  }
  if($_SERVER["REQUEST_METHOD"]=="POST"){ 
		$name = $_POST["name"];
		$slug = $_POST["slug"];
		$key  = $_POST["key"];
		$cid  = $_POST["selc"];

		$save=new DBoperation();
		$save->addNewSubCategory($cid,$name,$slug,$key);
		header("Location: ../views/view_subcategory.php");
    }
?>