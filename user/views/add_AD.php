<html>
	<head>
      <title>User Dashboard</title>
	</head>
	<?php include("../head/head.php");?>
<body >

<?php include("../head/sidebar.php");?>
<div class="main_content">
	<?php include("../head/head_admng.php");?>
	<?php include("../controller/add_AD.php");?>
		<div id="tt">
			<?php include("../head/head_addmanagement.php");?>
			<h2 class="head_titile_small">Post New AD</h2>
			<p id="err"></p>
			<table class="table_sub">
				<form method="post" id="form" action="add_AD.php" name="form" enctype="multipart/form-data">

					<tr>
						<td>
						Select Category :
						</td>
						<td>
							<select id="selc" onchange="findSubCategory()"   style="width: 570px">
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
									   	echo "<option value=\"".$resultRow["id"]."\">";
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
							<input type="text" id="head" name="head" onclick="clean()" onkeypress="clean()" size="70" >
						</td>
					</tr>
					
					<tr>
						<td>
							Content :
						</td>
						<td>
							<textarea id="content" rows="7" cols="70"  name="content" onclick="clean()" onkeypress="clean()"></textarea>
						</td>
					</tr>
					<tr>
						<td>
							Contact :
						</td>
						<td>
							<input type="text" name="contact" size="70" id="contact" onclick="clean()" onkeypress="clean()" >
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
