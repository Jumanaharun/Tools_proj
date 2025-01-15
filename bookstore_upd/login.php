<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style3.css">
	<title>Login Form</title>
</head>
<body>
	<div class="form-container">
		<h1 align="center">Log in</h1>
		<form action="login_process.php" method="post">
			<table align="center" cellpadding="10">
				<div class="form-group">
					<tr>
						<td><label for="email">Email </label></td>
						<td><input type="email" id="email" name="email" required></td>
					</tr>
				</div>

				<div class="form-group">
					<tr>
						<td><label for="pw">Password</label></td>
						<td><input type="password" id="pw" name="password" required></td>
					</tr>
				</div>

				<tr>
					<td colspan="2" align="center">
						<p>Not a member? <a href="sign-up3.html">Sign up</a></p>
					</td>
				</tr>

				<div class="form-group">
					<tr>
						<td colspan="2" align="center">
							<button type="submit" id="submit-btn">Submit</button>
							<button type="reset" id="submit-btn">Cancel</button>
						</td>
					</tr>
				</div>
			</table>
		</form>
	</div>
</body>
</html>
