<h2>Login</h2>
<p><?php echo $errorLogin;?></p>
<form action="index.php?action=login" method="POST">
	<p>Username: <input type="text" name="username" placeholder="enter username"></p>
	<p>Password: <input type="password" name="password" placeholder="enter password"></p>
	<input type="submit" name="login" value="Login">
</form>