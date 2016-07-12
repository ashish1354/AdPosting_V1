<?php


include("../classes/DBoperation.php");
$show=new  DBoperation();
$result=$show->getSubCategory();
$result_1=$show->getCategoryName();

?>