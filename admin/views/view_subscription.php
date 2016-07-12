<html>
	<head>
		<title> Subscription</title>
	</head>
<body>
	<?php include("../head/header.php");?>
    <?php include("../head/sidebar.php");?>
    <?php include("../controller/view_subscription.php");?>
	<div class="main_content">
		<div class="main_head">
			Subscription
		</div>
		<div id="tt">
			<?php include("../head/head_subscription.php");?>
			<div>
				<form action="view_subscription.php" method="get">
					Search By Keyword : <input type="text" name="search" value="<?php echo $name;?>">
					<input type="submit">
				</form>				
			</div>

			<p id="err"></p>
			<table class="view_cat_op">
			   <th class="tb_th">ID</th>
			   <th class="tb_th">Days Limit</th>
			   <th class="tb_th">No Of Ads</th>
			   <th class="tb_th">Prize In $</th>
			   <th class="tb_th">Status</th>
			   <th class="tb_th">Operation</th>
			  
			   <?php
				    ini_set('display_errors', 1);
					ini_set('display_startup_errors', 1);
					error_reporting(E_ALL);
				    // print_r($result);
				    
				     for ($i=0; $i < count($result) ; $i++) { 
				     	$resultRow=$result[$i];

				     	$edit  ="edit_subscription.php?id=".$resultRow['id'];

				     	echo "<tr>";
				     	echo "<td>".$resultRow['id']."</td>";
				     	echo "<td>".$resultRow['day']."</td>";
				     	echo "<td>".$resultRow['ads']."</td>";
				     	echo "<td>".$resultRow['prise']." $</td>";
				     	echo "<td>  <img src=\"../../images/".$resultRow['status'].".png\"> </td>";
				     	echo "<td><a href=\"".$edit."\"> Edit</a> &nbsp &nbsp</td> ";

				     	echo "</tr>";
				     }
				     	

			   ?>
			   <tr >
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

			   </tr>
			</table>
		</div>	
		

	</div>
<?php include("../head/footer.php");?>