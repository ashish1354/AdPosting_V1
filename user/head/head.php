<?php
  session_start();
  if($_SESSION["email"]==""){
       header("Location: index.php"); 
  }
?>	

	  <link rel="stylesheet" type="text/css" href="../css/user.css">
      <script type="text/javascript" src="../js/user.js"></script>

<div id="mainhead" class="mainhead">
	<h1> Dashboard <?php //echo $_SESSION["email"];?></h1>
</div>
