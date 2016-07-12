<html>
	<head>
      <title>User Login</title>
      <link rel="stylesheet" type="text/css" href="../css/userlogin.css">
      <script type="text/javascript" src="../js/user.js"></script>
	</head>
<body >

	<?php include("../controller/userlogin.php");?>

		
		<div class="maincontent">
		<h2 class="head_1"> User Login</h2>
			<p id="err" class="signU_perr"><?php echo $err;?></p>
			<table class="signUp">

				<form id="form" method="post" action="index.php">
					<tr>
						<td>
							Email :
						</td>
						<td>
							<input type="text" name="email" id="email" onclick="clean()" onkeypress="clean()" >
						</td>
					</tr>
					<tr>
						<td>
							Password :
						</td>
						<td>
							<input type="password" name="pwd"  id="pwd" onclick="clean()" onkeypress="clean()" >
						</td>
					</tr>
					
					<tr>
						<td colspan="2">
							<button type="button" onclick="loginuser()">Register</button>
						</td>
					</tr>

				</form>
			</table>
		</div>



		<?php include("../head/footer.php");?>