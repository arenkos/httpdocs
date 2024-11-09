<?php
header("Content-type: text/css");
?>

.chat-button {
	position: fixed;
	bottom: 20px;
	right: 20px;
	background-color: transparent;
	border: none;
	width: 60px;
	height: 60px;
	cursor: pointer;
	background-image: url('http://www.armedyaveteknoloji.xyz/dogus/support.png');
	background-size: cover;
}

.chat-box {
	position: fixed;
	bottom: 80px;
	right: 20px;
	width: 300px;
	height: 400px;
	border: 1px solid #ddd;
	border-radius: 10px;
	box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
	background-color: white;
	display: none;
	flex-direction: column;
}

.chat-header {
	background-color: #007BFF;
	color: white;
	padding: 10px;
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;
}

.chat-body {
	flex: 1;
	padding: 10px;
	overflow-y: auto;
	max-width:100%;
}

.chat-footer {
	padding: 10px;
	border-top: 1px solid #ddd;
	display: flex;
	gap: 5px;
	width:100%;
}

.message {
	max-width: 70%;
	margin-bottom: 10px;
	padding: 10px;
	border-radius: 10px;
	position: relative;
	clear: both;
}

.message.user {
	background-color: #D1ECF1;
	color: #0C5460;
	align-self: flex-end;
	margin-left: auto;
}

.message.operator {
	background-color: #D4EDDA;
	color: #155724;
	align-self: flex-start;
	margin-right: auto;
}
