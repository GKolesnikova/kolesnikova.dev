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
				<div class="col-md-4">
				<div class="sight">
					<div class="sight-title">
						<h3><?= $sight->title; ?></h3>
						<span class="website"><?= $sight->website; ?></span>					
						<span class="address"><?= $sight->address; ?></span>
						<span class="hours"><?= $sight->hours; ?></span>
					</div>
					<img src="/home8/img/Deichstrasse.jpg" class="hamburg" alt="Das beeindruckende Hamburger Rathaus">	
					<div class="sight-descr">
						<?= $sight->description; ?>
					</div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2370.9205468495506!2d9.981942115290236!3d53.54133286778993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b18f066770c44f%3A0xb2e4ab2a68984286!2z0K3Qu9GM0LHRgdC60LDRjyDRhNC40LvQsNGA0LzQvtC90LjRjw!5e0!3m2!1sru!2sde!4v1652028604874!5m2!1sru!2sde" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				</div>
			<?php endforeach; ?>			 
		</div>
		<?php require \App\View::$templatePath . '\footer.php';?>
	</body>
</html>

















