<h3>Profile:</h3><h1 class="profileName"><?php echo $fullName; ?></h1>	

				<div id="profile">
					<div class="profileBox">
						<img src="images/<?php echo $userimage; ?>" width="300px;" height="300x;"/>

						<!-- <ul class="profileBoxLabels"> -->
						<ul>
							<li><strong>Nickname</strong>: <?php echo $userName; ?></li>
							<li><strong>Status</strong>: <?php echo $status; ?></li>
							<li><strong>Gender</strong>: <?php echo $gender; ?></li>
							<li><strong>Age</strong>: <?php echo $age; ?></li>
							<li><strong>Nationality</strong>: <?php echo $nationality; ?></li>
							<li><button onclick="javascript:">Change password</button></li>
							
						</ul>

						<!-- <ul class="profileBoxInfo">
							<li><strong><?php echo $userName; ?></strong></li>
							<li><?php echo $status; ?></li>
							<li><?php echo $gender; ?></li>
							<li><?php echo $age; ?></li>
							<li><?php echo $nationality; ?></li>
							
						</ul> -->
						<br />
						<h3>About Me:</h3>
						<p class="profileDesc"><?php echo $about; ?></p>

						<br>
						<h3>My inventory:</h3>
						<div class="inventory">
							<img src="images/price_chart.jpg" width="450px;" height="155x;"/>
						</div>
					
					</div>

				</div>