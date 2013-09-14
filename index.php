<!DOCTYPE html>
<html>

	<head>
		<link type='text/css' rel='stylesheet' href='Style/StyleIndex.css'>
		<script type="text/javascript" src="Js/jquery.js"></script>
		<title>Welcome to Chat App</title>
		<script type='text/javascript'>
		$(document).ready(function(){
			$("#signup").hide();
			
			$("#NewAcc").click(function(){
				$('#login').fadeOut(500, function(){
					$('#signup').fadeIn(500);
				});
			});

			$('#AlreadyHave').click(function(){
				$('#signup').fadeOut(500, function(){
					$('#login').fadeIn(500);
				});
			});
		});
		</script>
	</head>

	<body>
		<div id="login">
			<form method="post" action="pages/UserLogin.php" >
				<h2 id='login'>LOGIN TO CHAT</h2>
				<div id='line1' class='line horizontal'></div>
				<table>
					<tr>
						<td>Email: </td><td><input class='inputtext' type="email" name="UserMailLogin"></td>
					</tr>
					<tr>
						<td>Password: </td><td><input class='inputpassword' type="password" name="UserPasswordLogin" /></td>
					</tr>
					<tr>
						<td></td><td><input class='submit' type="submit" value="LOG IN" </td>
					</tr>
					<tr>
						<td></td><td id="NewAcc">or <a href="javascript:void()">Create New Account</td>
					</tr>
					<?php
					if(isset($_GET['error'])){?>
						<tr>
							<td></td><span style="color:red">ERROR LOGIN!</span>
						</tr><?php
					}?>
				</table>
			</form>
		</div>

		<div id='signup'>
		<form method="post" action="pages/InsertUser.php" >
			<h2>SIGN UP</h2>
			<div id='line1' class='line horizontal'></div>
			<table>
				<tr>
					<td><input class='inputtext' type="text" name="UserName" placeholder='Your Name' /></td>
				</tr>
				<tr>
					<td><input class='inputtext' type="email" name="UserMail" placeholder='Your Email' /></td>
				</tr>
				<tr>
					<td><input class='inputpassword' type="password" name="UserPassword" placeholder='New Password' /></td>
				</tr>
				<tr>
					<td><input class='submit' type="submit" value="Sign Up" /></td>
				</tr>
				<tr>
					<td><a href="javascript:void()" id="AlreadyHave" />Already Have An Account</td>
				</tr>
				<?php
				if(isset($_GET['success'])){?>
				<tr>
					<td></td><td><span style="color:green">UserInserted</span></td>
				</tr><?php
				}?>
			</table>		
		</form>
		</div>
	</body>
</html>
