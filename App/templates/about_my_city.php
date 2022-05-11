<!doctype html>
<html>
	<head>
		<title>My city - Hamburg</title>
		 <?php require \App\View::$templatePath . '\head.php';?>
	</head>
	<body>
		<?php require \App\View::$templatePath . '\header.php';?>
		<div class="row">
			<div class="col-md-6">
				<img src="/App/assets/img/hamburg.jpg" class="hamburg" alt="Das beeindruckende Hamburger Rathaus">
			</div>
			<div class="col-md-6">
				<img src="/App/assets/img/Deichstrasse.jpg" class="hamburg" alt="Das beeindruckende Hamburger Rathaus">
			</div>
		</div>
 
		<h1 class="welcome">Herzlich willkommen in Hamburg!</h1>
		<h2 class="welcome">Viel Spas beim Besuch die schönen und sehenswerten Orte!</h2>
		<div class="row">
			<?php foreach($sightsList as $sight): ?>
					<div class="col-md-12">
						<div class="sight">
							
							<div class="sight-title">
								<img src="/App/assets/img/hamburg.jpg" class="hamburg-sights" alt="Das beeindruckende Hamburger Rathaus">



								<!--<div class="row hamburg-sights">
									<div class="col-md-12">
										<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
											<div class="carousel-indicators">
												<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
												<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
												<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
											</div>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img src="/App/assets/img/hamburg.jpg" class="d-block w-100" alt="Девушка с ребенком стоят в окружении клумб парка Таштагола">
												</div>
												<div class="carousel-item">
													<img src="/App/assets/img/Deichstrasse.jpg" class="d-block w-100" alt="Девушку провожают перед отъездом на вокзале">
												</div>
												<div class="carousel-item">
													<img src="/App/assets/img/Landungsbrücken.jpeg" class="d-block w-100" alt="Красивый пейзаж.Синее небо, голубое чистое озеро и вокруг высокие горы">
												</div>
											</div>
											<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="visually-hidden">Previous</span>
											</button>
											<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="visually-hidden">Next</span>
											</button>
										</div>	
									</div>
								</div>-->







								<div class="title-website-address">
									<h2 class="title"><?= $sight->title; ?></h2><br>
									
									<p class="website"><a href="<?= $sight->website; ?>"><?= $sight->website; ?></a></p>					
									<p class="address"><?= $sight->address; ?></p><br>
									<p class="hours"><?= $sight->hours; ?></p>
								</div>
							</div>	
							<div class="sight-descr">
								<?= $sight->description; ?>
							</div>					
						</div>					
					</div>
			<?php endforeach; ?>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2370.9205468495506!2d9.981942115290236!3d53.54133286778993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b18f066770c44f%3A0xb2e4ab2a68984286!2z0K3Qu9GM0LHRgdC60LDRjyDRhNC40LvQsNGA0LzQvtC90LjRjw!5e0!3m2!1sru!2sde!4v1652028604874!5m2!1sru!2sde" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
 
		<?php require \App\View::$templatePath . '\footer.php';?>
	</body>
</html>

















