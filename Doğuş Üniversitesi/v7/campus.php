<?php include 'session_control.php'; ?>
<html lang="tr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Doğuş Üniversitesi - Kampüs</title>
	</head>
	<body>
		<div id="curtain" onclick="gizle('campus-alt')"></div>
		<div id="curtain-mobile" onclick="gizle_mobile('campus-alt-mobile')"></div>
		<table id="desktop-kampus" style="width:100%;height:100vh;">
			<tr>
				<td style="width:350px;height:100%;left:0px;">
					<?php include 'menu.php'; ?>
				</td>
				<td style="width:100%;">
					<iframe id="show-box" onclick="gizle('campus-alt')"></iframe>
					<iframe id="show-box-mobile" onclick="gizle_mobile('campus-alt-mobile')"></iframe>
					<div id="campus-alt">
						<table class="parts-alt">
							<tr class="parts">
								<td id="activities" onclick="showbox('campus-alt', 'campus/show_activities.php')">
									<div class="options-icon-div">
										<img src="campus/activities.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Etkinlikler</p>
									</div>
								</td>
								<td style="width:35px;"></td>
								<td id="clubs" onclick="showbox('campus-alt', 'campus/show_clubs.php')">
									<div class="options-icon-div">
										<img src="campus/clubs.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Kulüpler</p>
									</div>
								</td>
								<td style="width:35px;"></td>
								<td id="directions" onclick="showbox('campus-alt', 'campus/show_directions.php')">
									<div class="options-icon-div">
										<img src="campus/directions.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Yol Tarifi</p>
									</div>
								</td>
								<td style="width:35px;"></td>
								<td id="campus-plan" onclick="showbox('campus-alt', 'campus/show_campus_plan.php')">
									<div class="options-icon-div">
										<img src="campus/campus-plan.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Kampüs Planı</p>
									</div>
								</td>
							</tr>
							<tr class="spacer-height"></tr>
							<tr class="parts">
								<td id="food-list" onclick="showbox('campus-alt', 'campus/show_food_list.php')">
									<div class="options-icon-div">
										<img src="campus/food-list.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Yemek Listesi</p>
									</div>
								</td>
								<td style="width:35px;"></td>
								<td id="service-hours" onclick="showbox('campus-alt', 'campus/show_service_hours.php')">
									<div class="options-icon-div">
										<img src="campus/service-hours.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Servis Saatleri</p>
									</div>
								</td>
							</tr>
						</table>
					</div>
					
					<div id="campus-alt-mobile">
						<table class="parts-alt">
							<tr class="parts">
								<td id="activities" onclick="showbox_mobile('campus-alt-mobile', 'show_activities.php')">
									<div class="options-icon-div">
										<img src="campus/activities.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Etkinlikler</p>
									</div>
								</td>
								<td style="width:35px;"></td>
								<td id="clubs" onclick="showbox_mobile('campus-alt-mobile', 'show_clubs.php')">
									<div class="options-icon-div">
										<img src="campus/clubs.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Kulüpler</p>
									</div>
								</td>
							</tr>
							<tr class="spacer-height"></tr>
							<tr class="parts">
								<td id="directions" onclick="showbox_mobile('campus-alt-mobile', 'show_directions.php')">
									<div class="options-icon-div">
										<img src="campus/directions.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Yol Tarifi</p>
									</div>
								</td>
								<td style="width:35px;"></td>
								<td id="campus-plan" onclick="showbox_mobile('campus-alt-mobile', 'show_campus_plan.php')">
									<div class="options-icon-div">
										<img src="campus/campus-plan.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Kampüs Planı</p>
									</div>
								</td>
							</tr>
							<tr class="spacer-height"></tr>
							<tr class="parts">
								<td id="food-list" onclick="showbox_mobile('campus-alt-mobile', 'show_food_list.php')">
									<div class="options-icon-div">
										<img src="campus/food-list.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Yemek Listesi</p>
									</div>
								</td>
								<td style="width:35px;"></td>
								<td id="service-hours" onclick="showbox_mobile('campus-alt-mobile', 'show_service_hours.php')">
									<div class="options-icon-div">
										<img src="campus/service-hours.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Servis Saatleri</p>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>