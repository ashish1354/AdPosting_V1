<html>
	<head>
      <title>User Dashboard</title>
	</head>
	<?php include("../head/head.php");?>
<body >

<?php include("../head/sidebar.php");?>
<div class="main_content">
	<?php include("../head/head_admng.php");?>
	<?php include("../controller/ADmanagement.php");?>
	<h3 class="dashboard_err"><?php echo $err;?></h3>
	
	<div class="addDashboard">
		<h3> Your Last date of subscription is = <?php echo $l_date;?></h3>
		<h4> Total Number of AD = <?php echo $tt_add;?></h4>
		<h4> Total Published AD = <?php echo $pub_add;?></h4>
		<h5> Remaining AD= <?php echo $tt_add-$pub_add;?></h5>
		<?php if (($tt_add-$pub_add)==0) :?>
			You can not Create or Publish new AD change your subscription pack.<a href="../views/select_sub.php">Click here..</a><br>
		<?php endif?>
		<?php if (!empty($tt)) :?>
			Your subscription pack are finished. Choose your subscription pack.<a href="../views/select_sub.php">Click here..</a>
		<?php endif?>
	</div>

</div>
<?php include("../head/footer.php");?>
