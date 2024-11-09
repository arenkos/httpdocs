<script src="script.js?v=<?php echo time(); ?>"></script>
<?php
if($_COOKIE['theme'] == "light"){
    ?>
    <meta http-equiv="refresh" content="0; URL=../light/obs.php">
<?php
}else{
    if(strlen($_COOKIE['user'])>0){
        include '../../session_control.php';
    }else{
?>
        <meta http-equiv="refresh" content="0; URL=../../login.php">
<?php
        exit();
    }
}
?>
<html lang="tr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Doğuş Üniversitesi - OBS</title>
	</head>
	<body>
		<?php include 'header.php'; ?>

		<div id="curtain" onclick="gizle('obs-alt')"></div>
		<div id="curtain-mobile" onclick="gizle_mobile('obs-alt-mobile')"></div>
		<table id="desktop-obs" style="width:100%;height:100vh;">
			<tr>
				<td style="width:350px;height:100%;left:0px;">
					<?php include 'menu.php'; ?>
				</td>
				<td style="width:100%;">
					<iframe id="show-box" onclick="gizle('obs-alt')"></iframe>
					<iframe id="show-box-mobile" onclick="gizle_mobile('obs-alt-mobile')"></iframe>
					<div id="obs-alt">
						<table class="parts-alt">
							<tr class="parts">
								<td id="academic-calendar" onclick="showbox('obs-alt', 'obs/show_academic_calendar.php')">
									<div class="options-icon-div">
										<img src="../../obs-dark/academic-calendar.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Akademik Takvim</p>
									</div>
								</td>
								<td style="width:35px;"></td>
								<td id="course-register" onclick="showbox('obs-alt', 'obs/show_course_register.php')">
									<div class="options-icon-div">
										<img src="../../obs-dark/course-register.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Ders Seçimi</p>
									</div>
								</td>
								<td style="width:35px;"></td>
								<td id="week-program" onclick="showbox('obs-alt', 'obs/show_week_program.php')">
									<div class="options-icon-div">
										<img src="../../obs-dark/week-program.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Ders Programı</p>
									</div>
								</td>
								<td style="width:35px;"></td>
								<td id="exam-program" onclick="showbox('obs-alt', 'obs/show_exam_program.php')">
									<div class="options-icon-div">
										<img src="../../obs-dark/exam-program.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Sınav Takvimi</p>
									</div>
								</td>
							</tr>
							<tr class="spacer-height"></tr>
							<tr class="parts">
								<td id="grades-exam" onclick="showbox('obs-alt', 'obs/show_grades_exam.php')">
									<div class="options-icon-div">
										<img src="../../obs-dark/grades-exam.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Sınav Sonuçları</p>
									</div>
								</td>
								<td style="width:35px;"></td>
								<td id="advisory-info" onclick="showbox('obs-alt', 'obs/show_advisory_info.php')">
									<div class="options-icon-div">
										<img src="../../obs-dark/advisory-info.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Danışman Bilgileri</p>
									</div>
								</td>
								<td style="width:35px;"></td>
								<td id="transcript" onclick="showbox('obs-alt', 'obs/show_transcript.php')">
									<div class="options-icon-div">
										<img src="../../obs-dark/transcript.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Transkript</p>
									</div>
								</td>
								<td style="width:15px;">
								</td>
								<td id="applications" onclick="showbox('obs-alt', 'obs/show_applications.php')">
									<div class="options-icon-div">
										<img src="../../obs-dark/applications.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Başvurular</p>
									</div>
								</td>
							</tr>
							<tr class="spacer-height"></tr>
							<tr class="parts">
								<td id="user-management" onclick="showbox('obs-alt', 'obs/show_user_management.php')">
									<div class="options-icon-div">
										<img src="../../obs-dark/user-management.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Kullanıcı İşlemleri</p>
									</div>
								</td>
								<td style="width:15px;">
								</td>
								<td></td>
							</tr>
						</table>
					</div>
					
					<div id="obs-alt-mobile">
						<table class="parts-alt">
							<tr class="parts">
								<td id="academic-calendar" onclick="showbox_mobile('obs-alt-mobile', 'show_academic_calendar.php')">
									<div class="options-icon-div">
										<img src="../../obs-dark/academic-calendar.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Akademik Takvim</p>
									</div>
								</td>
								<td style="width:35px;"></td>
								<td id="course-register" onclick="showbox_mobile('obs-alt-mobile', 'show_course_register.php')">
									<div class="options-icon-div">
										<img src="../../obs-dark/course-register.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Ders Seçimi</p>
									</div>
								</td>
							</tr>
							<tr class="spacer-height"></tr>
							<tr class="parts">
								<td id="week-program" onclick="showbox_mobile('obs-alt-mobile', 'show_week_program.php')">
									<div class="options-icon-div">
										<img src="../../obs-dark/week-program.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Ders Programı</p>
									</div>
								</td>
								<td style="width:35px;"></td>
								<td id="exam-program" onclick="showbox_mobile('obs-alt-mobile', 'show_exam_program.php')">
									<div class="options-icon-div">
										<img src="../../obs-dark/exam-program.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Sınav Takvimi</p>
									</div>
								</td>
							</tr>
							<tr class="spacer-height"></tr>
							<tr class="parts">
								<td id="grades-exam" onclick="showbox_mobile('obs-alt-mobile', 'show_grades_exam.php')">
									<div class="options-icon-div">
										<img src="../../obs-dark/grades-exam.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Sınav Sonuçları</p>
									</div>
								</td>
								<td style="width:35px;"></td>
								<td id="advisory-info" onclick="showbox_mobile('obs-alt-mobile', 'show_advisory_info.php')">
									<div class="options-icon-div">
										<img src="../../obs-dark/advisory-info.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Danışman Bilgileri</p>
									</div>
								</td>
							</tr>
							<tr class="spacer-height"></tr>
							<tr class="parts">
								<td id="transcript" onclick="showbox_mobile('obs-alt-mobile', 'show_transcript.php')">
									<div class="options-icon-div">
										<img src="../../obs-dark/transcript.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Transkript</p>
									</div>
								</td>
								<td style="width:15px;">
								</td>
								<td id="applications" onclick="showbox_mobile('obs-alt-mobile', 'show_applications.php')">
									<div class="options-icon-div">
										<img src="../../obs-dark/applications.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Başvurular</p>
									</div>
								</td>
							</tr>
							<tr class="spacer-height"></tr>
							<tr class="parts" onclick="showbox_mobile('obs-alt-mobile', 'show_user_management.php')">
								<td id="user-management">
									<div class="options-icon-div">
										<img src="../../obs-dark/user-management.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Kullanıcı İşlemleri</p>
									</div>
								</td>
								<td></td>
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
