<!DOCTYPE html>
<html>

	<head>
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
			<h2 id='login'>LOGIN FORM</h2>
			<form method="post" action="pages/UserLogin.php" >
				<table>
					<tr>
						<td>Email: </td><td><input type="email" name="UserMailLogin"></td>
					</tr>
					<tr>
						<td>Password: </td><td><input type="password" name="UserPasswordLogin" /></td>
					</tr>
					<tr>
						<td></td><td><input type="submit" value="LOG IN" </td>
					</tr>
					<tr>
						<td></td><td id="NewAcc"><a href="javascript:void()">Create New Account</td>
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
		<h2>SIGNUP FORM</h2>
		<form method="post" action="pages/InsertUser.php" >
			<table>
				<tr>
					<td>Your Name: </td><td><input type="text" name="UserName" /></td>
				</tr>
				<tr>
					<td>Your Email: </td><td><input type="email" name="UserMail" /></td>
				</tr>
				<tr>
					<td>Password: </td><td><input type="password" name="UserPassword" /></td>
				</tr>
				<tr>
					<td></td><td><input type="submit" value="Sign Up" /></td>
				</tr>
				<tr>
					<td></td><td><a href="javascript:void()" id="AlreadyHave" />Already Have An Account</td>
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