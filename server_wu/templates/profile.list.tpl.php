<h3>Profile:</h3><h1 class="profileName"><?php echo $fullname; ?></h1>	

				<div id="profile">
					<div class="profileBox">
						<img src="../images/<?php echo $userimage; ?>" width="300px;" height="300x;"/>

						<ul class="profileBoxLabels">
							<li><strong>Nickname</strong></li>
							<li><strong>Status</strong></li>
							<li><strong>Gender</strong></li>
							<li><strong>Age</strong></li>
							<li><strong>Nationality</strong></li>
							
						</ul>

						<ul class="profileBoxInfo">
							<li><strong><?php echo $username; ?></strong></li>
							<li><a href="#"><?php echo $status; ?></a></li>
							<li><?php echo $gender; ?></li>
							<li><?php echo $age; ?></li>
							<li><?php echo $nationality; ?></li>
							
						</ul>

						<h3>About Me:</h3>
						<p class="profileDesc"><?php echo $about; ?></p>

						<br>
						<h3>My inventory:</h3>
						<div class="inventory">
							<img src="../images/price_chart.jpg" width="450px;" height="155x;"/>
						</div>
					
					</div>

				</div>