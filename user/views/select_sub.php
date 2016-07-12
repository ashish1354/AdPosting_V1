<html>
	<head>
      <title>User Dashboard</title>
	</head>
	<?php include("../head/head.php");?>
<body >

<?php include("../head/sidebar.php");?>
<div class="main_content">
	<?php include("../head/head_sub.php");?>
	<?php include("../controller/select_sub.php");?>
	<table class="table_sub">
		<th class="tbl_th" >Id</th>
		<th class="tbl_th">Days</th>
		<th class="tbl_th">Ad Limit</th>
		<th class="tbl_th">Cost</th>
		<th class="tbl_th">Select</th>

			<?php
				    
			    for ($i=0; $i < count($result) ; $i++) { 
			     	$resultRow=$result[$i];
				     	echo "<tr>";
				     	echo "<td>".$resultRow['id']."</td>";
				     	echo "<td>".$resultRow['day']."</td>";
				     	echo "<td>".$resultRow['ads']."</td>";
				     	echo "<td>".$resultRow['prise']." $</td>";
				     	echo "<td>";
				     	$id=$resultRow['id'];
				    	$yourID=$_SESSION["id"];
			     		$amount=$resultRow['prise'];
			     		
				    ?>
				        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" name="frmPayPal1">
					    <input type="hidden" name="business" value="ashish.d-facilitator@cisinlabs.com">
					    <input type="hidden" name="cmd" value="_xclick">
					    <input type="hidden" name="item_name" value="<?php echo $id;?>">
					    <input type="hidden" name="item_number" value="<?php echo $yourID;?>">
					    <input type="hidden" name="credits" value="510">
					    <input type="hidden" name="userid" value="1">
					    <input type="hidden" name="amount" value="<?php echo $amount;?>">
					    
					    <input type="hidden" name="no_shipping" value="1">
					    <input type="hidden" name="currency_code" value="USD">
					    <input type="hidden" name="handling" value="0">
					    <input type="hidden" name="return" value="http://localhost/thebigads/user/views/success.php">
					    <input type='hidden' name="notify_url" value="http://localhost/thebigads/controller/notifyer.php">
					    <input type='hidden' name="cancel_return" value="http://localhost/thebigads/controller/notifyer.php">
					    <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
					    </form> 

			<?php
				echo "</td></tr>";
				}
			?>
			    <tr>
			   	<td></td><td></td><td></td>
			   	<td>
				   	<?php if ($PpNo==TRUE && $PpNo!=0):?>
				   	<a <?php echo "href=?PpNo=$PpNo&search=$name";?> ><text>&#8606 Previous Page <?php echo $PpNo?></text></a>
				   	 <?php endif ?>
				   	</td>
			   	<td>
			   		<?php if ($NpNo==TRUE):?>
				   	<a <?php echo "href=?NpNo=$NpNo&search=$name";?> > <text>	Next  Page &#8608   <?php echo $NpNo?></text></a>
				    <?php endif ?>
			   	</td>
			   	</tr>
	</table>




</div>
<?php include("../head/footer.php");?>