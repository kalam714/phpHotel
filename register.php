<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url('images/g2.jpg')">
	<button><a href="index.php"><h1>Go To Home</h1></a></button>
	<div class="header">
		<h2>Register</h2>
	</div>
	<div style="background-image: url('images/g1.jpg');"></div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
	
</body>
</html>


