<?php include 'session_control.php'; ?>
<html lang="tr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Doğuş Üniversitesi - Duyurular</title>
	</head>
	<body>
		<div id="curtain" onclick="gizle('announcements-div')"></div>
		<div id="curtain-mobile" onclick="gizle_mobile('announcements-div-mobile')"></div>
		<table style="width:100%;height:100vh;">
			<tr>
				<td style="width:350px;height:100%;left:0px;">
					<?php include 'menu.php'; ?>
				</td>
				<td style="width:100%;">
					<iframe id="show-box" onclick="gizle('announcements-div')"></iframe>
					<iframe id="show-box-mobile" onclick="gizle_mobile('announcements-div-mobile')"></iframe>
										
					<div id="announcements-div">
						<table id="announcements-table">
							<tr class="announcements-row">
								<td>
									<div>
										<p class="title-parts">Duyurular</p>
									</div>
								</td>
							</tr>
							<tr class="announcements-row" style="background-color:#DDCC33;width:100%;height:1px;">
								<td>
								</td>
							</tr>
							<tr class="announcements-row">
								<td>
									<div>
										<p class="title-parts">Kurumlararası Yatay Geçiş Başvuruları başladı</p>
									</div>
								</td>
							</tr>
							<tr class="announcements-row" style="background-color:#DDCC33;width:100%;height:1px;">
								<td>
								</td>
							</tr>
							<tr class="announcements-row">
								<td>
									<div>
										<p class="title-parts">Duyurular</p>
									</div>
								</td>
							</tr>
							</tr>
							
							<?php
							/*
							while(1){ ?>
								<tr class="announcements-row">
									<td class="course-code">
										<a href="course_info.php?code=<?php echo $code; ?>"><div>
											<p class="title-parts">$duyurular[i]</p>
										</div></a>
									</td>
								</tr>
							<?php } */?>
						</table>
					</div>
					
					<div id="announcements-div-mobile">
						<table id="announcements-table-mobile">
							<tr class="announcements-row">
								<td class="course-code">
									<div>
										<p class="title-parts">Duyurular</p>
									</div>
								</td>
							</tr>
							
							<?php
							/*
							while(1){ ?>
								<tr class="announcements-row" onclick="showbox_mobile('announcements-div-mobile', 'announcements/ders.php?kod=<?php echo $kod; ?>')">
									<td class="course-code">
										<a href="course_info.php?code=<?php echo $code; ?>"><div>
											<p class="title-parts">$duyurular[i]</p>
										</div></a>
									</td>
								</tr>
							<?php } */?>
						</table>
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>