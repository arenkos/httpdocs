<script src="script.js?v=<?php echo time(); ?>"></script>
<?php
if($_COOKIE['theme'] == "light"){
    ?>
    <meta http-equiv="refresh" content="0; URL=../light/mail.php">
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
		<title>Doğuş Üniversitesi - Mail ve Notlar</title>
	</head>
	<body>
		<?php include 'header.php'; ?>
		
		<div id="curtain" onclick="gizle('mail-alt')"></div>
		<div id="curtain-mobile" onclick="gizle_mobile('mail-alt-mobile')"></div>
		<table id="desktop-mail" style="width:100%;height:100vh;">
			<tr>
				<td style="width:350px;height:100%;left:0px;">
					<?php include 'menu.php'; ?>
				</td>
				<td style="width:100%;">
					<iframe id="show-box" onclick="gizle('mail-alt')"></iframe>
					<iframe id="show-box-mobile" onclick="gizle_mobile('mail-alt-mobile')"></iframe>
					<div id="mail-alt">
						<table class="parts-alt">
							<tr class="parts">
								<td id="mails" onclick="showbox('mail-alt', 'mail/show_mails.php')">
									<div class="options-icon-div">
										<img src="../../mail-dark/mails.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Mailler</p>
									</div>
								</td>
								<td style="width:35px;"></td>
								<td id="notes" onclick="showbox('mail-alt', 'mail/show_notes.php')">
									<div class="options-icon-div">
										<img src="../../mail-dark/notes.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Notlar</p>
									</div>
								</td>
								<td style="width:35px;"></td>
								<td id="social" onclick="showbox('mail-alt', 'mail/show_social.php')">
									<div class="options-icon-div">
										<img src="../../mail-dark/social.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Sosyal</p>
									</div>
								</td>
							</tr>
						</table>
					</div>
					
					<div id="mail-alt-mobile">
						<table class="parts-alt">
							<tr class="parts">
								<td id="mails" onclick="showbox_mobile('mail-alt-mobile', 'show_mails.php')">
									<div class="options-icon-div">
										<img src="../../mail-dark/mails.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Mailler</p>
									</div>
								</td>
								<td style="width:35px;"></td>
								<td id="notes" onclick="showbox_mobile('mail-alt-mobile', 'show_notes.php')">
									<div class="options-icon-div">
										<img src="../../mail-dark/notes.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Notlar</p>
									</div>
								</td>
							</tr>
							<tr class="spacer-height"></tr>
							<tr class="parts">
								<td id="social" onclick="showbox_mobile('mail-alt-mobile', 'show_social.php')">
									<div class="options-icon-div">
										<img src="../../mail-dark/social.png?v=<?php echo time(); ?>" class="options-icon">
									</div>
									<div class="spacer-height"></div>
									<div>
										<p class="title-parts">Sosyal</p>
									</div>
								</td>
								<td style="width:35px;"></td>
							</tr>
						</table>
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>
