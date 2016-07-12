<html>
	<head>
		<title> AD Management</title>	
	</head>
<body>
	<?php include("../head/header.php");?>
    <?php include("../head/sidebar.php");?>
    <?php include("../controller/add_AD.php");?>
	<div class="main_content">
		<div class="main_head">
			Add Management 
		</div>
		<div id="tt">
			<?php include("../head/head_addmanagement.php");?>
			<h2> New AD</h2>
			<p id="err"></p>
			<table class="newAD">
				<form method="post" id="form" action="ADmanagement.php" name="form" enctype="multipart/form-data">

					<tr>
						<td>
						Select Category :
						</td>
						<td>
							<select id="selc" onchange="findSubCategory()">
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
							<select name="sid">
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
							<input type="text" id="head" name="head" onclick="clean()" onkeypress="clean()" >
						</td>
					</tr>
					
					<tr>
						<td>
							Content :
						</td>
						<td>
							<textarea id="content" rows="5" cols="20" name="content" onclick="clean()" onkeypress="clean()"></textarea>
						</td>
					</tr>
					<tr>
						<td>
							Contact :
						</td>
						<td>
							<input type="text" name="contact" id="contact" onclick="clean()" onkeypress="clean()" >
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