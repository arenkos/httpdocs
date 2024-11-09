<?php include 'session_control.php'; ?>
<script src="script.js?v=<?php echo time(); ?>"></script>
<div id="menu-button" onclick="toggleMenu()"><img id="menu-img" src="menu.png"></div>
<div id="menu-button-mobile" onclick="toggleMenu_mobile()"><img id="menu-img-mobile" src="menu.png"></div>

<div id="menu">	
	<table style="height:100%;width:100%;">
		<tr class="top-mobile">
			<td>
				<?php include 'top-mobile.php'; ?>
			</td>
		</tr>		
		<tr class="menu-parts">
			<td style="text-align:center;margin:0 auto;width:100%;height:auto;max-height:100%;">
				<table style="text-align:center;margin:0 auto;width:80%;height:auto;max-height:100%;">
					<tr id="menu-obs">
						<td style="width:30%;height:100%;">
							<a href="obs.php"><div class="menu-icon-div">
								<img src="obs.png?v=<?php echo time(); ?>" class="menu-icon">
							</div></a>
						</td>
						<td style="width:5%;"></td>
						<td style="width:60%;height:100%;">
							<a href="obs.php"><div>
								<p class="menu-title-parts">OBS</p>
							</div></a>
						</td>
					</tr>
					<tr class="spacer-height-menu"></tr>
					<tr id="menu-online">
						<td style="width:30%;height:100%;">
							<a href="online.php"><div class="menu-icon-div">
								<img src="online.png?v=<?php echo time(); ?>" class="menu-icon">
							</div></a>
						</td>
						<td style="width:5%;"></td>
						<td style="width:60%;height:100%;">
							<a href="online.php"><div>
								<p class="menu-title-parts">DOU Online</p>
							</div></a>
						</td>
					</tr>
					<tr class="spacer-height-menu"></tr>
					<tr id="menu-pos">
						<td style="width:30%;height:100%;">
							<a href="pos.php"><div class="menu-icon-div">
								<img src="pos.png?v=<?php echo time(); ?>" class="menu-icon">
							</div></a>
						</td>
						<td style="width:5%;"></td>
						<td style="width:60%;height:100%;">
							<a href="pos.php"><div>
								<p class="menu-title-parts">Ödemeler</p>
							</div></a>
						</td>
					</tr>
					<tr class="spacer-height-menu"></tr>
					<tr id="menu-mail">
						<td style="width:30%;height:100%;">
							<a href="mail.php"><div class="menu-icon-div">
								<img src="mail.png?v=<?php echo time(); ?>" class="menu-icon">
							</div></a>
						</td>
						<td style="width:5%;"></td>
						<td style="width:60%;height:100%;">
							<a href="mail.php"><div>
								<p class="menu-title-parts">Mail ve Notlar</p>
							</div></a>
						</td>
					</tr>
					<tr class="spacer-height-menu"></tr>
					<tr id="menu-announcements">
						<td style="width:30%;height:100%;">
							<a href="announcements.php"><div class="menu-icon-div">
								<img src="announcements.png?v=<?php echo time(); ?>" class="menu-icon">
							</div></a>
						</td>
						<td style="width:5%;"></td>
						<td style="width:60%;height:100%;">
							<a href="announcements.php"><div>
								<p class="menu-title-parts">Duyurular</p>
							</div></a>
						</td>
					</tr>
					<tr class="spacer-height-menu"></tr>
					<tr id="menu-campus">
						<td style="width:30%;height:100%;">
							<a href="campus.php"><div class="menu-icon-div">
								<img src="campus.png?v=<?php echo time(); ?>" class="menu-icon">
							</div></a>
						</td>
						<td style="width:5%;"></td>
						<td style="width:60%;height:100%;">
							<a href="campus.php"><div>
								<p class="menu-title-parts">Kampüs</p>
							</div></a>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>	
</div>

<!-- <?php /* ?>
<div id="menu-mobile">
	<table style="height:100%;width:100%;">
		<tr class="top-mobile">
			<td>
				<?php include 'top-mobile.php'; ?>
			</td>
		</tr>		
		<tr class="menu-parts">
			<td style="text-align:center;margin:0 auto;width:100%;height:100%;">
				<table style="text-align:center;margin:0 auto;width:80%;height:100%;">
					<tr id="menu-obs-mobile">
						<td>
							<div class="menu-icon-div">
								<img src="obs.png?v=<?php echo time(); ?>" class="menu-icon">
							</div>
						</td>
						<td style="width:5%;"></td>
						<td>
							<div>
								<p class="menu-title-parts">OBS</p>
							</div>
						</td>
					</tr>
					<tr id="menu-online-mobile">
						<td>
							<div class="menu-icon-div">
								<img src="online.png?v=<?php echo time(); ?>" class="menu-icon">
							</div>
						</td>
						<td style="width:5%;"></td>
						<td>
							<div>
								<p class="menu-title-parts">DOU Online</p>
							</div>
						</td>
					</tr>
					<tr id="menu-pos-mobile">
						<td>
							<div class="menu-icon-div">
								<img src="pos.png?v=<?php echo time(); ?>" class="menu-icon">
							</div>
						</td>
						<td style="width:5%;"></td>
						<td>
							<div>
								<p class="menu-title-parts">Ödemeler</p>
							</div>
						</td>
					</tr>
					<tr id="menu-mail-mobile">
						<td>
							<div class="menu-icon-div">
								<img src="mail.png?v=<?php echo time(); ?>" class="menu-icon">
							</div>
						</td>
						<td style="width:5%;"></td>
						<td>
							<div>
								<p class="menu-title-parts">Mail ve Notlar</p>
							</div>
						</td>
					</tr>
					<tr id="menu-announcements-mobile">
						<td>
							<div class="menu-icon-div">
								<img src="announcements.png?v=<?php echo time(); ?>" class="menu-icon">
							</div>
						</td>
						<td style="width:5%;"></td>
						<td>
							<div>
								<p class="menu-title-parts">Duyurular</p>
							</div>
						</td>
					</tr>
					<tr id="menu-campus-mobile">
						<td>
							<div class="menu-icon-div">
								<img src="campus.png?v=<?php echo time(); ?>" class="menu-icon">
							</div>
						</td>
						<td style="width:5%;"></td>
						<td>
							<div>
								<p class="menu-title-parts">Kampüs</p>
							</div>
						</td>
					</tr>
				</table><?php */ ?>
			</td>
		</tr>
	</table>
</div> -->
