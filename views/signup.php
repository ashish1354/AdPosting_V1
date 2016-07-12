<html>
	<head>
      <title>New England, United States - The Big Ads</title>
      <link rel="stylesheet" type="text/css" href="../css/page.css	">
	</head>
<body >

	<?php include("../controller/showmain.php");?> <!-- //Default Controller -->

	<?php include("../controller/signup.php");?>
	<div id="home_div">
		<?php include("../head/main_head.php");?>
		
		<div class="maincontent">
		<p id="err"></p>
			<table class="signUp">
				<form id="form" method="post" action="signup.php">
					<tr>
						<td>
							Name :
						</td>
						<td>
							<input type="text" name="name" id="name" onclick="clean()" onkeypress="clean()">
						</td>
					</tr>
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
							<input type="password" name="pwd"  id="pwd"  onclick="check()" onkeyup="check()" >
						</td>
					</tr>
					<tr>
						<td>
							Retype Password :
						</td>
						<td>
							<input type="password" name="rpwd" id="rpwd"  onclick="check()" onkeyup="check()">
						</td>
					</tr>
					
					<tr>
						<td>
							Sum of ( <?php echo $v1;?> + <?php echo $v2;?> ):
						</td>
						<td>
							<input type="text" id="seq" onclick="<?php echo "seqCheck($v1,$v2)"?>" onkeyup="<?php echo "seqCheck($v1,$v2)"?>" >
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<button type="button" onclick="<?php echo "registerUser($v1,$v2)"?>">Register</button>
						</td>
					</tr>

				</form>
			</table>
		</div>



		<?php include("../head/footer.php");?>