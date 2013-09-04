<!DOCTYPE html>
<html>

	<head>
		<link tyle='text/css' rel='stylesheet' href='Style/Style.css' />
		<script type="text/javascript" src="Js/jquery.js"></script>
		<title>Welcome to Chat App</title>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#SignUpDiv').hide();
				$('#NewAcc').click(function(){
					$('#LoginDiv').fadeOut(500, function(){
						$('#SignUpDiv').fadeIn(500);
					});
				});

				$("#AlreadyHave").click(function(){
					$('#SignUpDiv').fadeOut(500, function(){
						$('#LoginDiv').fadeIn(500);
					});
				});
			});
		</script>
	</head>

	<body>
		<div id="LoginDiv">
		<h2>LOGIN FORM</h2>
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
					<td></td><td><a id="NewAcc" href="javascript:void()">Create New Account</td>
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

		<div id="SignUpDiv">
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
					<td></td><td><a id="AlreadyHave" href="javascript:void()">Already Have an Account.</td>
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