<?php
// Hello! Please do not edit anything in this file or may mess things up.
// If you want to change something then please do that in the admin panel.
include ("../src/inc/config.php");	
include ("inc/script.php");
if (strpos($_SERVER[REQUEST_URI], "index.php") !== false) {
	header("LOCATION: http://$_SERVER[HTTP_HOST]".str_replace("index.php", "", $_SERVER[REQUEST_URI]));
	}
	session_start();
	if ($_SESSION["admin"] == false) {
		ob_start();
		header('Location: login.php');
		ob_end_flush();
		die();
	}
	if ($_GET["exit"] == "1") {
		$_SESSION["admin"] = false;
		ob_start();
		header('Location: login.php');
		ob_end_flush();
		die();
	}
	if (isset($_POST["username"]) && isset($_POST["userpw"]) && isset($_POST["userpwkey"])) {
		$name = $_POST["username"];
		$userpw = $_POST["userpw"];
		$userpwkey = "access";
		if ($userpwkey == "access") {	
			$myfile = fopen("config.php", "w+");
			$txt = "username:$name\npassword:$userpw";
			fwrite($myfile, $txt);
			fclose($myfile);
		}
	}
?>
<!DOCTYPE html>
<html>
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../assets/css/materialize.min.css">
		<link rel="shortcut icon" type="image/png" href="favicon.png">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<title><?= $communityname ?> | Admin</title>
		<style>
		body {
			background: <?= $color ?>;
			background-repeat: repeat-y;
			background-size:cover;
		}
		<?php if ($lighttheme == true) { echo '
		.collapsible-body {
			background: #ffffff;
		}
		'; } else { echo '
		.collapsible-body, .collapsible-header {
			background: #3d3d3d;
			color: white;
		}
		
		input {
			color: #ffffff;
		}
		'; }
		?>
		.switch label input[type=checkbox]:checked+.lever {
		  background-color: <?= $color ?>;
		}
		.switch label input[type=checkbox]:checked+.lever:after {
		  background-color: #fff;
		}
		.switch label .lever {
		  background-color: <?= $color ?>;
		}
		.switch label .lever:after {
		  background-color: #fff;
		}
		.material-icons {
			color: <?= $color ?>;
		}
		</style>
	</head>

    <body>
		<form action="" method="post">
		<br>
		<br>
			<div class="container">
				<ul class="collapsible popout">
					<li>
						<div class="collapsible-header"><i class="material-icons">assignment_ind</i>General</div>
						<div class="collapsible-body">
							<div class="col s4">
								<span class="card-title flow-text">Steam API Key</span>
								<p>Your Steam API Key is required for some functions to work. You can obtain your API key <a href="https://steamcommunity.com/dev/apikey" target="_blank">here</a>.</p>
								<div class="input-field">
									<input type="text" name="SteamKey" placeholder="XXXXXXXXXXXXXXXXXXXXXX" value="<?php echo $SteamKey; ?>">
								</div>
							</div>
							<br>
							<br>
							<span class="card-title flow-text">Color Theme</span>
							<p>Do you want the Light Theme or the Dark Theme? Default: Light Theme.</p>
							<div class="switch"> 
								<label style="font-size: 10px">
									Dark Theme
									<input type="checkbox" name="lighttheme" <?php if ($lighttheme == 1) { echo 'checked="checked"';} else { null; } ?> value="<?php $lighttheme ?>" />
									<span class="lever"></span> 
									Light Theme
								</label> 
							</div>
							<br>
							<br>
							<span class="card-title flow-text">Smooshed Theme</span>
							<p>When enabled this will turn off the parallax images so the site looks more compressed.</p>
							<div class="switch"> 
								<label style="font-size: 10px">
									Disable
									<input type="checkbox" name="smoosh" <?php if ($smoosh == 1) { echo 'checked="checked"';} else { null; } ?> value="<?php $smoosh ?>" />
									<span class="lever"></span> 
									Enable
								</label> 
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text">Community Name</span>
								<p>What is the name of your community?</p>
								<div class="input-field">
									<input type="text" name="communityname" placeholder="Rainnerz Networkz" value="<?php echo $communityname; ?>">
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text">Meta Description</span>
								<p>Give a description about your community.</p>
								<div class="input-field">
									<input type="text" name="metadescription" placeholder="rIndex, the only index you will need." value="<?php echo $metadescription; ?>">
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text">Meta Keywords</span>
								<p>This is what's used for people to find your community, seperated by commas.</p>
								<div class="input-field">
									<input type="text" name="metakeywords" placeholder="gmod, counterstrike, source, steam" value="<?php echo $metakeywords; ?>">
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text" style="color: <?php echo $color; ?>">Color</span>
								<p>What is the main color of your community? Supports: Hex, rgb, etc.</p>
								<div class="input-field">
									<input type="text" name="color" placeholder="gmod, counterstrike, source, steam" value="<?php echo $color; ?>">
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="collapsible-header"><i class="material-icons">place</i>Navbar Buttons</div>
						<div class="collapsible-body">
						<p>If you want to disable a Nav button just simply leave both the <b>title</b> & <b>link</b> fields blank.</p>
							<div class="col s4">
								<span class="card-title flow-text">Button One</span>
								<p>This is the <b>title</b> of the button.</p>
								<div class="input-field">
									<input type="text" name="btnone" placeholder="Forums" value="<?php echo $btnone; ?>">
								</div>
								<p>This is the <b>link</b> of the button.</p>
								<div class="input-field">
									<input type="text" name="btnonelink" placeholder="http://google.com" value="<?php echo $btnonelink; ?>">
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text">Button Two</span>
								<p>This is the <b>title</b> of the button.</p>
								<div class="input-field">
									<input type="text" name="btntwo" placeholder="Store" value="<?php echo $btntwo; ?>">
								</div>
								<p>This is the <b>link</b> of the button.</p>
								<div class="input-field">
									<input type="text" name="btntwolink" placeholder="http://google.com.com" value="<?php echo $btntwolink; ?>">
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text">Button Three</span>
								<p>This is the <b>title</b> of the button.</p>
								<div class="input-field">
									<input type="text" name="btnthree" placeholder="Steam Group" value="<?php echo $btnthree; ?>">
								</div>
								<p>This is the <b>link</b> of the button.</p>
								<div class="input-field">
									<input type="text" name="btnthreelink" placeholder="http://google.com.com" value="<?php echo $btnthreelink; ?>">
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="collapsible-header"><i class="material-icons">whatshot</i>Images</div>
						<div class="collapsible-body">
							<div class="col s4">
								<span class="card-title flow-text">Community Logo</span>
								<p>What is your community's logo? It can also be a URL.</p>
								<div class="input-field">
									<input type="text" name="communitylogo" placeholder="logo.png" value="<?php echo $communitylogo; ?>">
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text">Image One</span>
								<p>What is the first background image to be presented?</p>
								<div class="input-field">
									<input type="text" name="imageone" placeholder="bg1.jpg" value="<?php echo $imageone; ?>">
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text">Image Two</span>
								<p>What is the second background image to be presented?</p>
								<div class="input-field">
									<input type="text" name="imagetwo" placeholder="bg2.jpg" value="<?php echo $imagetwo; ?>">
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text">Image Three</span>
								<p>What is the third background image to be presented?</p>
								<div class="input-field">
									<input type="text" name="imagethree" placeholder="bg3.jpg" value="<?php echo $imagethree; ?>">
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text">Image Four</span>
								<p>What is the fourth background image to be presented?</p>
								<div class="input-field">
									<input type="text" name="imagefour" placeholder="bg4.jpg" value="<?php echo $imagefour; ?>">
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text">Image Five</span>
								<p>What is the fifth background image to be presented?</p>
								<div class="input-field">
									<input type="text" name="imagefive" placeholder="bg5.jpg" value="<?php echo $imagefive; ?>">
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="collapsible-header"><i class="material-icons">assignment</i>Header and Paragraph</div>
						<div class="collapsible-body">
							<div class="col s4">
								<span class="card-title flow-text">Header Title</span>
								<p>This would usually be 'Our Community' or 'About Us' or you can make it what you want.</p>
								<div class="input-field">
									<input type="text" name="header" placeholder="Our Community" value="<?php echo $header; ?>">
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text">Paragraph</span>
								<p>Briefly explain your communty's pledge or whatever you would like.</p>
								<div class="input-field">
									<input type="text" name="paragraph" placeholder="We here at community love our players etc." value="<?php echo $paragraph; ?>">
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="collapsible-header"><i class="material-icons">branding_watermark</i>Promotional Cards (Section One)</div>
						<div class="collapsible-body">
							<div class="col s4">
								<span class="card-title flow-text">Section One</span>
								<div class="switch"> 
									<label style="font-size: 10px">
										Disable
										<input type="checkbox" name="sectionone" <?php if ($sectionone == 1) { echo 'checked="checked"';} else { null; } ?> value="<?php $sectionone ?>" />
										<span class="lever"></span> 
										Enable
									</label> 
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text">Card One Title</span>
								<p>This would be the title of your first promo card.</p>
								<div class="input-field">
									<input type="text" name="promoone" placeholder="Staff" value="<?php echo $promoone; ?>">
								</div>
							</div>
							<div class="col s4">
								<span class="card-title flow-text">Card One Icon</span>
								<p>This is where you can change the icon of the promo card. Uses Materialize's icon's. You can access them <a href="http://materializecss.com/icons.html" target="_blank">here</a>.</p>
								<div class="input-field">
									<input type="text" name="promooneicon" placeholder="attach_file" value="<?php echo $promooneicon; ?>">
								</div>
							</div>
							<div class="col s4">
								<span class="card-title flow-text">Card One Passage</span>
								<p>This is where you can change the passage of the promo card.</p>
								<div class="input-field">
									<input type="text" name="promoonepassage" placeholder="We here at community value our selection of staff." value="<?php echo $promoonepassage; ?>">
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text">Card Two Title</span>
								<p>This would be the title of your second promo card.</p>
								<div class="input-field">
									<input type="text" name="promotwo" placeholder="Staff" value="<?php echo $promotwo; ?>">
								</div>
							</div>
							<div class="col s4">
								<span class="card-title flow-text">Card Two Icon</span>
								<p>This is where you can change the icon of the promo card. Uses Materialize's icon's. You can access them <a href="http://materializecss.com/icons.html" target="_blank">here</a>.</p>
								<div class="input-field">
									<input type="text" name="promotwoicon" placeholder="attach_file" value="<?php echo $promotwoicon; ?>">
								</div>
							</div>
							<div class="col s4">
								<span class="card-title flow-text">Card Two Passage</span>
								<p>This is where you can change the passage of the promo card.</p>
								<div class="input-field">
									<input type="text" name="promotwopassage" placeholder="We here at community value our selection of staff." value="<?php echo $promotwopassage; ?>">
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text">Card Three Title</span>
								<p>This would be the title of your third promo card.</p>
								<div class="input-field">
									<input type="text" name="promothree" placeholder="Staff" value="<?php echo $promothree; ?>">
								</div>
							</div>
							<div class="col s4">
								<span class="card-title flow-text">Card Three Icon</span>
								<p>This is where you can change the icon of the promo card. Uses Materialize's icon's. You can access them <a href="http://materializecss.com/icons.html" target="_blank">here</a>.</p>
								<div class="input-field">
									<input type="text" name="promothreeicon" placeholder="attach_file" value="<?php echo $promothreeicon; ?>">
								</div>
							</div>
							<div class="col s4">
								<span class="card-title flow-text">Card Three Passage</span>
								<p>This is where you can change the passage of the promo card.</p>
								<div class="input-field">
									<input type="text" name="promothreepassage" placeholder="We here at community value our selection of staff." value="<?php echo $promothreepassage; ?>">
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text">Card Four Title</span>
								<p>This would be the title of your fourth promo card.</p>
								<div class="input-field">
									<input type="text" name="promofour" placeholder="Staff" value="<?php echo $promofour; ?>">
								</div>
							</div>
							<div class="col s4">
								<span class="card-title flow-text">Card Four Icon</span>
								<p>This is where you can change the icon of the promo card. Uses Materialize's icon's. You can access them <a href="http://materializecss.com/icons.html" target="_blank">here</a>.</p>
								<div class="input-field">
									<input type="text" name="promofouricon" placeholder="attach_file" value="<?php echo $promofouricon; ?>">
								</div>
							</div>
							<div class="col s4">
								<span class="card-title flow-text">Card Four Passage</span>
								<p>This is where you can change the passage of the promo card.</p>
								<div class="input-field">
									<input type="text" name="promofourpassage" placeholder="We here at community value our selection of staff." value="<?php echo $promofourpassage; ?>">
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="collapsible-header"><i class="material-icons">local_phone</i>Discord Integration (Section Two)</div>
						<div class="collapsible-body">
							<div class="col s4">
								<span class="card-title flow-text">Section Two</span>
								<div class="switch"> 
									<label style="font-size: 10px">
										Disable
										<input type="checkbox" name="sectiontwo" <?php if ($sectiontwo == 1) { echo 'checked="checked"';} else { null; } ?> value="<?php $sectiontwo ?>" />
										<span class="lever"></span> 
										Enable
									</label> 
								</div>
								<p>What is the title of section two?</p>
								<div class="input-field">
									<input type="text" name="sectiononetitle" placeholder="Test" value="<?php echo $sectiononetitle; ?>">
								</div>
								<p>What is the passage of section two?</p>
								<div class="input-field">
									<input type="text" name="sectiononepassage" placeholder="blah blah" value="<?php echo $sectiononepassage; ?>">
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text">Discord</span>
								<p>Paste the <b>ID</b> of your Discord Server in here. Server Settings > Widget > Enable Server Widget > Copy the Server ID.<br>If you want a "Connect" button then make sure to set an Instant-Invite channel.</p>
								<div class="input-field">
									<input type="text" name="discordid" placeholder="76561198082330654" value="<?php echo $discordid; ?>">
								</div>
								<p>What theme do you want the widget to be? 'dark' or 'light'.</p>
								<div class="input-field">
									<input type="text" name="discordtheme" placeholder="dark" value="<?php echo $discordtheme; ?>">
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="collapsible-header"><i class="material-icons">supervisor_account</i>The Team (Section Three)</div>
						<div class="collapsible-body">
							<div class="col s4">
								<span class="card-title flow-text">Section Three</span>
								<div class="switch"> 
									<label style="font-size: 10px">
										Disable
										<input type="checkbox" name="sectionthree" <?php if ($sectionthree == 1) { echo 'checked="checked"';} else { null; } ?> value="<?php $sectionthree ?>" />
										<span class="lever"></span> 
										Enable
									</label> 
								</div>
								<p>What is the title of section three?</p>
								<div class="input-field">
									<input type="text" name="sectiontwotitle" placeholder="Test" value="<?php echo $sectiontwotitle; ?>">
								</div>
								<p>What is the passage of section two?</p>
								<div class="input-field">
									<input type="text" name="sectiontwopassage" placeholder="blah blah" value="<?php echo $sectiontwopassage; ?>">
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text">Team Members</span>
								<p>How many team leader's do you have? Max is 4 (four)</p>
								<div class="input-field">
									<input type="text" name="teammembers" placeholder="2" value="<?php echo $teammembers; ?>">
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text">Team Leader One</span>
								<p>Paste their Steam64ID in the input box. Information about the user is then fetched.</p>
								<div class="input-field">
									<input type="text" name="steamid" placeholder="76561198082330654" value="<?php echo $steamid; ?>">
								</div>
								<p>This is then where you would show what position they are.</p>
								<div class="input-field">
									<input type="text" name="memberoneposition" placeholder="C.E.O." value="<?php echo $memberoneposition; ?>">
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text">Team Leader Two</span>
								<p>Paste their Steam64ID in the input box. Information about the user is then fetched.</p>
								<div class="input-field">
									<input type="text" name="steamidtwo" placeholder="76561198082330654" value="<?php echo $steamidtwo; ?>">
								</div>
								<p>This is then where you would show what position they are.</p>
								<div class="input-field">
									<input type="text" name="membertwoposition" placeholder="C.E.O." value="<?php echo $membertwoposition; ?>">
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text">Team Leader Three</span>
								<p>Paste their Steam64ID in the input box. Information about the user is then fetched.</p>
								<div class="input-field">
									<input type="text" name="steamidthree" placeholder="76561198082330654" value="<?php echo $steamidthree; ?>">
								</div>
								<p>This is then where you would show what position they are.</p>
								<div class="input-field">
									<input type="text" name="memberthreeposition" placeholder="C.E.O." value="<?php echo $memberthreeposition; ?>">
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text">Team Leader Four</span>
								<p>Paste their Steam64ID in the input box. Information about the user is then fetched.</p>
								<div class="input-field">
									<input type="text" name="steamidfour" placeholder="76561198082330654" value="<?php echo $steamidfour; ?>">
								</div>
								<p>This is then where you would show what position they are.</p>
								<div class="input-field">
									<input type="text" name="memberfourposition" placeholder="C.E.O." value="<?php echo $memberfourposition; ?>">
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="collapsible-header"><i class="material-icons">tune</i>Servers (Section Four)</div>
						<div class="collapsible-body">
							<div class="col s4">
								<span class="card-title flow-text">Section Four</span>
								<div class="switch"> 
									<label style="font-size: 10px">
										Disable
										<input type="checkbox" name="sectionfour" <?php if ($sectionfour == 1) { echo 'checked="checked"';} else { null; } ?> value="<?php $sectionfour ?>" />
										<span class="lever"></span> 
										Enable
									</label> 
								</div>
								<p>What is the title of section four?</p>
								<div class="input-field">
									<input type="text" name="sectionthreetitle" placeholder="Test" value="<?php echo $sectionthreetitle; ?>">
								</div>
								<p>What is the passage of section three?</p>
								<div class="input-field">
									<input type="text" name="sectionthreepassage" placeholder="blah blah" value="<?php echo $sectionthreepassage; ?>">
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text"># of Servers</span>
								<p>How many servers do you have? Max is 3 (three).</p>
								<div class="input-field">
									<input type="text" name="servers" placeholder="1" value="<?php echo $servers; ?>">
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text">Server One</span>
								<p>What is the <b>gamemode</b> of this server?</p>
								<div class="input-field">
									<input type="text" name="serveronetitle" placeholder="MilitaryRP" value="<?php echo $serveronetitle; ?>">
								</div>
								<p>What image do you want to show for this server?</p>
								<div class="input-field">
									<input type="text" name="serveroneimage" placeholder="C.E.O." value="<?php echo $serveroneimage; ?>">
								</div>
								<p>What is the <b>passage</b> you want to represent about this server?</p>
								<div class="input-field">
									<input type="text" name="serveronepassage" placeholder="MilitaryRP" value="<?php echo $serveronepassage; ?>">
								</div>
								<p>What is the <b>IP</b> for this server?</p>
								<div class="input-field">
									<input type="text" name="serveroneip" placeholder="0.0.0.0" value="<?php echo $serveroneip; ?>">
								</div>
								<p>What is the <b>port</b> for this server?</p>
								<div class="input-field">
									<input type="text" name="serveroneport" placeholder="27015" value="<?php echo $serveroneport; ?>">
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text">Server Two</span>
								<p>What is the <b>gamemode</b> of this server?</p>
								<div class="input-field">
									<input type="text" name="servertwotitle" placeholder="MilitaryRP" value="<?php echo $servertwotitle; ?>">
								</div>
								<p>What image do you want to show for this server?</p>
								<div class="input-field">
									<input type="text" name="servertwoimage" placeholder="C.E.O." value="<?php echo $servertwoimage; ?>">
								</div>
								<p>What is the <b>passage</b> you want to represent about this server?</p>
								<div class="input-field">
									<input type="text" name="servertwopassage" placeholder="MilitaryRP" value="<?php echo $servertwopassage; ?>">
								</div>
								<p>What is the <b>IP</b> for this server?</p>
								<div class="input-field">
									<input type="text" name="servertwoip" placeholder="0.0.0.0" value="<?php echo $servertwoip; ?>">
								</div>
								<p>What is the <b>port</b> for this server?</p>
								<div class="input-field">
									<input type="text" name="servertwoport" placeholder="27015" value="<?php echo $servertwoport; ?>">
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text">Server Three</span>
								<p>What is the <b>gamemode</b> of this server?</p>
								<div class="input-field">
									<input type="text" name="serverthreetitle" placeholder="MilitaryRP" value="<?php echo $serverthreetitle; ?>">
								</div>
								<p>What image do you want to show for this server?</p>
								<div class="input-field">
									<input type="text" name="serverthreeimage" placeholder="C.E.O." value="<?php echo $serverthreeimage; ?>">
								</div>
								<p>What is the <b>passage</b> you want to represent about this server?</p>
								<div class="input-field">
									<input type="text" name="serverthreepassage" placeholder="MilitaryRP" value="<?php echo $serverthreepassage; ?>">
								</div>
								<p>What is the <b>IP</b> for this server?</p>
								<div class="input-field">
									<input type="text" name="serverthreeip" placeholder="0.0.0.0" value="<?php echo $serverthreeip; ?>">
								</div>
								<p>What is the <b>port</b> for this server?</p>
								<div class="input-field">
									<input type="text" name="serverthreeport" placeholder="27015" value="<?php echo $serverthreeport; ?>">
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="collapsible-header"><i class="material-icons">videocam</i>Media (Section Five)</div>
						<div class="collapsible-body">
							<div class="col s4">
								<span class="card-title flow-text">Section Five</span>
								<div class="switch"> 
									<label style="font-size: 10px">
										Disable
										<input type="checkbox" name="sectionfive" <?php if ($sectionfive == 1) { echo 'checked="checked"';} else { null; } ?> value="<?php $sectionfive ?>" />
										<span class="lever"></span> 
										Enable
									</label> 
								</div>
								<p>What is the title of section five?</p>
								<div class="input-field">
									<input type="text" name="sectionfourtitle" placeholder="Test" value="<?php echo $sectionfourtitle; ?>">
								</div>
								<p>What is the passage of section four?</p>
								<div class="input-field">
									<input type="text" name="sectionfourpassage" placeholder="blah blah" value="<?php echo $sectionfourpassage; ?>">
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text">Media One</span>
								<p>What is the <b>image url</b> of this media?</p>
								<div class="input-field">
									<input type="text" name="mediaoneimage" placeholder="MilitaryRP" value="<?php echo $mediaoneimage; ?>">
								</div>
								<p>What do you want the <b>tagline</b> of this media to be?</p>
								<div class="input-field">
									<input type="text" name="mediaonetagline" placeholder="C.E.O." value="<?php echo $mediaonetagline; ?>">
								</div>
								<p>What do you want the <b>slogan</b> of this media to be?</p>
								<div class="input-field">
									<input type="text" name="mediaoneslogan" placeholder="MilitaryRP" value="<?php echo $mediaoneslogan; ?>">
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text">Media Two</span>
								<p>What is the <b>image url</b> of this media?</p>
								<div class="input-field">
									<input type="text" name="mediatwoimage" placeholder="MilitaryRP" value="<?php echo $mediatwoimage; ?>">
								</div>
								<p>What do you want the <b>tagline</b> of this media to be?</p>
								<div class="input-field">
									<input type="text" name="mediatwotagline" placeholder="C.E.O." value="<?php echo $mediatwotagline; ?>">
								</div>
								<p>What do you want the <b>slogan</b> of this media to be?</p>
								<div class="input-field">
									<input type="text" name="mediatwoslogan" placeholder="MilitaryRP" value="<?php echo $mediatwoslogan; ?>">
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text">Media Three</span>
								<p>What is the <b>image url</b> of this media?</p>
								<div class="input-field">
									<input type="text" name="mediathreeimage" placeholder="MilitaryRP" value="<?php echo $mediathreeimage; ?>">
								</div>
								<p>What do you want the <b>tagline</b> of this media to be?</p>
								<div class="input-field">
									<input type="text" name="mediathreetagline" placeholder="C.E.O." value="<?php echo $mediathreetagline; ?>">
								</div>
								<p>What do you want the <b>slogan</b> of this media to be?</p>
								<div class="input-field">
									<input type="text" name="mediathreeslogan" placeholder="MilitaryRP" value="<?php echo $mediathreeslogan; ?>">
								</div>
							</div>
							<div class="col s4">
								<span class="card-title flow-text">Media Four</span>
								<p>What is the <b>image url</b> of this media?</p>
								<div class="input-field">
									<input type="text" name="mediafourimage" placeholder="MilitaryRP" value="<?php echo $mediafourimage; ?>">
								</div>
								<p>What do you want the <b>tagline</b> of this media to be?</p>
								<div class="input-field">
									<input type="text" name="mediafourtagline" placeholder="C.E.O." value="<?php echo $mediafourtagline; ?>">
								</div>
								<p>What do you want the <b>slogan</b> of this media to be?</p>
								<div class="input-field">
									<input type="text" name="mediafourslogan" placeholder="MilitaryRP" value="<?php echo $mediafourslogan; ?>">
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="collapsible-header"><i class="material-icons">phone_iphone</i>Socials</div>
						<div class="collapsible-body">
						<p>If you want to disable a Social button just simply leave both the <b>link</b> field blank.</p>
							<div class="col s4">
								<span class="card-title flow-text">Twitter</span>
								<p>What is the link to your community Twitter?</p>
								<div class="input-field">
									<input type="text" name="twitterlink" placeholder="http://twitter.com" value="<?php echo $twitterlink; ?>">
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text">Facebook</span>
								<p>What is the link to your community Facebook?</p>
								<div class="input-field">
									<input type="text" name="facebooklink" placeholder="http://facebook.com" value="<?php echo $facebooklink; ?>">
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text">Instagram</span>
								<p>What is the link to your community Instagram?</p>
								<div class="input-field">
									<input type="text" name="instagramlink" placeholder="http://instagram.com" value="<?php echo $instagramlink; ?>">
								</div>
							</div>
							<br>
							<br>
							<div class="col s4">
								<span class="card-title flow-text">Youtube</span>
								<p>What is the link to your community Youtube channel?</p>
								<div class="input-field">
									<input type="text" name="youtubelink" placeholder="http://youtube.com" value="<?php echo $youtubelink; ?>">
								</div>
							</div>
						</div>
					</li>
				</ul>
				<div class="valign-wrapper">
					<div class="row">
						<br>
							<span class="white-text"><b>Note:</b> If you do not see your changes right away do CTRL + Refresh. This will do a complete refresh on the page (this happens because of the brower cache).
						<br>
					</div>
				</div>
				<div class="valign-wrapper">
					<div class="row">
						<br>
						<button onclick="treatFormsAsUnchanged();" class="waves-effect waves-light btn green" type="submit" name="action">Save</button> <a class="center waves-effect waves-light btn red" href="?exit=1">Logout</a>
						<br>
						<br>
						<br>
					</div>
				</div>
			</div>
		</form>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="../assets/js/materialize.min.js"></script>
		<script>
		$('form').on('submit', function(){
		  $.post($(this).attr('action'), $(this).serialize(), function(response){
				if (response.success == true) {
					M.toast({html: '<i class="material-icons white-text">check</i> &nbsp Saving was successful!', classes: 'green'});
				} else {
					M.toast({html: '<i class="material-icons white-text">error_outline</i> &nbsp Uh Oh! there was an error with saving', classes: 'red'});
				}
		  },'json');
		  return false;
		});
		
		var textAreasChanged;
		treatFormsAsUnchanged ();
		function treatFormsAsUnchanged() {
		   textAreasChanged = false;
		}
		 
		$('textarea').on('input propertychange paste', function() {
				textAreasChanged = true;
		});
		$('form').on('input propertychange paste', function() {
				textAreasChanged = true;
		});
		 
		$(window).bind('beforeunload', function(e){
			if (textAreasChanged == true) {
				return true;
			} else {
				e=null;
			}
		});
		
		$(document).ready(function(){
			$('.collapsible').collapsible();
		});
		$(document).ready(function(){
			$('.sidenav').sidenav();
		});
		$(document).ready(function(){
			$('select').formSelect();
		});
		</script>
	</body>
</html>