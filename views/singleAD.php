<html>
	<head>
      <title>Search At The Big Ads</title>
      <link rel="stylesheet" type="text/css" href="../css/page.css	">
	</head>
<body >

	<?php include("../controller/singleAD.php");?>
	<div id="home_div">
				<?php include("../head/main_head.php");?>
	
		<hr>
		<text class="type"><?php echo $myad[0]["C_NAME"];?></text>
		<hr>
		<?php if ($myad[0]["C_NAME"]!=""):?>
		<div class="wrap" >
			<div class="sleft">
			<img  class="sgADIMG" src="../images/ad/<?php echo $myad[0]["ID"];?>.jpg" >
			</div>
			<div class="sright">
			<text class="sgle" ><?php echo $myad[0]["HEAD"];?></text>

			<p>
			<?php echo $myad[0]["CONTENT"];?>
			</p>

			<p>Contact :</p>
			<text><?php echo $myad[0]["CONTACT"];?></text>
			<br><br>
			<hr>
			</div>

		</div>
		<?php endif ?>

		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<?php include("../head/footer.php");?>