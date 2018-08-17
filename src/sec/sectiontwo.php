<?php 
// Hello! Please do not touch this file as it is extremely important. If you want to change something then please do it via Admin Panel.
echo '
	<div class="container">
		<div class="row clearfix">
			<div class="col s6">
			<br><br><br><br>
				<h3 data-aos="fade-right" style="color: '.$color.'; font-family: \'Nunito Sans\';">'.$sectiononetitle.'</h3>
				'; if ($lighttheme == true) { echo '
				<p class="black-text" data-aos="fade-right" data-aos-delay="600" style="font-size: 18px;">'.$sectiononepassage.'</p>
				'; } else { echo '
				<p class="white-text" data-aos="fade-right" data-aos-delay="600" style="font-size: 18px;">'.$sectiononepassage.'</p>
				';} echo '
			</div>
			<br>
			<div class="col s12 m12 l6 center" data-aos="fade-left" data-aos-delay="600">
				<iframe class="z-depth-2" src="https://discordapp.com/widget?id='.$discordid.'&theme='.$discordtheme.'" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
			</div>
		</div>
	</div>
';	if ($smoosh == false) { echo '
		<div class="parallax-container z-depth-2">
			<div class="parallax" style="opacity: 0.9;"><img src="'.$imagethree.'"></div>
		</div>
'; } else { null; }
?>