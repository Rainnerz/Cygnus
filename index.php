<?php
	// Hello! Please do not touch this file as it is extremely important. If you want to change something then please do it via Admin Panel.
	include ("src/inc/config.php");
	include ("src/inc/core.php");
	error_reporting(0);
	@ini_set('display_errors', 0);
	if ($SteamKey == null) { echo '---------- Please enter the Admin Panel and paste in your Steam API Key. That\'s why these errors are showing up ----------'; } else { null; }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="<?= $metadescription ?>">
		<meta name="keywords" content="<?= $metakeywords ?>">
		<meta name="author" content="Rainn">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="image/png" href="favicon.png">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
		<link rel="stylesheet" href="assets/css/style.css">
		<title><?= $communityname ?> | Home</title>
		<style>
			.navbar-solid {
				<?php if ($lighttheme == true) { echo '
				background: rgba(240,240,240,1);
				'; } else { echo '
				background: rgba(38, 38, 38,1);
				'; }
				?>
				transition: background 0.4s ease;
			}
			nav {
				height: 75px;
			}
			.btn {
				background-color: <?= $color ?>;
				border-radius: 5px;
			}
			.btn:hover {
				background-color: <?= $color ?>;
				border-radius: 10px;
			}
			.btn-floating { background-color: <?= $color ?>; border-radius: 15px; }
			.btn-floating:hover { background-color: <?= $color ?>; border-radius: 20px; }
			#scroll { background-color: <?= $color ?>; border-radius: 10px !important; transition: all 0.3s ease-in-out !important;}
			#scroll:hover { background-color: <?= $color ?>; opacity: 0.7; }
			.card { border-radius: 10px; }
		</style>
	</head>
	<?php if ($lighttheme == true) { echo '
	<body style="background: linear-gradient(to bottom right, #ffffff, #f2f2f2);">
	'; } else { echo ' 
	<body style="background: linear-gradient(to bottom right, #3d3d3d, #282828);"> 
	'; }
	?>	
	<?php 
		echo '
			<div class="parallax-container z-depth-2">
					<div class="navbar-fixed">
						<nav class="navbar-scroll z-depth-0 transparent">
							<div class="nav-wrapper container">
								<a href="#" class="brand-logo hide-on-med-and-down" style="font-family: \'Nunito Sans\'; color: '.$color.'">'.$communityname.'</a>
								<a href="#" data-target="mobile-demo" class="sidenav-trigger black-text"><i class="large material-icons" style="color: '.$color.'">menu</i></a>
								<a href="#" class="brand-logo show-on-medium-and-down hide-on-med-and-up" style="font-family: \'Nunito Sans\'; color: '.$color.'"><img class="materialboxed" src="'.$communitylogo.'" height="70" width="70" style="cursor: pointer;"></a>
								<ul class="right hide-on-med-and-down">
								'; 	 if ($btnonelink == null && $btnone == null) { null; } else { echo '
									<li><a class="waves-effect waves-light btn z-depth-3" href="'.$btnonelink.'" style="font-family: \'Nunito Sans\';">'.$btnone.'</a></li>
								'; } if ($btntwolink == null && $btntwo == null) { null; } else { echo '
									<li><a class="waves-effect waves-light btn z-depth-3" href="'.$btntwolink.'" style="font-family: \'Nunito Sans\';">'.$btntwo.'</a></li>
								'; } if ($btnthreelink == null && $btnthree == null) { null; } else { echo '
									<li><a class="waves-effect waves-light btn z-depth-3" href="'.$btnthreelink.'" style="font-family: \'Nunito Sans\';">'.$btnthree.'</a></li>
								'; } echo '
								</ul>
							</div>
						</nav>
					</div>
					<ul class="sidenav" id="mobile-demo">
					'; 	 if ($btnonelink == null && $btnone == null) { null; } else { echo '
						<li><a class="waves-effect waves-light btn z-depth-3" href="'.$btnonelink.'" target="_blank" style="font-family: \'Nunito Sans\';">'.$btnone.'</a></li>
						<div class="divider"></div>
					'; } if ($btntwolink == null && $btntwo == null) { null; } else { echo '
						<li><a class="waves-effect waves-light btn z-depth-3" href="'.$btntwolink.'" target="_blank" style="font-family: \'Nunito Sans\';">'.$btntwo.'</a></li>
						<div class="divider"></div>
					'; } if ($btnthreelink == null && $btnthree == null) { null; } else { echo '
						<li><a class="waves-effect waves-light btn z-depth-3" href="'.$btnthreelink.'" target="_blank" style="font-family: \'Nunito Sans\';">'.$btnthree.'</a></li>
					'; } echo '
					</ul>
				<br>
				<br>
				<br>
				<div class="container">
					<div class="row clearfix center">
						<h3 class="card-title" style="color: '.$color.'; font-family: \'Nunito Sans\';">'.$header.'</h3>
						<p class="white-text" style="font-size: 20px;">'.$paragraph.'</p>
					</div>
				</div>
				<div class="parallax"><img src="'.$imageone.'"></div>
			</div>
			<br>
		';

		if ($sectionone == true) {
			include("src/sec/sectionone.php");
		} else { null; }

		if ($sectiontwo == true) {
			include("src/sec/sectiontwo.php");
		} else { null; }

		if ($sectionthree == true) { 
			include("src/sec/sectionthree.php");
		} else { null; }

		if ($sectionfour == true) {
			include("src/sec/sectionfour.php");
		} else { null; }

		if ($sectionfive == true) {
			include("src/sec/sectionfive.php");
		} else { null; }
	?>
		<footer class="page-footer grey darken-4 z-depth-2">
			<div class="footer-copyright white-text" style="font-weight:bold;">
				<div class="container">
				© 2018 <?= $communityname ?>
					<div class="right hide-on-med-and-down">
					<?php	 if($twitterlink == null) { null; } else { echo '
							<a href="'.$twitterlink.'"><img src="assets/img/twitter.png" height="35" width="35"></a>
						'; } if($facebooklink == null) { null; } else { echo '
							<a href="'.$facebooklink.'"><img src="assets/img/facebook.png" height="35" width="35" style="margin-left:10px;"></a> 
						'; } if($instagramlink == null) { null; } else { echo '
							<a href="'.$instagramlink.'"><img src="assets/img/insta.png" height="35" width="35" style="margin-left:10px;"></a>
						'; } if($youtubelink == null) { null; } else { echo '
							<a href="'.$youtubelink.'"><img src="assets/img/youtube.png" height="35" width="35" style="margin-left:10px;"></a>
						'; }
					?>
					</div>
					<div class="show-on-medium-and-down hide-on-large-only">
					<br>
					<?php	 if($twitterlink == null) { null; } else { echo '
							<a href="'.$twitterlink.'"><img src="assets/img/twitter.png" height="35" width="35"></a>
						'; } if($facebooklink == null) { null; } else { echo '
							<a href="'.$facebooklink.'"><img src="assets/img/facebook.png" height="35" width="35" style="margin-left:10px;"></a> 
						'; } if($instagramlink == null) { null; } else { echo '
							<a href="'.$instagramlink.'"><img src="assets/img/insta.png" height="35" width="35" style="margin-left:10px;"></a>
						'; } if($youtubelink == null) { null; } else { echo '
							<a href="'.$youtubelink.'"><img src="assets/img/youtube.png" height="35" width="35" style="margin-left:10px;"></a>
						'; }
					?>
					</div>
				</div>
			</div>
        </footer>
		<a href="#" id="scroll" style="display: none;"><span></span></a>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
		<script src="assets/js/materialize.min.js"></script>
		<script src="assets/js/main.js"></script>
		<script>
			AOS.init({
				disable: 'mobile',
				once: true,
			});
		</script>
	</body>
</html>