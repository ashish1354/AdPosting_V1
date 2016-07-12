<?php

    $v1=mt_rand(10,100);
    $v2=mt_rand(10,100);

  if($_SERVER["REQUEST_METHOD"]=="POST"){ 
  	$name=$_POST["name"];
  	$email=$_POST["email"];
  	$pwd=$_POST["pwd"];
 

	$show=new  DBoperation();
	echo $name,$email,$pwd;
	$ID=$show->createNewUser($name,$email,$pwd);
	if ($ID>0) {
		$msg="User Successfully created.";
		$key="Please Note your id.\n Your Id is : $ID";
		header("Location: result.php?msg=$msg&key=$key");
	}
	else{
		$msg="Failed.....";
		$key="User account not created..!!";
		header("Location: result.php?msg=$msg&key=$key");
	}
  }
?>