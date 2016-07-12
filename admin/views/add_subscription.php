<html>
	<head>
		<title> Subscription</title>
		<script type="text/javascript" src="../js/newjs.js"></script>
	</head>
<body>
	<?php include("../head/header.php");?>
    <?php include("../head/sidebar.php");?>
	<div class="main_content">
		<div class="main_head">
			Subscription
		</div>
		<div id="tt">
			<?php include("../head/head_subscription.php");?>
			<p id="err"></p>
			<table class="addcategoryTB">
			   <form action="../controller/add_subscription.php" method="post" id="form_sub" >
					<tr>
						<td>
							Days Limit :
						</td>
						<td>
							<input type="text" name="day" id="day"  onclick="clean()" onkeypress="clean()">
						</td>
					</tr>
					<tr>
						<td>
							No Of Ads :
						</td>
						<td>
							<input type="text" name="na" id="na"  onclick="clean()"  onkeypress="clean()" >
						</td>
					</tr>	
					<tr>
						<td>
							Prize In $ :
						</td>
						<td>
							<input type="text" name="pi" id="pi"  onclick="clean()" onkeypress="clean()" >
						</td>
					</tr>
					<tr>
						<td>
							Status :
						</td>
						<td>
							<input type="radio" name="status" value="TRUE" checked >Enable 
							<input type="radio" name="status" value="FALSE" >Disable
						</td>
					</tr>											
					<tr>
						<td colspan="2" align="center">
							<button type="button" onclick="add_subs()"> Add Subscription</button>
						</td>
					</tr>
				</form>
			</table>
		</div>	
		

	</div>
<?php include("../head/footer.php");?>