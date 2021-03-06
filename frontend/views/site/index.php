<?php

use rmrevin\yii\fontawesome\FA;
$this->title = 'Pusat Perencanaan Karir';
?>
<!-- Masthead Section -->
<div class="masthead">
	<div class="masthead-cover"></div>
	<div class="container text-center masthead-content">
		<h1 class="title MuseoSlab-500Italic">Pusat Perencanaan Karir</h1>
		<div class="row">
			<div class="col-md-12 text-center">
				<?php
				if (Yii::$app->user->isGuest){
					echo '<button class="btn btn-primary btn-lg main-button">Daftar</button>';
					echo '<button class="btn btn-success btn-lg main-button">Masuk</button>';
				}else{
					echo '<h1 class="title MuseoSlab-500">Halo, '.Yii::$app->user->identity->username.'!</h1>';
				}
				?>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row text-center" id="main-menu">
		<div class="col-md-4" id="kuesioner-kesiapan">
			<button class="btn btn-main-menu btn-circle btn-outline"><?php echo FA::icon('briefcase')->size(FA::SIZE_2X); ?></button>
		</div>
		<div class="col-md-4" id="kuesioner-karir">
			<button class="btn btn-main-menu btn-circle btn-outline"><?php echo FA::icon('check')->size(FA::SIZE_2X); ?></button>
		</div>
		<div class="col-md-4" id="kuesioner-kepribadian">
			<button class="btn btn-main-menu btn-circle btn-outline"><?php echo FA::icon('pie-chart')->size(FA::SIZE_2X); ?></button>
		</div>
	</div>
</div>