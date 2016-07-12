<html>
	<head>
      <title>User Dashboard</title>
	</head>
	<?php include("../head/head.php");?>
<body >

<?php include("../head/sidebar.php");?>
<div class="main_content">
	<?php include("../head/head_admng.php");?>
	<?php include("../controller/view_ads.php");?>
	<div id="tt">
			<?php include("../head/head_addmanagement.php");?>
			<h2 class="head_titile_small">View ADs</h2>

				<form action="view_ads.php" method="get" id="autoSubmit">
					Category
					<select name="selc" onclick="autoSubmit()">
								<option value="">----All----</option>
								<?php
									for ($i=0; $i < count($result_1) ; $i++) { 
									   	$resultRow=$result_1[$i];
									   	echo "<option value=\"".$resultRow["id"]."\"";
									   	if($cid==$resultRow["id"])
									   		echo " selected>";
									   	else
									   		echo " >";
									   	echo $resultRow["name"];
									   	echo "</option>";
									}
								?>
					</select>Subcategory
					<select name="sels" onclick="autoSubmit()">
								<option value="">----All----</option>
								<?php
									for ($i=0; $i < count($result_2) ; $i++) { 
									   	$resultRow=$result_2[$i];
									   	echo "<option value=\"".$resultRow["id"]."\"";
									   	if($sid==$resultRow["id"])
									   		echo " selected>";
									   	else
									   		echo " >";
									   	echo $resultRow["name"];
									   	echo "</option>";
									}
								?>
					</select>
					Search By Head : <input type="text" name="search" value="<?php echo $name;?>">
					<input type="submit">
				</form>			

			<table class="table_sub">
			   <th class="tb_th">ID</th>
			   <th class="tb_th">Subcategory</th>
			   <th class="tb_th">Head</th>

			   <th class="tb_th">Edit</th>
			   <th class="tb_th">Operation</th>
			  
			   <?php
				    ini_set('display_errors', 1);
					ini_set('display_startup_errors', 1);
					error_reporting(E_ALL);
				    // print_r($result);
				    
				     for ($i=0; $i < count($result) ; $i++) { 
				     	$resultRow=$result[$i];
				     	$edit  ="edit_ads.php?eid=".$resultRow['adID'];
				     	$view="http://localhost/thebigads/views/singleAD.php?id=".$resultRow['adID'];
				     	echo "<tr>";
				     	echo "<td>".$resultRow['adID']."</td>";
				     	echo "<td>".$resultRow['S_Name']."</td>";
				     	echo "<td>".$resultRow['adHead']."</td>";

				     	if ($resultRow['edt']=="TRUE") {
				     		echo "<td><a href=\"".$edit."\"> Edit</a> &nbsp &nbsp </td>";
				     	}else{
				     	 echo "<td> <img src=\"../../images/".$resultRow['edt'].".png\"> </td>";
				        }
				        echo "<td>";

				        if ($resultRow['status']!=0) {

				        echo "<a style='text-decoration: none;' href=\"../controller/AD_operation.php?disable=".$resultRow['adID']."\"><img src=\"../../images/TRUE.png\"> <button>Enabled</button></a>";
				     	echo "<a style='text-decoration: none;' href=\"".$view."\"> View AD</a>";
				        }
				        else{
				        	echo "<a style='text-decoration: none;' href=\"../controller/AD_operation.php?enable=".$resultRow['adID']."\"><img src=\"../../images/FALSE.png\"> <button>Disabled</button></a>";
				     	echo "<a style='text-decoration: none;'> Not View</a>";
				        }

				     	echo "</td></tr>";
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
