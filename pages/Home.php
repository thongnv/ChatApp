<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link href="../Style/Style.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="../Js/jquery.js"></script>
	<title>Chat Application Home</title>
	<script type="text/javascript">
	$(document).ready(function(){

		$("#ChatText").keyup(function(e){
			//when we press enter do
			if(e.keyCode == 13){
				e.preventDefault();
				if( $('#ChatText').val().length > 0){
					var ChatValue = $('#ChatText').val();
					$.ajax({
						type: 'POST',
						url: 'InsertMessage.php',
						data: {ChatText: ChatValue},
						success: function(){
							$("#ChatMessage").load("DisplayMessages.php");
							$("#ChatText").val("");
							$('#ChatMessage').scrollTop = $('#ChatMessage').scrollHeight;
						}
					});
				}
			}
		});

		setInterval(function(){//refresh every 3000ms
			$("#ChatMessage").load("DisplayMessages.php");
			$('#ChatMessage').scrollTop($('#ChatMessage')[0].scrollHeight);
		}, 5000);

		$("#ChatMessage").load("DisplayMessages.php");
		//$("#ChatMessage").scrollTop = $("#ChatMessage").scrollHeight;
	});
	</script>
</head>
<body>
	<h2>Welcome <span style="color:white"><?php echo $_SESSION['UserName'] ?> !<a id='logout' href='UserLogout.php' >Log Out</a></span></h2>
	</br></br>

	<div id="ChatBig">
	<div id="ChatMessage"></div>
	<div id="ChatBar"></div>
	<textarea id="ChatText" name="ChatText"></textarea>
	</div>

</body>

</html>