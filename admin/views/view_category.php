<html>
	<head>
		<title> Categories</title>
	</head>
<body>
	<?php include("../head/header.php");?>
    <?php include("../head/sidebar.php");?>
    <?php include("../controller/view_category.php");?>
	<div class="main_content">
		<div class="main_head">
			Categories
		</div>
		<div id="tt">
			<?php include("../head/head_category.php");?>
			<div>
				<form action="view_category.php" method="get">
					Search By Name : <input type="text" name="search" value="<?php echo $name;?>">
					<input type="submit">
				</form>				
			</div>

			<p id="err"></p>
			<table class="view_cat_op">
			   <th class="tb_th">ID</th>
			   <th class="tb_th">Name</th>
			   <th class="tb_th">Slug</th>
			   <th class="tb_th">Keyword</th>
			   <th class="tb_th">Operation</th>
			   
			   <?php
				    ini_set('display_errors', 1);
					ini_set('display_startup_errors', 1);
					error_reporting(E_ALL);
				    // print_r($result);
				    
				     for ($i=0; $i < count($result) ; $i++) { 
				     	$resultRow=$result[$i];
				     	$delete="../controller/delete_category.php?id=".$resultRow['id']."&sendto=".$_SERVER["PHP_SELF"]."?".$_SERVER['QUERY_STRING'];
				     	$edit  ="edit_category.php?id=".$resultRow['id'];
				     	$suba="add_subcategory.php?id=".$resultRow['id'];;
				     	echo "<tr>";
				     	echo "<td>".$resultRow['id']."</td>";
				     	echo "<td>".$resultRow['name']."</td>";
				     	echo "<td>".$resultRow['slug']."</td>";
				     	echo "<td>".$resultRow['keyy']."</td>";
				     	echo "<td><a href=\"".$edit."\"> Edit</a> &nbsp &nbsp";
						echo "<a href=\"".$delete."\"> Delete</a>&nbsp &nbsp| ";
						echo "<a href=\"".$suba."\"> Add Subcategory</a>&nbsp &nbsp </td>";
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