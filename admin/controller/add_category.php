<?php

include("../classes/DBoperation.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{  

	$name = $_POST["name"];
	$slug = $_POST["slug"];
	$key  = $_POST["key"];
	$file_tmp  =$_FILES['dataf']['tmp_name'];
	$file_name = $_FILES['dataf']['name'];
    $file_type =$_FILES['dataf']['type'];

	$save=new DBoperation();
	$ID=$save->addNewCategory($name,$slug,$key);

	if($ID > 0){
		move_uploaded_file($file_tmp,"../images/ico/".$ID);
		header("Location: ../views/view_category.php");
	}
	else{
		echo "Faild";
	}
	
}
?>