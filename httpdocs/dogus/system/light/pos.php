<script src="script.js?v=<?php echo time(); ?>"></script>
<?php
if($_COOKIE['theme'] == "dark"){
    ?>
    <meta http-equiv="refresh" content="0; URL=../dark/pos.php">
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
	$harc=0.1;
?>
<html lang="tr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Doğuş Üniversitesi - Ödemeler</title>
	</head>
	<body>
		<?php include 'header.php'; ?>
		
		<div id="curtain" onclick="gizle('pos-alt')"></div>
		<div id="curtain-mobile" onclick="gizle_mobile('pos-alt-mobile')"></div>
		<table id="desktop-pos" style="width:100%;height:100vh;">
			<tr>
				<td style="width:350px;height:100%;left:0px;">
					<?php include 'menu.php'; ?>
				</td>
				<td style="width:100%;">
					<iframe id="show-box" onclick="gizle('pos-alt')"></iframe>
					<iframe id="show-box-mobile" onclick="gizle_mobile('pos-alt-mobile')"></iframe>
					
					<table id="pos-alt">
						<tr>
							<td>
								<table class="parts-pos-alt">
									<tr>
										<td>
											<p class="pos-title">Harç Bilgileri</p>
										</td>
										<td>
											<p class="pos-title">:</p>
										</td>
									<?php if($harc > 0){ ?>
										<td>
											<p class="pos-title"><?php echo $harc." TL"; ?></p>
										</td>
									</tr>
									<tr>
										<td colspan="3">
											<button class="pos-title">Ödeme Yap</button>
										</td>
									</tr>
									<tr>
									<?php }else{ ?>
										
										<td>
											<p class="pos-title">Ödendi</p>
										</td>
									</tr>
									<?php }	?>
								</table>
							</td>
						</tr>
						<tr>
							<td>
								<div style="height:20px;"></div>
							</td>
						</tr>
						<tr>
							<td>
								<table class="parts-pos-alt">
									<tr>
										<td>
											<p class="pos-title">DOU Kart Bakiye</p>
										</td>
										<td>
											<p class="pos-title">:</p>
										</td>
										<td>
											<p class="pos-title">35 TL</p>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td>
								<div style="height:20px;"></div>
							</td>
						</tr>
						<tr>
							<td>
								<table class="parts-pos-kart">
									<tr>
										<td>
											<table class="parts-pos-hareket">
												<tr>
													<td colspan="5">
														<p class="pos-title">DOU Kart <br>Hesap Hareketleri</p>
													</td>
												</tr>
												<tr>
													<td>
														<p class="pos-title">İşlem</p>
													</td>
													<td style="width:10px;"></td>
													<td>
														<p class="pos-title">Tarih</p>
													</td>
													<td style="width:10px;"></td>
													<td>
														<p class="pos-title">Tutar</p>
													</td>
												</tr>
												<tr>
													<td>
														<p class="pos-title">Yemek</p>
													</td>
													<td style="width:10px;"></td>
													<td>
														<p class="pos-title">24/05/2024 15:00:00</p>
													</td>
													<td style="width:10px;"></td>
													<td>
														<p class="pos-title">25 TL</p>
													</td>
												</tr>
											</table>
										</td>
										<td style="width:20px;">
										</td>
										<td>
											<table class="parts-pos-alt2">
												<tr>
													<td>
														<button class="pos-title" onclick="gir('20')">20 TL</button>
													</td>
													<td>
														<button class="pos-title" onclick="gir('50')">50 TL</button>
													</td>
													<td>
														<button class="pos-title" onclick="gir('100')">100 TL</button>
													</td>
												</tr>
												<tr>
													<td>
														<button class="pos-title" onclick="gir('200')">200 TL</button>
													</td>
													<td>
														<button class="pos-title" onclick="gir('500')">500 TL</button>
													</td>
													<td>
														<button class="pos-title" onclick="gir('1000')">1000 TL</button>
													</td>
												</tr>
												<form method="POST" action="payment.php">
													<tr>
														<td colspan="3">
															<input id="balance" type="tel" name="value" placeholder="Tutar giriniz" required oninput="this.value = this.value.replace(/[^0-9]/g, '')">
														</td>
													</tr>
													<tr>
														<td colspan="3">
															<input type="submit" class="pos-title" value="Ödeme Yap"></button>
														</td>
													</tr>
												</form>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
					
					<div id="pos-alt-mobile">
						<table style="width:100%;height:100%;">
							<tr>
								<td>
									<table class="parts-pos-alt">
										<tr>
											<td>
												<p class="pos-title">Harç Bilgileri</p>
											</td>
											<td>
												<p class="pos-title">:</p>
											</td>
										<?php if($harc > 0){ ?>
											<td>
												<p class="pos-title"><?php echo $harc." TL"; ?></p>
											</td>
										</tr>
										<tr>
											<td colspan="3">
												<button class="pos-title">Ödeme Yap</button>
											</td>
										</tr>
										<?php }else{ ?>
											
											<td>
												<p class="pos-title">Ödendi</p>
											</td>
										</tr>
										<?php }	?>
									</table>
									<div style="height:20px;"></div>
									<table class="parts-pos-alt">
										<tr>
											<td>
												<p class="pos-title">DOU Kart Bakiye</p>
											</td>
											<td>
												<p class="pos-title">:</p>
											</td>
											<td>
												<p class="pos-title">35 TL</p>
											</td>
										</tr>
									</table>
									<div style="height:20px;"></div>
								</td>
							</tr>
							<tr>
								<td>
									<table class="parts-pos-kart">
										<tr>
											<td>
												<table class="parts-pos-alt2">
													<tr>
														<td>
															<button class="pos-title" onclick="gir_mobile('20')">20 TL</button>
														</td>
														<td>
															<button class="pos-title" onclick="gir_mobile('50')">50 TL</button>
														</td>
														<td>
															<button class="pos-title" onclick="gir_mobile('100')">100 TL</button>
														</td>
													</tr>
													<tr>
														<td>
															<button class="pos-title" onclick="gir_mobile('200')">200 TL</button>
														</td>
														<td>
															<button class="pos-title" onclick="gir_mobile('500')">500 TL</button>
														</td>
														<td>
															<button class="pos-title" onclick="gir_mobile('1000')">1000 TL</button>
														</td>
													</tr>
													<form method="POST" action="payment.php">
														<tr>
															<td colspan="3">
																<input id="balance-mobile" type="tel" name="value" placeholder="Tutar giriniz" required oninput="this.value = this.value.replace(/[^0-9]/g, '')">
															</td>
														</tr>
														<tr>
															<td colspan="3">
																<input type="submit" class="pos-title" value="Ödeme Yap"></button>
															</td>
														</tr>
													</form>
												</table>
											</td>
										</tr>
										<tr style="height:15px;"></tr>
										<tr>
											<td>
												<table class="parts-pos-hareket">
													<tr>
														<td colspan="5">
															<p class="pos-title">DOU Kart <br>Hesap Hareketleri</p>
														</td>
													</tr>
													<tr>
														<td>
															<p class="pos-title">İşlem</p>
														</td>
														<td style="width:10px;"></td>
														<td>
															<p class="pos-title">Tarih</p>
														</td>
														<td style="width:10px;"></td>
														<td>
															<p class="pos-title">Tutar</p>
														</td>
													</tr>
													<tr>
														<td>
															<p class="pos-title">Yemek</p>
														</td>
														<td style="width:10px;"></td>
														<td>
															<p class="pos-title">24/05/2024 15:00:00</p>
														</td>
														<td style="width:10px;"></td>
														<td>
															<p class="pos-title">25 TL</p>
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>
