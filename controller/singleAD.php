<?php


include("../classes/DBoperation.php");
$show=new  DBoperation();

$result_1=$show->getCategoryName();
$myad=$show->getADByID($_GET["id"]);


?>