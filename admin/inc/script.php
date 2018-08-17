<?php
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST['communitylogo'])) {
		if (isset($_POST['justnothing'])) {
			$justnothing = ($_POST['justnothing']);
		}
		if (isset($_POST['SteamKey'])) {
			$SteamKey = ($_POST['SteamKey']);
		}
		if (isset($_POST['teammembers'])) {
			$teammembers = ($_POST['teammembers']);
		}
		if (isset($_POST['metadescription'])) {
			$metadescription = ($_POST['metadescription']);
		}
		if (isset($_POST['metakeywords'])) {
			$metakeywords = ($_POST['metakeywords']);
		}
		if (isset($_POST['steamid'])) {
			$steamid = ($_POST['steamid']);
		}
		if (isset($_POST['memberoneposition'])) {
			$memberoneposition = ($_POST['memberoneposition']);
		}
		if (isset($_POST['steamidtwo'])) {
			$steamidtwo = ($_POST['steamidtwo']);
		}
		if (isset($_POST['membertwoposition'])) {
			$membertwoposition = ($_POST['membertwoposition']);
		}
		if (isset($_POST['steamidthree'])) {
			$steamidthree = ($_POST['steamidthree']);
		}
		if (isset($_POST['memberthreeposition'])) {
			$memberthreeposition = ($_POST['memberthreeposition']);
		}
		if (isset($_POST['steamidfour'])) {
			$steamidfour = ($_POST['steamidfour']);
		}
		if (isset($_POST['memberfourposition'])) {
			$memberfourposition = ($_POST['memberfourposition']);
		}
		if (isset($_POST['color'])) {
			$color = ($_POST['color']);
		}
		if (isset($_POST['communityname'])) {
			$communityname = ($_POST['communityname']);
		}
		if (isset($_POST['communitylogo'])) {
			$communitylogo = ($_POST['communitylogo']);
		}
		if (isset($_POST['btnone'])) {
			$btnone = ($_POST['btnone']);
		}
		if (isset($_POST['btnonelink'])) {
			$btnonelink = ($_POST['btnonelink']);
		}
		if (isset($_POST['btntwo'])) {
			$btntwo = ($_POST['btntwo']);
		}
		if (isset($_POST['btntwolink'])) {
			$btntwolink = ($_POST['btntwolink']);
		}
		if (isset($_POST['btnthree'])) {
			$btnthree = ($_POST['btnthree']);
		}
		if (isset($_POST['btnthreelink'])) {
			$btnthreelink = ($_POST['btnthreelink']);
		}
		if (isset($_POST['header'])) {
			$header = ($_POST['header']);
		}
		if (isset($_POST['paragraph'])) {
			$paragraph = ($_POST['paragraph']);
		}
		if (isset($_POST['imageone'])) {
			$imageone = ($_POST['imageone']);
		}
		if (isset($_POST['imagetwo'])) {
			$imagetwo = ($_POST['imagetwo']);
		}
		if (isset($_POST['imagethree'])) {
			$imagethree = ($_POST['imagethree']);
		}
		if (isset($_POST['imagefour'])) {
			$imagefour = ($_POST['imagefour']);
		}
		if (isset($_POST['imagefive'])) {
			$imagefive = ($_POST['imagefive']);
		}
		if (isset($_POST['promoone'])) {
			$promoone = ($_POST['promoone']);
		}
		if (isset($_POST['promooneicon'])) {
			$promooneicon = ($_POST['promooneicon']);
		}
		if (isset($_POST['promoonepassage'])) {
			$promoonepassage = ($_POST['promoonepassage']);
		}
		if (isset($_POST['promotwo'])) {
			$promotwo = ($_POST['promotwo']);
		}
		if (isset($_POST['promotwoicon'])) {
			$promotwoicon = ($_POST['promotwoicon']);
		}
		if (isset($_POST['promotwopassage'])) {
			$promotwopassage = ($_POST['promotwopassage']);
		}
		if (isset($_POST['promothree'])) {
			$promothree = ($_POST['promothree']);
		}
		if (isset($_POST['promothreeicon'])) {
			$promothreeicon = ($_POST['promothreeicon']);
		}
		if (isset($_POST['promothreepassage'])) {
			$promothreepassage = ($_POST['promothreepassage']);
		}
		if (isset($_POST['promofour'])) {
			$promofour = ($_POST['promofour']);
		}
		if (isset($_POST['promofouricon'])) {
			$promofouricon = ($_POST['promofouricon']);
		}
		if (isset($_POST['promofourpassage'])) {
			$promofourpassage = ($_POST['promofourpassage']);
		}
		if (isset($_POST['lighttheme'])) {
			$lighttheme = true;
		} else {
			$lighttheme = false;
		}
		if (isset($_POST['smoosh'])) {
			$smoosh = true;
		} else {
			$smoosh = false;
		}
		if (isset($_POST['sectionone'])) {
			$sectionone = true;
		} else {
			$sectionone = false;
		}
		if (isset($_POST['sectiontwo'])) {
			$sectiontwo = true;
		} else {
			$sectiontwo = false;
		}
		if (isset($_POST['sectionthree'])) {
			$sectionthree = true;
		} else {
			$sectionthree = false;
		}
		if (isset($_POST['sectionfour'])) {
			$sectionfour = true;
		} else {
			$sectionfour = false;
		}
		if (isset($_POST['sectionfive'])) {
			$sectionfive = true;
		} else {
			$sectionfive = false;
		}
		if (isset($_POST['sectiononetitle'])) {
			$sectiononetitle = ($_POST['sectiononetitle']);
		}
		if (isset($_POST['sectiontwotitle'])) {
			$sectiontwotitle = ($_POST['sectiontwotitle']);
		}
		if (isset($_POST['sectionthreetitle'])) {
			$sectionthreetitle = ($_POST['sectionthreetitle']);
		}
		if (isset($_POST['sectionfourtitle'])) {
			$sectionfourtitle = ($_POST['sectionfourtitle']);
		}
		if (isset($_POST['sectiononepassage'])) {
			$sectiononepassage = ($_POST['sectiononepassage']);
		}
		if (isset($_POST['sectiontwopassage'])) {
			$sectiontwopassage = ($_POST['sectiontwopassage']);
		}
		if (isset($_POST['sectionthreepassage'])) {
			$sectionthreepassage = ($_POST['sectionthreepassage']);
		}
		if (isset($_POST['sectionfourpassage'])) {
			$sectionfourpassage = ($_POST['sectionfourpassage']);
		}
		if (isset($_POST['discordid'])) {
			$discordid = ($_POST['discordid']);
		}
		if (isset($_POST['discordtheme'])) {
			$discordtheme = ($_POST['discordtheme']);
		}
		if (isset($_POST['servers'])) {
			$servers = ($_POST['servers']);
		}
		if (isset($_POST['serveronetitle'])) {
			$serveronetitle = ($_POST['serveronetitle']);
		}
		if (isset($_POST['serveroneimage'])) {
			$serveroneimage = ($_POST['serveroneimage']);
		}
		if (isset($_POST['serveronepassage'])) {
			$serveronepassage = ($_POST['serveronepassage']);
		}
		if (isset($_POST['serveroneip'])) {
			$serveroneip = ($_POST['serveroneip']);
		}
		if (isset($_POST['serveroneport'])) {
			$serveroneport = ($_POST['serveroneport']);
		}
		if (isset($_POST['servertwotitle'])) {
			$servertwotitle = ($_POST['servertwotitle']);
		}
		if (isset($_POST['servertwoimage'])) {
			$servertwoimage = ($_POST['servertwoimage']);
		}
		if (isset($_POST['servertwopassage'])) {
			$servertwopassage = ($_POST['servertwopassage']);
		}
		if (isset($_POST['servertwoip'])) {
			$servertwoip = ($_POST['servertwoip']);
		}
		if (isset($_POST['servertwoport'])) {
			$servertwoport = ($_POST['servertwoport']);
		}
		if (isset($_POST['serverthreetitle'])) {
			$serverthreetitle = ($_POST['serverthreetitle']);
		}
		if (isset($_POST['serverthreeimage'])) {
			$serverthreeimage = ($_POST['serverthreeimage']);
		}
		if (isset($_POST['serverthreepassage'])) {
			$serverthreepassage = ($_POST['serverthreepassage']);
		}
		if (isset($_POST['serverthreeip'])) {
			$serverthreeip = ($_POST['serverthreeip']);
		}
		if (isset($_POST['serverthreeport'])) {
			$serverthreeport = ($_POST['serverthreeport']);
		}
		if (isset($_POST['mediaoneimage'])) {
			$mediaoneimage = ($_POST['mediaoneimage']);
		}
		if (isset($_POST['mediaonetagline'])) {
			$mediaonetagline = ($_POST['mediaonetagline']);
		}
		if (isset($_POST['mediaoneslogan'])) {
			$mediaoneslogan = ($_POST['mediaoneslogan']);
		}
		if (isset($_POST['mediatwoimage'])) {
			$mediatwoimage = ($_POST['mediatwoimage']);
		}
		if (isset($_POST['mediatwotagline'])) {
			$mediatwotagline = ($_POST['mediatwotagline']);
		}
		if (isset($_POST['mediatwoslogan'])) {
			$mediatwoslogan = ($_POST['mediatwoslogan']);
		}
		if (isset($_POST['mediathreeimage'])) {
			$mediathreeimage = ($_POST['mediathreeimage']);
		}
		if (isset($_POST['mediathreetagline'])) {
			$mediathreetagline = ($_POST['mediathreetagline']);
		}
		if (isset($_POST['mediathreeslogan'])) {
			$mediathreeslogan = ($_POST['mediathreeslogan']);
		}
		if (isset($_POST['mediafourimage'])) {
			$mediafourimage = ($_POST['mediafourimage']);
		}
		if (isset($_POST['mediafourtagline'])) {
			$mediafourtagline = ($_POST['mediafourtagline']);
		}
		if (isset($_POST['mediafourslogan'])) {
			$mediafourslogan = ($_POST['mediafourslogan']);
		}
		if (isset($_POST['twitterlink'])) {
			$twitterlink = ($_POST['twitterlink']);
		}
		if (isset($_POST['facebooklink'])) {
			$facebooklink = ($_POST['facebooklink']);
		}
		if (isset($_POST['instagramlink'])) {
			$instagramlink = ($_POST['instagramlink']);
		}
		if (isset($_POST['youtubelink'])) {
			$youtubelink = ($_POST['youtubelink']);
		}
		
		file_put_contents('../src/inc/config.php',
	'<?php
		$SteamKey = "'.$SteamKey.'";
		$teammembers = "'.$teammembers.'";
		$metadescription = "'.$metadescription.'";
		$metakeywords = "'.$metakeywords.'";
		$lighttheme = "'.$lighttheme.'";
		$smoosh = "'.$smoosh.'";
		$steamid = "'.$steamid.'";
		$memberoneposition = "'.$memberoneposition.'";
		$steamidtwo = "'.$steamidtwo.'";
		$membertwoposition = "'.$membertwoposition.'";
		$steamidthree = "'.$steamidthree.'";
		$memberthreeposition = "'.$memberthreeposition.'";
		$steamidfour = "'.$steamidfour.'";
		$memberfourposition = "'.$memberfourposition.'";
		$color = "'.$color.'";
		$communityname = "'.$communityname.'";
		$communitylogo = "'.$communitylogo.'";
		$btnone = "'.$btnone.'";
		$btnonelink = "'.$btnonelink.'";
		$btntwo = "'.$btntwo.'";
		$btntwolink = "'.$btntwolink.'";
		$btnthree = "'.$btnthree.'";
		$btnthreelink = "'.$btnthreelink.'";
		$header = "'.$header.'";
		$paragraph = "'.$paragraph.'";
		$imageone = "'.$imageone.'";
		$imagetwo = "'.$imagetwo.'";
		$imagethree = "'.$imagethree.'";
		$imagefour = "'.$imagefour.'";
		$imagefive = "'.$imagefive.'";
		$promoone = "'.$promoone.'";
		$promooneicon = "'.$promooneicon.'";
		$promoonepassage = "'.$promoonepassage.'";
		$promotwo = "'.$promotwo.'";
		$promotwoicon = "'.$promotwoicon.'";
		$promotwopassage = "'.$promotwopassage.'";
		$promothree = "'.$promothree.'";
		$promothreeicon = "'.$promothreeicon.'";
		$promothreepassage = "'.$promothreepassage.'";
		$promofour = "'.$promofour.'";
		$promofouricon = "'.$promofouricon.'";
		$promofourpassage = "'.$promofourpassage.'";
		$sectionone = "'.$sectionone.'";
		$sectiontwo = "'.$sectiontwo.'";
		$sectionthree = "'.$sectionthree.'";
		$sectionfour = "'.$sectionfour.'";
		$sectionfive = "'.$sectionfive.'";
		$sectiononetitle = "'.$sectiononetitle.'";
		$sectiontwotitle = "'.$sectiontwotitle.'";
		$sectionthreetitle = "'.$sectionthreetitle.'";
		$sectionfourtitle = "'.$sectionfourtitle.'";
		$sectiononepassage = "'.$sectiononepassage.'";
		$sectiontwopassage = "'.$sectiontwopassage.'";
		$sectionthreepassage = "'.$sectionthreepassage.'";
		$sectionfourpassage = "'.$sectionfourpassage.'";
		$discordid = "'.$discordid.'";
		$discordtheme = "'.$discordtheme.'";
		$servers = "'.$servers.'";
		$serveronetitle = "'.$serveronetitle.'";
		$serveroneimage = "'.$serveroneimage.'";
		$serveronepassage = "'.$serveronepassage.'";
		$serveroneip = "'.$serveroneip.'";
		$serveroneport = "'.$serveroneport.'";
		$servertwotitle = "'.$servertwotitle.'";
		$servertwoimage = "'.$servertwoimage.'";
		$servertwopassage = "'.$servertwopassage.'";
		$servertwoip = "'.$servertwoip.'";
		$servertwoport = "'.$servertwoport.'";
		$serverthreetitle = "'.$serverthreetitle.'";
		$serverthreeimage = "'.$serverthreeimage.'";
		$serverthreepassage = "'.$serverthreepassage.'";
		$serverthreeip = "'.$serverthreeip.'";
		$serverthreeport = "'.$serverthreeport.'";
		$mediaoneimage = "'.$mediaoneimage.'";
		$mediaonetagline = "'.$mediaonetagline.'";
		$mediaoneslogan = "'.$mediaoneslogan.'";
		$mediatwoimage = "'.$mediatwoimage.'";
		$mediatwotagline = "'.$mediatwotagline.'";
		$mediatwoslogan = "'.$mediatwoslogan.'";
		$mediathreeimage = "'.$mediathreeimage.'";
		$mediathreetagline = "'.$mediathreetagline.'";
		$mediathreeslogan = "'.$mediathreeslogan.'";
		$mediafourimage = "'.$mediafourimage.'";
		$mediafourtagline = "'.$mediafourtagline.'";
		$mediafourslogan = "'.$mediafourslogan.'";
		$twitterlink = "'.$twitterlink.'";
		$facebooklink = "'.$facebooklink.'";
		$instagramlink = "'.$instagramlink.'";
		$youtubelink = "'.$youtubelink.'";
	?>'
	);
	
	header('Content-Type: application/json');
	echo json_encode(array(
		'success' => true
	));
	die ();
}
}
?>