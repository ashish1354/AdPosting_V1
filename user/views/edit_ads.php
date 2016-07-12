<html>
	<head>
      <title>User Dashboard</title>
	</head>
	<?php include("../head/head.php");?>
<body >

<?php include("../head/sidebar.php");?>
<div class="main_content">
	<?php include("../head/head_admng.php");?>
	<?php include("../controller/edit_ads.php");?>
		<div id="tt">
			<?php include("../head/head_addmanagement.php");?>
			<h2 class="head_titile_small">Post New AD</h2>
			<p id="err"></p>
			<table class="table_sub">
				<form method="post" id="form" action="edit_ads.php" name="form" enctype="multipart/form-data">
				   <input type="hidden" id="eid" name="eid" value="<?php echo $eid;?>">
					<tr>
						<td>
						Select Category :
						</td>
						<td>
							<select id="selc" onclick="<?php echo "findSubCategory_edit($eid)";?>" style="width: 570px">
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
							</select>
						</td>
					</tr>
					<tr>
						<td>
						Select SubCategory :
						</td>
						<td>
							<select name="sid"  style="width: 570px">
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
						</td>
					</tr>
					<tr>
						<td>
							Head :
						</td>
						<td>
							<input type="text" id="head" value="<?php echo $head;?>" name="head" onclick="clean()" onkeypress="clean()" size="70" >
						</td>
					</tr>
					
					<tr>
						<td>
							Content :
						</td>
						<td>
							<textarea id="content" rows="7" cols="70" value="" name="content" onclick="clean()" onkeypress="clean()"><?php echo $content;?></textarea>
						</td>
					</tr>
					<tr>
						<td>
							Contact :
						</td>
						<td>
							<input type="text" name="contact" value="<?php echo $contact;?>"  size="70" id="contact" onclick="clean()" onkeypress="clean()" >
						</td>
					</tr>
					<tr>
						<td>
							Select Image:
						</td>
						<td>
							<input type="file" name="img" id="img" >
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<button type="button" onclick="ADDad()" >Submit</button>
						</td>
					</tr>
				</form>
			</table>
		</div>
</div>
<?php include("../head/footer.php");?>
