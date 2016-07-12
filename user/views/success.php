<html>
	<head>
      <title>User Dashboard</title>
	</head>
	<?php include("../head/head.php");?>
<body >

<?php include("../head/sidebar.php");?>
<div class="main_content">
	<?php include("../head/head_sub.php");?>
	<?php include("../controller/success.php");?>
	<h2>Your Transaction Are <?php echo $status?>.</h2>
	<h4>Your ID=<?php echo $uid?></h4>
	<h4>Subscription ID=<?php echo $sid;?></h4>

</div>
<?php include("../head/footer.php");?>