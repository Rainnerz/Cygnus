<?php 
// Hello! Please do not touch this file as it is extremely important. If you want to change something then please do it via Admin Panel.
echo '
		<div class="container">
			<div class="row clearfix">
				<div class="col s6 offset-s3">
					<br>
						<h3 class="center" data-aos="fade-down" style="color: '.$color.'; font-family: \'Nunito Sans\';">'.$sectionfourtitle.'</h3>
						'; if ($lighttheme == true) { echo '
						<p class="center black-text" data-aos="fade" data-aos-delay="600" style="font-size: 18px;">'.$sectionfourpassage.'</p>
						'; } else { echo '
						<p class="center white-text" data-aos="fade" data-aos-delay="600" style="font-size: 18px;">'.$sectionfourpassage.'</p>
						'; } echo '
				</div>
			</div>
			<div class="row clearfix">
				<div class="slider">
					<ul class="slides">
						<li>
							<img src="'.$mediaoneimage.'">
							<div class="caption left-align">
								<h3>'.$mediaonetagline.'</h3>
								<h5 class="light grey-text text-lighten-3">'.$mediaoneslogan.'</h5>
							</div>
						</li>
						<li>
							<img src="'.$mediatwoimage.'">
							<div class="caption center-align">
								<h3>'.$mediatwotagline.'</h3>
								<h5 class="light grey-text text-lighten-3">'.$mediatwoslogan.'</h5>
							</div>
						</li>
						<li>
							<img src="'.$mediathreeimage.'">
							<div class="caption right-align">
								<h3>'.$mediathreetagline.'</h3>
								<h5 class="light grey-text text-lighten-3">'.$mediathreeslogan.'</h5>
							</div>
						</li>
						<li>
							<img src="'.$mediafourimage.'">
							<div class="caption center-align">
								<h3>'.$mediafourtagline.'</h3>
								<h5 class="light grey-text text-lighten-3">'.$mediafourslogan.'</h5>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
'; ?>