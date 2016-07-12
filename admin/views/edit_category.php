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
			<?php include("../controller/edit_category.php");?>
			<p id="err"></p>
			<table class="addcategoryTB">
			   <form action="../controller/edit_category.php" method="post" id="form" enctype="multipart/form-data">
					<input type="hidden" name="id" id="id" value="<?php echo $id;?>">
					<tr>
						<td>
							Name :
						</td>
						<td>
							<input type="text" name="name" id="name"  onclick="clean()" value="<?php echo $name;?>" onkeypress="clean()">
						</td>
					</tr>
					<tr>
						<td>
							Slug :
						</td>
						<td>
							<input type="text" name="slug" id="slug"  onclick="clean()"  value="<?php echo $slug;?>"onkeypress="clean()" >
						</td>
					</tr>	
					<tr>
						<td>
							Keywords :
						</td>
						<td>
							<input type="text" name="key" id="key"  onclick="clean()"  value="<?php echo $key;?>" onkeypress="clean()" >
						</td>
					</tr>
					<tr >
						<td>
							Icon :
						</td>
						<td>	
							<input type="checkbox" name="chbx" id="chbx" checked onclick="svalue()" >
							Choose Previous

						</td>
					</tr>	
					<div id="imgsel" class="imgsel">
						<tr >
							<td>
								
							</td>
							<td>	
								
								<input type="file" name="dataf" id="ico"  hidden>	
							</td>
						</tr>	
					</div>
					<tr>
						<td colspan="2" align="center">
							<button type="button" onclick="check_2()"> Update Category</button>
						</td>
					</tr>
				</form>
			</table>
		</div>	
		

	</div>
<?php include("../head/footer.php");?>