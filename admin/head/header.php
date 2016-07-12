		<link rel="stylesheet" type="text/css" href="../css/dashboard.css">
		<script type="text/javascript" src="../js/dashboard.js"></script>
<div>
	<h1> Dashboard</h1>
</div>

<?php
  session_start();
 if($_SESSION["aid"]==""){
       header("Location: index.php"); 
  }

?>

