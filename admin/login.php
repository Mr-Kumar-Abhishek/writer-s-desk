<?php
	require_once('../includes/config.php');
	if(isset($_POST['submit'])) {
		$uname = trim($_POST['uname']);
		$passwd = trim($_POST['passwd']);
		if($user->login($uname, $passwd)) {
			header('Location: index.php');
			exit;
		}
	}
?>
<from action="" method="post" >
	<p><label>Username</label><input type="text" name="uname" value="" /></p>
	<p><label>Password</label><input type="password" name="passwd" value="" /></p>
	<p><lable></lable><input type="submit" name="submit" value="login" /></p>
</from>
