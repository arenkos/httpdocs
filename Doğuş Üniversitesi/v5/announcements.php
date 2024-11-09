<?php include 'session_control.php'; ?>
<html lang="tr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Doğuş Üniversitesi - Duyurular</title>
	</head>
	<body>
		<div id="curtain" onclick="gizle()"></div>
		<div id="curtain-mobile" onclick="gizle_mobile()"></div>
		<table style="width:100%;height:100%;">
			<tr>
				<td style="width:350px;height:100%;left:0px;">
					<?php include 'menu.php'; ?>
				</td>
				<td style="width:100%;">
					<iframe id="show-box" onclick="gizle()"></iframe>
					<iframe id="show-box-mobile" onclick="gizle_mobile()"></iframe>
					
					<div class="options-alt">
						<table class="parts-alt">
							<tr class="parts">
								<td id="academic-calendar" onclick="showbox('show_academic_calendar.php')">
									<div class="options-icon-div">
										<img src="obs.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Akademik Takvim</p>
									</div>
								</td>
								<td style="width:15px;"></td>
								<td id="course-register" onclick="showbox('show_course_register.php')">
									<div class="options-icon-div">
										<img src="online.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Ders Seçimi</p>
									</div>
								</td>
								<td id="week-program" onclick="showbox('show_week_program.php')">
									<div class="options-icon-div">
										<img src="pos.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Ders Programı</p>
									</div>
								</td>
								<td style="width:15px;"></td>
								<td id="exam-program" onclick="showbox('show_exam_program.php')">
									<div class="options-icon-div">
										<img src="mail.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Sınav Takvimi</p>
									</div>
								</td>
							</tr>
							<tr class="parts">
								<td id="grades-exam" onclick="showbox('show_grades_exam.php')">
									<div class="options-icon-div">
										<img src="announcements.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Sınav Sonuçları</p>
									</div>
								</td>
								<td style="width:15px;"></td>
								<td id="advisory-info" onclick="showbox('show_advisory_info.php')">
									<div class="options-icon-div">
										<img src="campus.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Danışman Bilgileri</p>
									</div>
								</td>
								<td id="transcript" onclick="showbox('show_transcript.php')">
									<div class="options-icon-div">
										<img src="announcements.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Transkript</p>
									</div>
								</td>
								<td style="width:15px;">
								</td>
								<td id="applications" onclick="showbox('show_applications.php')">
									<div class="options-icon-div">
										<img src="campus.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Başvurular</p>
									</div>
								</td>
							</tr>
							<tr class="parts" onclick="showbox('show_user_management.php')">
								<td id="user-management">
									<div class="options-icon-div">
										<img src="announcements.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Kullanıcı işlemleri</p>
									</div>
								</td>
								<td style="width:15px;">
								</td>
								<td></td>
							</tr>
						</table>
					</div>
					
					<div class="options-alt-mobile">
						<table class="parts-alt">
							<tr class="parts">
								<td id="academic-calendar" onclick="showbox_mobile('show_academic_calendar.php')">
									<div class="options-icon-div">
										<img src="obs.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Akademik Takvim</p>
									</div>
								</td>
								<td style="width:15px;"></td>
								<td id="course-register" onclick="showbox_mobile('show_course_register.php')">
									<div class="options-icon-div">
										<img src="online.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Ders Seçimi</p>
									</div>
								</td>
							</tr>
							<tr class="parts">
								<td id="week-program" onclick="showbox_mobile('show_week_program.php')">
									<div class="options-icon-div">
										<img src="pos.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Ders Programı</p>
									</div>
								</td>
								<td style="width:15px;"></td>
								<td id="exam-program" onclick="showbox_mobile('show_exam_program.php')">
									<div class="options-icon-div">
										<img src="mail.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Sınav Takvimi</p>
									</div>
								</td>
							</tr>
							<tr class="parts">
								<td id="grades-exam" onclick="showbox_mobile('show_grades_exam.php')">
									<div class="options-icon-div">
										<img src="announcements.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Sınav Sonuçları</p>
									</div>
								</td>
								<td style="width:15px;"></td>
								<td id="advisory-info" onclick="showbox_mobile('show_advisory_info.php')">
									<div class="options-icon-div">
										<img src="campus.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Danışman Bilgileri</p>
									</div>
								</td>
							</tr>
							<tr class="parts">
								<td id="transcript" onclick="showbox_mobile('show_transcript.php')">
									<div class="options-icon-div">
										<img src="announcements.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Transkript</p>
									</div>
								</td>
								<td style="width:15px;">
								</td>
								<td id="applications" onclick="showbox_mobile('show_applications.php')">
									<div class="options-icon-div">
										<img src="campus.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Başvurular</p>
									</div>
								</td>
							</tr>
							<tr class="parts" onclick="showbox_mobile('show_user_management.php')">
								<td id="user-management">
									<div class="options-icon-div">
										<img src="announcements.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Kullanıcı işlemleri</p>
									</div>
								</td>
								<td style="width:15px;">
								</td>
								<td></td>
							</tr>
						</table>
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>