<!doctype html>
<html>
	<head>
		<title>About me</title>
		<?php require \App\View::$templatePath . '\head.php';?>
	</head>
	<body>
		<?php require \App\View::$templatePath . '\header.php';?>
		<div class="container-about">
			<div class="row">
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
			</div>
			



			<br>
			<br>
			<br> 
			<p>
			<div class="row">
				<div class="col-md-4">
					<p><h4 class="foto">FOTO 1:</h4></p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</div>
				
				<div class="col-md-4">
					<p><h4 class="foto">FOTO 2:</h4></p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</div>
				
				<div class="col-md-4">
					<p><h4 class="foto">FOTO 3:</h4></p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.	
				</div>
			</div>
			
		<?php
			/*if (!empty($_POST['message'])) {
				$messageNew = $_POST['message'];
				$commentsFile = __DIR__ . '/book.txt';
				file_put_contents($commentsFile, $messageNew);
				
				$comments = file($commentsFile);
				if (is_array($comments)) {
					foreach($comments as $comment) {
						echo $comment;
					}
				}
			 }
			
			if (!empty($_FILES['myimage'])){
				if (!empty($_FILES['myimage']['error'] == 0)) {
					 if ($_FILES["myimage"]["type"] == "image/jpeg" && $_FILES["myimage"]["type"] == "image/png") {
						 if ($_FILES["myimage"]["size"] <= 25000) {
							$tmpFile = $_FILES['myimage']['tmp_name'];
							$dstFile = __DIR__ . '/images/' . $_FILES['myimage']['name'];
							move_uploaded_file($tmpFile, $dstFile);
						 } else {
							echo 'File size exceeded';
						 }
					 }
				}
			 }	
*/
		?>
			<div class="row">
				<div class="col-md-12">
					<form action="/?page=main&action=city" method="post" enctype="multipart/form-data">
						<input type="file" name="myimage">
						<input type="submit">
					</form>
				</div>
			</div>
			
			<br>
			<br>
			<br>
			<div id="some" class="row img-container">	
				<?php 
					/*assert(
						is_array(getFilesNameByPath(__DIR__ . '/images/'))
					);
				
					foreach (getFilesNameByPath(__DIR__ . '/images/') as $fotoName) { */
				?>
					<!--<div class="col-md-4">
						<img class="col-md-12 img-responsive" src="/images/<?php echo $fotoName; ?>">
						<a href="/image.php?file=<?php// echo $fotoName; ?>">В полный размер</a>
					</div> ->
				<?php 
					/*} */
				?>
			</div>
	
			
			<div class="container">
			<header>
				 <?php require __DIR__ . '\header.html';?>
			</header>
			<br>
			<br>
			<br>
			<div class="row">
				<?php 
					/*if (!empty($_POST['message'])){
						file_put_contents(__DIR__ . '/book.txt', $_POST['message'] . "\n", FILE_APPEND);
					}
					$comments = file(__DIR__ . '/book.txt', FILE_IGNORE_NEW_LINES);
					if ($comments !== false){
						foreach ($comments as $comment) {
							if (empty($comment)) {
								continue;
							}			*/	 
				?>
					<div class="col-md-12 comment">
						<?php // echo $comment ?>						 
					</div>
				<?php
				/*		}
					} */
				?>
			</div>
			
			
			
			
			
			<form class="form-floating" action="/home8/comments.php" method="post">
					<textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="message"></textarea>
					<label for="floatingTextarea2">Here you can leave a comment</label>
					<button type="submit" class="btn btn-info">SEND</button>
				</form>
			</div>
				<div class="row">
				
				 
					<?php  
						/* function getFilesNameByPath($path) {
							$result = scandir($path);
							if (scandir($path) == false) {
								$result = [];
							}
							if ($result[0] == '.' && $result[1] == '..') {
								unset($result[0]);
								unset($result[1]);
							}
							return $result;
						}




						function getCommentsFromFiles() {
							$commentsDir = __DIR__ . '/comments/';
							$filesNames = getFilesNameByPath($commentsDir);
							
							foreach ($filesNames as $fileName) {
								$comment = file_get_contents(__DIR__ . '/comments/' . $fileName);
								?>
									<div class="col-md-6 comment">
										<p><?php echo $comment ?></p>						 
									</div>
								<?php
							}
						}
						
						getCommentsFromFiles();
 
*/
 				?>
		</div>	
		<?php require \App\View::$templatePath . '\footer.php';?>
	</body>
</html>