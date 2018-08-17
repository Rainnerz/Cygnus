<?php 
// Hello! Please do not touch this file as it is extremely important. If you want to change something then please do it via Admin Panel.
echo '
	<div class="container">
		<div class="row clearfix">
			<div class="col s6">
			<br>
				<h3 data-aos="fade-right" style="color: '.$color.'; font-family: \'Nunito Sans\';">'.$sectiontwotitle.'</h3>
				'; if ($lighttheme == true) { echo '
				<p class="black-text" data-aos="fade-right" data-aos-delay="600" style="font-size: 18px;">'.$sectiontwopassage.'</p>
				'; } else { echo '
				<p class="white-text" data-aos="fade-right" data-aos-delay="600" style="font-size: 18px;">'.$sectiontwopassage.'</p>
				'; } echo '
			</div>
		</div>
		<div class="row clearfix">
';
if ($teammembers == 1) { echo '
			<div class="col l4 offset-l4 s12 m12" data-aos="fade" data-aos-delay="600">
				<div class="materialboxed card-image center">
					<a href="'.$json["response"]["players"][0]["profileurl"].'" target="_blank" title="Click to see '.$json["response"]["players"][0]["personaname"].'\'s Profile">
						<img class="z-depth-2" src="'.$json["response"]["players"][0]["avatarfull"].'" style="border: 3px solid '.$color.'; border-radius:5px; max-width:100%; height:auto;">
					</a>
				</div>
				<div class="center">
					<span class="truncate flow-text center-align" style="color: '.$color.'; font-family: \'Nunito Sans\';">'.$json["response"]["players"][0]["personaname"].'</span>
				</div>
				<div class="center">
				'; if ($lighttheme == true) { echo '
					<span class="flow-text black-text center-align">'.$memberoneposition.'</span>
				'; } else { echo '
					<span class="flow-text white-text center-align">'.$memberoneposition.'</span>
				'; } echo '
				</div>
			</div>
'; }
if ($teammembers == 2) { echo '
			<div class="col l3 offset-l3 s12 m12" data-aos="fade" data-aos-delay="600">
				<div class="materialboxed card-image center">
					<a href="'.$json["response"]["players"][0]["profileurl"].'" target="_blank" title="Click to see '.$json["response"]["players"][0]["personaname"].'\'s Profile">
						<img class="z-depth-2" src="'.$json["response"]["players"][0]["avatarfull"].'" style="border: 3px solid '.$color.'; border-radius:5px; max-width:100%; height:auto;">
					</a>
				</div>
				<div class="center">
					<span class="truncate card-title flow-text center-align" style="color: '.$color.'; font-family: \'Nunito Sans\';">'.$json["response"]["players"][0]["personaname"].'</span>
				</div>
				<div class="center">
				'; if ($lighttheme == true) { echo '
					<span class="flow-text black-text center-align">'.$memberoneposition.'</span>
				'; } else { echo '
					<span class="flow-text white-text center-align">'.$memberoneposition.'</span>
				'; } echo '
				</div>
			</div>
			<div class="col l3 s12 m12" data-aos="fade" data-aos-delay="600">
				<div class="materialboxed card-image center">
					<a href="'.$jsontwo["response"]["players"][0]["profileurl"].'" target="_blank" title="Click to see '.$jsontwo["response"]["players"][0]["personaname"].'\'s Profile">
						<img class="z-depth-2" src="'.$jsontwo["response"]["players"][0]["avatarfull"].'" style="border: 3px solid '.$color.'; border-radius:5px; max-width:100%; height:auto;">
					</a>
				</div>
				<div class="center">
					<span class="truncate card-title flow-text center-align" style="color: '.$color.'; font-family: \'Nunito Sans\';">'.$jsontwo["response"]["players"][0]["personaname"].'</span>
				</div>
				<div class="center">
				'; if ($lighttheme == true) { echo '
					<span class="flow-text black-text center-align">'.$membertwoposition.'</span>
				'; } else { echo '
					<span class="flow-text white-text center-align">'.$membertwoposition.'</span>
				'; } echo '
				</div>
			</div>
'; }
if ($teammembers == 3) { echo '
			<div class="col l3 offset-l2 s12 m12" data-aos="fade" data-aos-delay="600">
				<div class="materialboxed card-image center">
					<a href="'.$json["response"]["players"][0]["profileurl"].'" target="_blank" title="Click to see '.$json["response"]["players"][0]["personaname"].'\'s Profile">
						<img class="z-depth-2" src="'.$json["response"]["players"][0]["avatarfull"].'" style="border: 3px solid '.$color.'; border-radius:5px; max-width:100%; height:auto;">
					</a>
				</div>
				<div class="center">
					<span class="truncate card-title flow-text center-align" style="color: '.$color.'; font-family: \'Nunito Sans\';">'.$json["response"]["players"][0]["personaname"].'</span>
				</div>
				<div class="center">
				'; if ($lighttheme == true) { echo '
					<span class="flow-text black-text center-align">'.$memberoneposition.'</span>
				'; } else { echo '
					<span class="flow-text white-text center-align">'.$memberoneposition.'</span>
				'; } echo '
				</div>
			</div>
			<div class="col l3 s12 m12" data-aos="fade" data-aos-delay="600">
				<div class="materialboxed card-image center">
					<a href="'.$jsontwo["response"]["players"][0]["profileurl"].'" target="_blank" title="Click to see '.$jsontwo["response"]["players"][0]["personaname"].'\'s Profile">
						<img class="z-depth-2" src="'.$jsontwo["response"]["players"][0]["avatarfull"].'" style="border: 3px solid '.$color.'; border-radius:5px; max-width:100%; height:auto;">
					</a>
				</div>
				<div class="center">
					<span class="truncate card-title flow-text center-align" style="color: '.$color.'; font-family: \'Nunito Sans\';">'.$jsontwo["response"]["players"][0]["personaname"].'</span>
				</div>
				<div class="center">
				'; if ($lighttheme == true) { echo '
					<span class="flow-text black-text center-align">'.$membertwoposition.'</span>
				'; } else { echo '
					<span class="flow-text white-text center-align">'.$membertwoposition.'</span>
				'; } echo '
				</div>
			</div>
			<div class="col l3 s12 m12" data-aos="fade" data-aos-delay="600">
				<div class="materialboxed card-image center">
					<a href="'.$jsonthree["response"]["players"][0]["profileurl"].'" target="_blank" title="Click to see '.$jsonthree["response"]["players"][0]["personaname"].'\'s Profile">
						<img class="z-depth-2" src="'.$jsonthree["response"]["players"][0]["avatarfull"].'" style="border: 3px solid '.$color.'; border-radius:5px; max-width:100%; height:auto;">
					</a>
				</div>
				<div class="center">
					<span class="truncate card-title flow-text center-align" style="color: '.$color.'; font-family: \'Nunito Sans\';">'.$jsonthree["response"]["players"][0]["personaname"].'</span>
				</div>
				<div class="center">
				'; if ($lighttheme == true) { echo '
					<span class="flow-text black-text center-align">'.$memberthreeposition.'</span>
				'; } else { echo '
					<span class="flow-text white-text center-align">'.$memberthreeposition.'</span>
				'; } echo '
				</div>
			</div>
'; }
if ($teammembers == 4) { echo '
			<div class="col l3 s12 m12" data-aos="fade" data-aos-delay="600">
				<div class="materialboxed card-image center">
					<a href="'.$json["response"]["players"][0]["profileurl"].'" target="_blank" title="Click to see '.$json["response"]["players"][0]["personaname"].'\'s Profile">
						<img class="z-depth-2" src="'.$json["response"]["players"][0]["avatarfull"].'" style="border: 3px solid '.$color.'; border-radius:5px; max-width:100%; height:auto;">
					</a>
				</div>
				<div class="center">
					<span class="truncate card-title flow-text center-align" style="color: '.$color.'; font-family: \'Nunito Sans\';">'.$json["response"]["players"][0]["personaname"].'</span>
				</div>
				<div class="center">
				'; if ($lighttheme == true) { echo '
					<span class="flow-text black-text center-align">'.$memberoneposition.'</span>
				'; } else { echo '
					<span class="flow-text white-text center-align">'.$memberoneposition.'</span>
				'; } echo '
				</div>
			</div>
			<div class="col l3 s12 m12" data-aos="fade" data-aos-delay="600">
				<div class="materialboxed card-image center">
					<a href="'.$jsontwo["response"]["players"][0]["profileurl"].'" target="_blank" title="Click to see '.$jsontwo["response"]["players"][0]["personaname"].'\'s Profile">
						<img class="z-depth-2" src="'.$jsontwo["response"]["players"][0]["avatarfull"].'" style="border: 3px solid '.$color.'; border-radius:5px; max-width:100%; height:auto;">
					</a>
				</div>
				<div class="center">
					<span class="truncate card-title flow-text center-align" style="color: '.$color.'; font-family: \'Nunito Sans\';">'.$jsontwo["response"]["players"][0]["personaname"].'</span>
				</div>
				<div class="center">
				'; if ($lighttheme == true) { echo '
					<span class="flow-text black-text center-align">'.$membertwoposition.'</span>
				'; } else { echo '
					<span class="flow-text white-text center-align">'.$membertwoposition.'</span>
				'; } echo '
				</div>
			</div>
			<div class="col l3 s12 m12" data-aos="fade" data-aos-delay="600">
				<div class="materialboxed card-image center">
					<a href="'.$jsonthree["response"]["players"][0]["profileurl"].'" target="_blank" title="Click to see '.$jsonthree["response"]["players"][0]["personaname"].'\'s Profile">
						<img class="z-depth-2" src="'.$jsonthree["response"]["players"][0]["avatarfull"].'" style="border: 3px solid '.$color.'; border-radius:5px; max-width:100%; height:auto;">
					</a>
				</div>
				<div class="center">
					<span class="truncate card-title flow-text center-align" style="color: '.$color.'; font-family: \'Nunito Sans\';">'.$jsonthree["response"]["players"][0]["personaname"].'</span>
				</div>
				<div class="center">
				'; if ($lighttheme == true) { echo '
					<span class="flow-text black-text center-align">'.$memberthreeposition.'</span>
				'; } else { echo '
					<span class="flow-text white-text center-align">'.$memberthreeposition.'</span>
				'; } echo '
				</div>
			</div>
			<div class="col l3 s12 m12" data-aos="fade" data-aos-delay="600">
				<div class="materialboxed card-image center">
					<a href="'.$jsonfour["response"]["players"][0]["profileurl"].'" target="_blank" title="Click to see '.$jsonfour["response"]["players"][0]["personaname"].'\'s Profile">
						<img class="z-depth-2" src="'.$jsonfour["response"]["players"][0]["avatarfull"].'" style="border: 3px solid '.$color.'; border-radius:5px; max-width:100%; height:auto;">
					</a>
				</div>
				<div class="center">
					<span class="truncate card-title flow-text center-align" style="color: '.$color.'; font-family: \'Nunito Sans\';">'.$jsonfour["response"]["players"][0]["personaname"].'</span>
				</div>
				<div class="center">
				'; if ($lighttheme == true) { echo '
					<span class="flow-text black-text center-align">'.$memberfourposition.'</span>
				'; } else { echo '
					<span class="flow-text white-text center-align">'.$memberfourposition.'</span>
				'; } echo '
				</div>
			</div>
'; }
echo '
			</div>
		</div>
';	if ($smoosh == false) { echo '
		<div class="parallax-container z-depth-2">
			<div class="parallax" style="opacity: 0.9;"><img src="'.$imagefour.'"></div>
		</div>
'; } else { null; }
?>