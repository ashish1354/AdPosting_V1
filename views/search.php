<html>
	<head>
      <title>Search At The Big Ads</title>
      <link rel="stylesheet" type="text/css" href="../css/page.css	">
	</head>
<body >

	<?php include("../controller/search.php");?>
	<div id="home_div">
				<?php include("../head/main_head.php");?>

		<hr>
		<div>
			<?php
				for ($i=0; $i < count($result) ; $i++) { 
					$resultRow=$result[$i]; ?>
			<div class="headSh">

				
				<a href="singleAD.php?id=<?php echo $resultRow["adID"];?>"><text class="content"> 
				<?php echo $resultRow["adHead"];?>
				</text>
				<img  src="../images/ad/<?php echo $resultRow["adID"];?>.jpg"  class="smallimg">
				</a> 
				<p class="para">
				<?php echo $resultRow["content"];?>
				</p>
				<p class="para">Contact :
				<?php echo $resultRow["contact"];?>
				</p>
			</div>
			<?php  }
			?>
		</div>
		
	  		<?php include("../head/footer.php");?>