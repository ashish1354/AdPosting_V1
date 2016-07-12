<html>
	<head>
		<title> Categories</title>
	</head>
<body>
	<?php include("../head/header.php");?>
    <?php include("../head/sidebar.php");?>
	<div class="main_content">
		<div class="main_head">
			Categories
		</div>
		<div id="tt">
			<?php include("../head/head_category.php");?>
			<p id="err"></p>
			<table class="addcategoryTB">
			   <form action="../controller/add_category.php" method="post" id="form" enctype="multipart/form-data">
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
						<td>
							Icon :
						</td>
						<td>
							<input type="file" name="dataf" id="ico"   >
						</td>
					</tr>							
					<tr>
						<td colspan="2" align="center">
							<button type="button" onclick="check()"> Add Category</button>
						</td>
					</tr>
				</form>
			</table>
		</div>	
		

	</div>
<?php include("../head/footer.php");?>