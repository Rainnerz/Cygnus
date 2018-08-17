<?php
// Hello! Please do not edit anything in this file or may mess things up.
// If you want to change something then please do that in the admin panel.
	include ("../src/inc/config.php");
	error_reporting(E_ALL ^ E_NOTICE);
	session_start();
	if ($_SESSION["admin"] == true) {
		ob_start();
		header('Location: index.php');
		ob_end_flush();
		die();
	}
	if (isset($_POST["username"]) && isset($_POST["userpw"])) {
		$name = $_POST["username"];
		$userpw = $_POST["userpw"];
		$myfile = fopen("config.php", "r");
		$real = array();
		while(!feof($myfile)) {
			$line = fgets($myfile);
			$key = explode(":", $line)[0];
			$value = substr($line, strpos($line, ":") + 1);
			$value = trim($value, "\n");
			$real[$key] = $value;
		}
		fclose($myfile);
		$realname = $real["username"];
		$realpw = $real["password"];
		if ($realname == $name && $realpw == $userpw) {
			$_SESSION["admin"] = true;
			ob_start();
			header('Location: index.php');
			ob_end_flush();
		} else {
			echo "
			<div class=\"row\">
				<div class=\"container\">
					<div class=\"col s4 offset-s4\">
						<div class=\"card animated fadeInDown center white-text red\">
							<div class=\"card-content\">
								<span class=\"card-title\">Oops!</span>
								<p>The username or password you have entered is incorrect. Please try again.</p>
							</div>
						</div>
					</div>
				</div>
			</div>";
			$_SESSION["admin"] = false;
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.3/css/materialize.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
	<?php if ($lighttheme == true) { echo '
	<body>
	'; } else { echo '
	<body style="background-color: #3d3d3d;">
	'; } ?>
		<div class="container center">
			<br><br><br><br><br><br><br><br><br>
			<div class="row">
				<div class="col s6 offset-s3">
					<div class="card">
						<div class="card-content">
						<h2 class="flow-text"><b>Please Login</b></h2>
							<form action="" method="POST">
								<div class="input-field">
								<i class="material-icons prefix" style="color: <? echo $color;?>">person</i>
									<input type="text" name="username" placeholder="Username">
								</div>
								<div class="input-field">
								<i class="material-icons prefix" style="color: <? echo $color;?>">lock</i>
									<input id="password" type="password" name="userpw" placeholder="Password">
								</div>
								<div>
									<button class="btn waves-effect waves-light" style="background-color: <? echo $color;?>">Login</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.3/js/materialize.min.js"></script>
	</body>
</html>
