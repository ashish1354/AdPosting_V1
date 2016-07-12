<div class="wrap">
			<script type="text/javascript" src="../js/user.js"></script>
			<div class="tleft">
				<a href="../views/main.php"><img src="../images/top_left_art.jpg"></a>
			</div>
			<div class="tright">
				  <div id="iright_1" class="mid_center">
				    <img src="../images/main_btns_01.jpg">
				  </div>
				  <div id="iright_2" class="mid_center">
				    <img src="../images/main_btns_02.jpg">
				  </div>
				  <div id="iright_3" class="mid_center">
				    <img src="../images/main_btns_03.gif">
				  </div>
				  <div id="iright_4" class="mid_center">
				    <img src="../images/first_time.gif">
				  </div>
			</div>
			<div class="tcenter">
					<br><br>
					<h7 id="clr_content"> Community Classifieds for <b>New England!</b></h7>
					<h5>animals, cars, motorcycles, boats, building materials and more...</h5>
					<h5><a href="signup.php">Sign UP here...</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					 <a href="../user/views/"> Login</a></h5>
				<form action="search.php" class="small_text">
										
		   			search <input type="text" name="search">
		   			in
		   			<select name="cid" class="small_text" >
							<option value="">----All----</option>
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
						<input type="submit">
					</select>
		   				
		   			
		   		</form>
		   	<!--	<img src="images/home_13.jpg"> -->
			</div>
		</div>