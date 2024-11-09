<div class="support">
	<!-- Canlı Destek Butonu -->
	<button class="chat-button" onclick="toggleChat()"></button>
	
	<!-- Sohbet Kutusu -->
	<div class="chat-box" id="chatBox">
		<div class="chat-header">Canlı Destek</div>
		<div class="chat-body" id="chatBody">
			<!-- Sohbet mesajları buraya gelecek -->
		</div>
		<div class="chat-footer">
			<input type="text" id="chatInput" placeholder="Mesajınızı yazın..." onkeypress="handleKeyPress(event)">
			<button onclick="sendMessage()">Gönder</button>
		</div>
	</div>
</div>