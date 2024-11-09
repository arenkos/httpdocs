<script src="script.js?v=<?php echo time(); ?>"></script>
<?php
if($_COOKIE['theme'] == "dark"){
    ?>
    <meta http-equiv="refresh" content="0; URL=../dark/online.php">
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
    include 'session_control.php';
?>
<html lang="tr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Doğuş Üniversitesi - Online</title>
	</head>
	<body>
		<?php include 'header.php'; ?>
		
		<div id="curtain" onclick="gizle('online-div')"></div>
		<div id="curtain-mobile" onclick="gizle_mobile('online-div-mobile')"></div>
		<table style="width:100%;height:100vh;">
			<tr>
				<td style="width:350px;height:100%;left:0px;">
					<?php include 'menu.php'; ?>
				</td>
				<td style="width:100%;">
					<iframe id="show-box" onclick="gizle('online-div')"></iframe>
					<iframe id="show-box-mobile" onclick="gizle_mobile('online-div-mobile')"></iframe>
										
					<div id="online-div">
						<table id="online-table">
							<tr class="online-row">
								<td class="course-code">
									<div>
										<p class="title-parts">Ders Kodu</p>
									</div>
								</td>
								<td style="width:15px;"></td>
								<td class="course-name">
									<div>
										<p class="title-parts">Ders Adı</p>
									</div>
								</td>
								<td style="width:15px;"></td>
								<td class="records">
									<div>
										<p class="title-parts">Kayıt</p>
									</div>
								</td>
								<td style="width:15px;"></td>
								<td class="notes">
									<div>
										<p class="title-parts">Notlar</p>
									</div>
								</td>
								<td style="width:15px;"></td>
								<td class="homework">
									<div>
										<p class="title-parts">Ödev</p>
									</div>
								</td>
								<td style="width:15px;"></td>
								<td class="exam">
									<div>
										<p class="title-parts">Sınav</p>
									</div>
								</td>
							</tr>
							
							<?php
							/*
							while(1){ ?>
								<tr class="online-row">
									<td class="course-code">
										<a href="course_info.php?code=<?php echo $code; ?>"><div>
											<p class="title-parts">Ders Kodu</p>
										</div></a>
									</td>
									<td style="width:15px;"></td>
									<td class="course-name">
										<a href="course_info.php?code=<?php echo $code; ?>"><div>
											<p class="title-parts">Ders Adı</p>
										</div></a>
									</td>
									<td style="width:15px;"></td>
									<td class="records">
										<a href="course_info.php?code=<?php echo $code; ?>"><div>
											<p class="title-parts">Kayıt</p>
										</div></a>
									</td>
									<td style="width:15px;"></td>
									<td class="notes">
										<a href="course_info.php?code=<?php echo $code; ?>"><div>
											<p class="title-parts">Notlar</p>
										</div></a>
									</td>
									<td style="width:15px;"></td>
									<td class="homework">
										<a href="course_info.php?code=<?php echo $code; ?>"><div>
											<p class="title-parts">Ödev</p>
										</div></a>
									</td>
									<td style="width:15px;"></td>
									<td class="exam">
										<a href="course_info.php?code=<?php echo $code; ?>"><div>
											<p class="title-parts">Sınav</p>
										</div></a>
									</td>
								</tr>
							<?php } */?>
						</table>
					</div>
					
					<div id="online-div-mobile">
						<table id="online-table-mobile">
							<tr class="online-row">
								<td class="course-code">
									<div>
										<p class="title-parts">Ders Kodu</p>
									</div>
								</td>
								<td style="width:15px;"></td>
								<td class="course-name">
									<div>
										<p class="title-parts">Ders Adı</p>
									</div>
								</td>
							</tr>
							
							<?php
							/*
							while(1){ ?>
								<tr class="online-row" onclick="showbox_mobile('online-div-mobile', 'online/ders.php?kod=<?php echo $kod; ?>')">
									<td class="course-code">
										<a href="course_info.php?code=<?php echo $code; ?>"><div>
											<p class="title-parts">Ders Kodu</p>
										</div></a>
									</td>
									<td style="width:15px;"></td>
									<td class="course-name">
										<a href="course_info.php?code=<?php echo $code; ?>"><div>
											<p class="title-parts">Ders Adı</p>
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
