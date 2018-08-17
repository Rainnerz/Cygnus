<?php 
// Hello! Please do not touch this file as it is extremely important. If you want to change something then please do it via Admin Panel.
echo '
	<div class="container">
			<div class="row clearfix">
				<div class="col s6">
					<br>
						<h3 data-aos="fade-right" style="color: '.$color.'; font-family: \'Nunito Sans\';">'.$sectionthreetitle.'</h3>
						'; if ($lighttheme == true) { echo '
						<p data-aos="fade-right" data-aos-delay="600" style="font-size: 18px;">'.$sectionthreepassage.'</p>
						'; } else { echo '
						<p class="white-text" data-aos="fade-right" data-aos-delay="600" style="font-size: 18px;">'.$sectionthreepassage.'</p>
						'; } echo '
				</div>
			</div>
'; 			
if ($servers == 1) echo '
			<div class="row clearfix">
				<div class="col l4 offset-l4 s12 m12 center" data-aos="fade" data-aos-delay="600">
					<div class="card">
						<div class="card-image">
							<img src="'.$serveroneimage.'">
							<span class="left-align card-title truncate" style="font-family: \'Nunito Sans\';"><b>'.$serveronetitle.'</b> - <b>'.$infos['players'].'</b> / <b>'.$infos['places'].'</b><br>'.$infos['name'].'</span>
							<a class="btn-floating halfway-fab waves-effect waves-light z-depth-2 tooltipped" data-position="left" data-delay="50" data-tooltip="Join Server" href="steam://connect/'.$serveroneip.':'.$serveroneport.'" target="_blank"><i class="material-icons small">rss_feed</i></a>
						</div>
						<div class="card-content">
							<p>'.$serveronepassage.'</p>
						</div>
					</div>
				</div>
			</div>
';			
if ($servers == 2) echo '
			<div class="row clearfix">
				<div class="col l4 offset-l2 s12 m12 center" data-aos="fade-right" data-aos-delay="600">
					<div class="card">
						<div class="card-image">
							<img src="'.$serveroneimage.'">
							<span class="left-align card-title truncate" style="font-family: \'Nunito Sans\';"><b>'.$serveronetitle.'</b> - <b>'.$infos['players'].'</b> / <b>'.$infos['places'].'</b><br>'.$infos['name'].'</span>
							<a class="btn-floating halfway-fab waves-effect waves-light z-depth-2 tooltipped" data-position="left" data-delay="50" data-tooltip="Join Server" href="steam://connect/'.$serveroneip.':'.$serveroneport.'" target="_blank"><i class="material-icons small">rss_feed</i></a>
						</div>
						<div class="card-content">
							<p>'.$serveronepassage.'</p>
						</div>
					</div>
				</div>
				<div class="col l4 s12 m12 center" data-aos="fade-left" data-aos-delay="600">
					<div class="card">
						<div class="card-image">
							<img src="'.$servertwoimage.'">
							<span class="left-align card-title truncate" style="font-family: \'Nunito Sans\';"><b>'.$servertwotitle.' - '.$infostwo['players'].'</b> / <b>'.$infostwo['places'].'</b><br>'.$infostwo['name'].'</span>
							<a class="btn-floating halfway-fab waves-effect waves-light z-depth-2 tooltipped" data-position="left" data-delay="50" data-tooltip="Join Server" href="steam://connect/'.$servertwoip.':'.$servertwoport.'" target="_blank"><i class="material-icons small">rss_feed</i></a>
						</div>
						<div class="card-content">
							<p>'.$servertwopassage.'</p>
						</div>
					</div>
				</div>
			</div>
'; 			
if ($servers == 3) echo '
			<div class="row clearfix">
				<div class="col l4 s12 m12 center" data-aos="fade-right" data-aos-delay="600">
					<div class="card">
						<div class="card-image">
							<img src="'.$serveroneimage.'">
							<span class="left-align card-title truncate" style="font-family: \'Nunito Sans\';"><b>'.$serveronetitle.'</b> - <b>'.$infos['players'].'</b> / <b>'.$infos['places'].'</b><br>'.$infos['name'].'</span>
							<a class="btn-floating halfway-fab waves-effect waves-light z-depth-2 tooltipped" data-position="left" data-delay="50" data-tooltip="Join Server" href="steam://connect/'.$serveroneip.':'.$serveroneport.'" target="_blank"><i class="material-icons small">rss_feed</i></a>
						</div>
						<div class="card-content">
							<p>'.$serveronepassage.'</p>
						</div>
					</div>
				</div>
				<div class="col l4 s12 m12 center" data-aos="fade" data-aos-delay="600">
					<div class="card">
						<div class="card-image">
							<img src="'.$servertwoimage.'">
							<span class="left-align card-title truncate" style="font-family: \'Nunito Sans\';"><b>'.$servertwotitle.'</b> - <b>'.$infostwo['players'].'</b> / <b>'.$infostwo['places'].'</b><br>'.$infostwo['name'].'</span>
							<a class="btn-floating halfway-fab waves-effect waves-light z-depth-2 tooltipped" data-position="left" data-delay="50" data-tooltip="Join Server" href="steam://connect/'.$servertwoip.':'.$servertwoport.'" target="_blank"><i class="material-icons small">rss_feed</i></a>
						</div>
						<div class="card-content">
							<p>'.$servertwopassage.'</p>
						</div>
					</div>
				</div>
				<div class="col l4 s12 m12 center" data-aos="fade-left" data-aos-delay="600">
					<div class="card">
						<div class="card-image">
							<img src="'.$serverthreeimage.'">
							<span class="left-align card-title truncate" style="font-family: \'Nunito Sans\';"><b>'.$serverthreetitle.'</b> - <b>'.$infosthree['players'].'</b> / <b>'.$infosthree['places'].'</b><br>'.$infosthree['name'].'</span>
							<a class="btn-floating halfway-fab waves-effect waves-light z-depth-2 tooltipped" data-position="left" data-delay="50" data-tooltip="Join Server" href="steam://connect/'.$serverthreeip.':'.$serverthreeport.'" target="_blank"><i class="material-icons small">rss_feed</i></a>
						</div>
						<div class="card-content">
							<p>'.$serverthreepassage.'</p>
						</div>
					</div>
				</div>
			</div>
';
echo '
			</div>
		</div>
';	if ($smoosh == false) { echo '
		<div class="parallax-container z-depth-2">
			<div class="parallax" style="opacity: 0.9;"><img src="'.$imagefive.'"></div>
		</div>
'; } else { null; }
?>