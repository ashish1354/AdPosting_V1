<html>
	<head>
		<title>Add Sub Categories</title>
	</head>
<body>
	<?php include("../head/header.php");?>
    <?php include("../head/sidebar.php");?>
    <?php include("../controller/add_subcategory.php");?>
	<div class="main_content">
		<div class="main_head">
			Categories
		</div>
		<div id="tt">
			<?php include("../head/head_category.php");?>
			<p id="err"></p>
			<table class="addcategoryTB">
			   <form action="../controller/add_subcategory.php" method="post" id="form" enctype="multipart/form-data">
					<tr>
						<td>
							Select Category :
						</td>
						<td>
							<select id="selc" name="selc">
							<?php
								for ($i=0; $i < count($result) ; $i++) { 
								   	$resultRow=$result[$i];
								   	echo "<option value=\"".$resultRow["id"]."\"";
								   	if($select==$resultRow["id"])
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
							Name :
						</td>
						<td>
							<input type="text" name="name" id="name"  onclick="clean()" onkeypress="clean()">
						</td>
					</tr>
					<tr>
						<td>
							Slug :
						</td>
						<td>
							<input type="text" name="slug" id="slug"  onclick="clean()" onkeypress="clean()" >
						</td>
					</tr>	
					<tr>
						<td>
							Keywords :
						</td>
						<td>
							<input type="text" name="key" id="key"  onclick="clean()" onkeypress="clean()" >
						</td>
					</tr>						
					<tr>
						<td colspan="2" align="center">
							<button type="button" onclick="checkSubCategory()"> Add Category</button>
						</td>
					</tr>
				</form>
			</table>
		</div>	
		

	</div>
<?php include("../head/footer.php");?>