<html>
	<head>
      <title>New England, United States - The Big Ads</title>
      <link rel="stylesheet" type="text/css" href="../css/page.css	">
	</head>
<body >

	<?php include("../controller/showmain.php");?> <!-- //Default Controller -->

	<?php include("../controller/result.php");?>
	<div id="home_div">
		<?php include("../head/main_head.php");?>
		
		<div class="maincontent">
		<p id="err"></p>
			<table class="signUp">
				
					<h2><?php echo $msg;?></h2>
					<p><?php echo $key;?></p>
			</table>
		</div>



		<?php include("../head/footer.php");?>