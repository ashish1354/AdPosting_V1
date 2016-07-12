<html>
	<head>
		<title> View ADs</title>	
	</head>
<body>
	<?php include("../head/header.php");?>
    <?php include("../head/sidebar.php");?>
    <?php include("../controller/view_ad.php");?>
	<div class="main_content">
		<div class="main_head">
			Add Management 
		</div>
		<div id="tt">
			<?php include("../head/head_addmanagement.php");?>
			<div>
				<form action="view_ad.php" method="get" id="autoSubmit">
					Category
					<select name="selc" onchange="autoSubmit()">
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
					<select name="sels" onchange="autoSubmit()">
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
					Search By Name : <input type="text" name="search" value="<?php echo $name;?>">
					<input type="submit">
				</form>				
			</div>

			<p id="err"></p>
			<table class="view_cat_op">
			   <th class="tb_th">Category</th>
			   <th class="tb_th">Subcategory</th>
			   <th class="tb_th">Head</th>
			   <th class="tb_th">Content</th>
			   <th class="tb_th">Contect</th>
			   <th class="tb_th">Operation</th>
			   
			   <?php
				    ini_set('display_errors', 1);
					ini_set('display_startup_errors', 1);
					error_reporting(E_ALL);
				    // print_r($result);
				    
				     for ($i=0; $i < count($result) ; $i++) { 
				     	$resultRow=$result[$i];
				     	$delete="../controller/delete_category.php?id=".$resultRow['adID']."&sendto=".$_SERVER["PHP_SELF"]."?".$_SERVER['QUERY_STRING'];
				     	$edit  ="edit_category.php?id=".$resultRow['adID'];
				     	echo "<tr>";
				     	echo "<td>".$resultRow['C_Name']."</td>";
				     	echo "<td>".$resultRow['S_Name']."</td>";
				     	echo "<td>".$resultRow['adHead']."</td>";
				     	echo "<td>".substr($resultRow['content'], 0, 15)."...</td>";
				     	echo "<td>".$resultRow['contact']."</td>";
				     	echo "<td><a href=\"".$edit."\"> Edit</a> &nbsp &nbsp";
						echo "<a href=\"".$delete."\"> Delete</a>&nbsp &nbsp </td> ";
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