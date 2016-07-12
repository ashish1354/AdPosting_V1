<html>
	<head>
      <title>New England, United States - The Big Ads</title>
      <link rel="stylesheet" type="text/css" href="../css/page.css	">
	</head>
<body >

	<?php include("../controller/showmain.php");?>
	<div id="home_div">
		<?php include("../head/main_head.php");?>

		<?php include("../head/imageslider.php");?>
		
		<div class="wrap">
			<div class="left">
			    <?php
			       $head=$result[0]['cname'];
 					echo "<h3> $head </h3>";
			       for ($i=0; $i < count($result) ; $i++) { 
				     	$resultRow = $result[$i];

				     	$newHead=$resultRow['cname'];
				     	if ($head!=$newHead) {
				     		echo "<h3> $newHead </h3>";
				     		$head=$newHead;
				     	}
				     	echo $resultRow['name']."<br>";
				     	
				     }
			    ?>

			</div>

			<div class="right">
	  			<h3> General Merchandise (N-R)</h3>
	    			<p> Objects Of Art <br>
						Office Equipment <br>
						Optical Goods <br>
						Photo Equipment <br>
						Pinball & Arcade Games <br>
						Pools & Spas <br>
						Prayers <br>
						Real Estate & Land <br>
						Records / Tapes / CDs <br>
						Rentals <br>
						Rugs <br>
	    			</p>
	    			<h3>General Merchandise (S-Z)</h3>
	    				<p>
	    					Salon & Tanning <br>
							Seasonal Items <br>
							Seasonal Rentals <br>
							Sporting Goods <br>
							Stereo Equipment <br>
							Storage & Garages <br>
							Store & Restaurant <br>
							Tickets <br>
							Toys & Video Games <br>
							TVs & Home Theater <br>
							Vending <br>
							Wanted <br>
							Wedding & Formal <br>
							Yard Sales <br>
	    				</p>
	    			<h3>ATVs / Snowmobiles</h3>
	    				<p>
	    					ATVs <br>
							Snowmobiles <br> 
	    				</p>
	    			<h3>Utility Trailers</h3>
	    				<p>
	    					Utility Trailers <br>
	    				</p>
	    			<h3>Construction / Heavy Duty</h3>
	    				<p>
	    					Construction / Heavy Duty <br>
	    				</p>
			</div>
			<div class="center">
				<h3> General Merchandise (A-D)</h3>
	    			<p>Air Conditioners & Fans <br>
						Antiques / Collectibles <br>
						Appliances <br>
						Arts / Crafts /<br> Sewing 
						Baby Items <br>
						Books & Magazines <br> 
						Cemetery Plots <br>
						China / Glassware / Silver <br>
						Clothing <br>
						Computers <br>
						DVD & Video <br>
	    			</p>
	 		    <h3>General Merchandise (E-M)</h3>
	 		    	<p>
	 		    		Educational <br>
						Electronics <br>
						Exercise Equipment <br>
						Firearms & Accessories <br>
						Health & Medical <br>
						Hobbies <br>
						Hunting & Fishing <br>
						Jewelry & Watches <br>
						Miscellaneous <br>
						Mobile Homes <br>
						Moving <br>
	 		    	</p>
	 		    <h3>Motorcycles</h3>
	 		    	<p>
	 		    		Motorcycles <br>
	 		    	</p>
	 		    <h3>Boats</h3>
	 		    	<p>
	 		    		Boats<br>
	 		    	</p>
	 		    <h3> RVs</h3>
	 		    	<p>
	 		    		RVs
	 		    	</p>
	 		    <h3>Automotive Parts & Tools</h3>
	 		    	<p>
	 		    		Automotive Parts & Tools <br>
	 		    	</p>
			</div>
	    </div>
	    <br>
		<?php include("../head/footer.php");?>