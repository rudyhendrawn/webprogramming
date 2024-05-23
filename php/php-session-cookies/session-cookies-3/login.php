<?php
session_start();

require_once 'User.php';

$user = new User($pdo);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST['username'] ?? '';
	$password = $_POST['password'] ?? '';

	if (!empty($username) && !empty($password)) {
		// Check if the user exists
		$authenticated_user = $user->authenticate($username, $password);
		if ($authenticated_user) {
			echo $username . "<br>";
			echo $password;
			$_SESSION['loggedin'] = true;
			$_SESSION['username'] = $authenticated_user['username'];
			setcookie('username', $authenticated_user['username'], time() + 3600);
			header("Location: index.php");
			exit();
		} else {
			// Login failed
			$error = "Your username/password combination was incorrect";
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h2>Login</h2>
<form method="post">
	Username: <input type="text" name="username">
	<br><br>
	Password: <input type="password" name="password">
	<br><br>
	<input type="submit" name="login" value="Login">
</form>

<?php if (isset($error)): ?>
	<p><?php echo $error; ?></p>
<?php endif; ?>

</body>
</html>