<?php 
// Hello! Please do not touch this file as it is extremely important. If you want to change something then please do it via Admin Panel.
echo '
	<div class="container clearfix">
		<div class="row clearfix">
			<div class="col s12 m12 l6">
				<div class="card">
					<div class="card-content center">
						<i class="large material-icons" style="color: '.$color.';">'.$promooneicon.'</i>
						<span class="card-title" style="font-family: \'Nunito Sans\';">'.$promoone.'</span>
						<p>'.$promoonepassage.'</p>
					</div>
				</div>
			</div>
			<div class="col s12 m12 l6">
				<div class="card">
					<div class="card-content center">
						<i class="large material-icons" style="color: '.$color.';">'.$promotwoicon.'</i>
						<span class="card-title" style="font-family: \'Nunito Sans\';">'.$promotwo.'</span>
						<p>'.$promotwopassage.'</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row clearfix">
			<div class="col s12 m12 l6">
				<div class="card">
					<div class="card-content center">
						<i class="large material-icons" style="color: '.$color.';">'.$promothreeicon.'</i>
						<span class="card-title" style="font-family: \'Nunito Sans\';">'.$promothree.'</span>
						<p>'.$promothreepassage.'</p>
					</div>
				</div>
			</div>
			<div class="col s12 m12 l6">
				<div class="card">
					<div class="card-content center">
						<i class="large material-icons" style="color: '.$color.';">'.$promofouricon.'</i>
						<span class="card-title" style="font-family: \'Nunito Sans\';">'.$promofour.'</span>
						<p>'.$promofourpassage.'</p>
					</div>
				</div>
			</div>
		</div>
	</div>
';	if ($smoosh == false) { echo '
		<div class="parallax-container z-depth-2">
			<div class="parallax" style="opacity: 0.9;"><img src="'.$imagetwo.'"></div>
		</div>
'; } else { null; }
?>