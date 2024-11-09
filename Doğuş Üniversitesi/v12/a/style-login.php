<?php
header("Content-type: text/css");
?>

#login-body{
	margin:0 auto;
	background-image:linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)),url('back.png?v=<?php echo time(); ?>');
	background-size: 100% 100%;
	background-repeat:no-repeat;
	width:100%;
	height:100%;
}
.logo-panel {
	display: flex;
	justify-content: center;
	align-items: center;
	width: 250px;
	height: 250px;
	max-height:15%;
	margin: 0 auto;
	text-align: center;
	background-color: #FFF;
}
.logo-panel #logo{
	display: flex;
	justify-content: center;
	align-items: center;
	background-image:url('d.png?v=<?php echo time(); ?>');
	background-size: contain;
	background-position: center;
	background-repeat:no-repeat;
	width: 100%;
	height: 100%;
	margin: 0 auto;
	text-align: center;
	background-color: #FFF;
}
.login-panel {
	display: flex;
	justify-content: center;
	align-items: center;
	width: 250px;
	height: 50%;
	margin: 0 auto;
	text-align: center;
	background-color: #BB1111;
	color: #FFF;
}
.down-panel {
	display: flex;
	justify-content: center;
	align-items: center;
	background-image:url('b.png?v=<?php echo time(); ?>');
	background-size:100% 100%;
	width: 250px;
	height: 15%;
	margin: 0 auto;
	text-align: center;
	background-color: transparent;
	color: #FFF;
}
.login-panel #title{
	margin:0 auto;
	text-align:center;
	font-size:25px;
}
.login-panel #login-table{
	margin:0 auto;
	text-align:center;
	font-size:25px;
}
.login-panel #login-table #student_number{
	margin-top:10px;
	text-align:left;
	font-size:15px;
	color:#000;
}
.login-panel #login-table #password{
	margin-top:10px;
	text-align:left;
	font-size:15px;
	color:#000;
}
.login-panel #login{
	margin-top:10px;
	text-align:center;
	font-size:15px;
	background-color:#FFF;
	border:0px;
	color:#000;
}