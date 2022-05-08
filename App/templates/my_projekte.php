<html>
	<head>
		<title>My projekte</title>
		<?php require __DIR__ . '\head.php';?>
	</head>
	<body>
			<?php require __DIR__ . '\header.php';?>
		<br>
		<br>
		<br>
			
		<?php 
			assert(getCityByFirstLetter('B')=='Berlin');


			function getCityByFirstLetter($firstLetter){
				$cities=['Aichtal','Berlin','Chemnitz','Dohna','Eckartsberga','Flensburg','Gladenbach','Hamburg','Isselburg','Jerichow','Kiel','Löbau','München','Neumünster','Oberzent','Passau','Quickborn','Rheinberg','Scheer','Teltow', 'Ulm', 'Vacha','Wirges','Xanten','Zittau','Köln','Herdecke'];

				//var_dump($firstLetter == 'N');

				foreach ($cities as $city){
					if (strtoupper(mb_substr($city, 0, 1)) == strtoupper($firstLetter)){
						return $city;
					}
				}
				return null;
			}
		?>

		<form action="/home8/mathematics.php" method="post">
			<input type="text" name="city">
			<input type="submit" value="send"> 
		</form>  

		<?php
			if (!empty($_POST['city'])){
				echo getCityByFirstLetter(mb_substr($_POST['city'], -1, 1));	
			}
		?>
	
			
			
			
			
			
			
		<br>
		<br>
		<br>
		<br>
		<?php
			assert(calculate(2, 2, '+')==4);
			assert(calculate(2, 3, '*')==6);
			assert(calculate(5, 2, '-')==3);
			assert(calculate(6, 3, '/')==2);
			assert(calculate(4, 2, '&&')==null);


			if(isset($_POST['x'])) {
				$x=(int)$_POST['x'];
				}else{
					$x=null;
			}
			if(isset($_POST['y'])) {
				$y=(int)$_POST['y'];
				}else{
					$y=null;
			}
			$ops=['+', '-', '*', '/'];

			if(isset($_POST['op']) && in_array($_POST['op'], $ops)) {
				$op=$_POST['op'];
				}else{
					$op=null;
			}
			$res=calculate($x,$y,$op); 
		?>

		<form action="/home8/mathematics.php" method="post">
			<input type="number" name="x" value="<?php echo $x; ?>">
			<select name="op">
				<option value="+" <?php if('+'==$op){?>selected<?php }?>>+</option>
				<option value="-" <?php if('-'==$op){?>selected<?php }?>>-</option>
				<option value="*" <?php if('*'==$op){?>selected<?php }?>>*</option>
				<option value="/" <?php if('/'==$op){?>selected<?php }?>>/</option>
			</select>
			<input type="number" name="y" value="<?php echo $y; ?>">
			<input type="submit" value="=">
			<?php echo $res;?>
		</form>  

		<?php
			function calculate($x,$y,$op) {
				switch ($op) {
					case '+':
						return $x+$y;
						break;
					case '-':
						return $x-$y;
						break;
					case '*':
						return $x*$y;
						break;
					case '/':
						return $x/$y;
						break;
					default:
						return null;
				}
			}

		?> 

			
			
			
	
		<?php 
			$discrTest1 = calculateDiscr(1, -6, 9);
			assert(is_array($discrTest1));
			assert(count($discrTest1) == 1);
			assert($discrTest1[0] == 3);
			
			$discrTest2 = calculateDiscr(3, -4, 2);
			assert($discrTest2 == false);
			
			$discrTest3= calculateDiscr(1, -4, -5);
			assert(is_array($discrTest3));
			assert(count($discrTest3) == 2);
			assert($discrTest3[0] == 5);
			assert($discrTest3[1] == -1);
			
			
			function calculateDiscr($a, $b, $c) {
				$discr = $b*$b-4*$a*$c;
				if ($discr < 0) {
					return false;
				}
				if ($discr == 0) {
					$x = -1*($b/(2*$a));
					return [$x];
				} 
				if ($discr > 0) {
					$x1 = (-$b+sqrt($discr))/(2*$a);
					$x2 = (-$b-sqrt($discr))/(2*$a) ;
					return [$x1, $x2];
				}
			}
		
			$discr = calculateDiscr(1, 5, -5);
			if ($discr == false) {
				echo 'нет действительных корней';
			} 
			 
			if (is_array($discr)) {
				foreach ($discr as $currentValue ) {
					echo 'x = ' . $currentValue . '<br>';
				}
			}
			
		?>
			
		<table width="50%" cellpadding="7" border="3" width="100%"  align="center"   >
			<tr align="center"> 
				<th colspan="10" style="background: #fcff3a" ><h2>Truth tables for basic binary logic functions</h2></th>
			</tr>
			<tr align="center"> 
				<th colspan="3" width="33%" style="background: #ccc"><h3>AND  &&</h3></th>
				<th colspan="3" width="33%" style="background: #ccc"><h3>OR  ||</h3></th>
				<th colspan="3" width="33%" style="background: #ccc"><h3>XOR  ^</h3></th>
			</tr>
			<tr align="center"  > 
				<td><h3>x</h3></td>
				<td><h3>y</h3></td> 
				<td style="background: #ccc"><h3>x && y</h3></td>
				<td><h3>x</h3></td>
				<td><h3>y</h3></td>
				<td style="background: #ccc"><h3>x || y</h3></td>
				<td><h3>x</h3></td>
				<td><h3>y</h3></td>
				<td style="background: #ccc"><h3>x ^ y</h3></td>
			</tr>
			<tr align="center"> 
				<td>0</td>
				<td>0</td>
				<td style="background: #edede6"><?php echo (int)calculateAnd(0, 0) ?></td>
				<td>0</td>
				<td>0</td>
				<td style="background: #edede6"><?php echo (int)calculateOr(0, 0) ?></td>
				<td>0</td>
				<td>0</td>
				<td style="background: #edede6"><?php echo (int)calculateXor(0, 0) ?></td>
			</tr>
			<tr align="center"> 
				<td>0</td>
				<td>1</td>
				<td style="background: #edede6"><?php echo (int)calculateAnd(0, 1) ?></td></td>
				<td>0</td>
				<td>1</td>
				<td style="background: #edede6"><?php echo (int)calculateOr(0, 1) ?></td></td>
				<td>0</td>
				<td>1</td>
				<td style="background: #edede6"><?php echo (int)calculateXor(0, 1) ?></td></td>
			</tr>
			<tr align="center"> 
				<td>1</td>
				<td>0</td>
				<td style="background: #edede6"><?php echo (int)calculateAnd(1, 0) ?></td></td>
				<td>1</td>
				<td>0</td>
				<td style="background: #edede6"><?php echo (int)calculateOr(1, 0) ?></td></td>
				<td>1</td>
				<td>0</td>
				<td style="background: #edede6"><?php echo (int)calculateXor(1, 0) ?></td></td>
			</tr>
			<tr align="center"> 
				<td>1</td>
				<td>1</td>
				<td style="background: #edede6"><?php echo (int)calculateAnd(1, 1) ?></td></td>
				<td>1</td>
				<td>1</td>
				<td style="background: #edede6"><?php echo (int)calculateOr(1, 1) ?></td></td>
				<td>1</td>
				<td>1</td>
				<td style="background: #edede6"><?php echo (int)calculateXor(1, 1) ?></td></td>
			</tr>
		</table>

	


		<?php 
		
			assert(calculateAnd(0, 0) == false);
			assert(calculateAnd(0, 1) == false);
			assert(calculateAnd(1, 0) == false);
			assert(calculateAnd(1, 1) == true );
			 
			
			function calculateAnd($x, $y) {
				return $x && $y;
			}
			//var_dump (calculateAnd(0, 0));
			
			
		
			
			
			
			assert(calculateOr(0, 0) == false);
			assert(calculateOr(0, 1) == true );
			assert(calculateOr(1, 0) == true );
			assert(calculateOr(1, 1) == true );
			 
			
			function calculateOr($x, $y) {
				return $x || $y; ;
			}
			//var_dump (calculateOr(1, 1));
			
			
			
			
			
			
			assert(calculateXor(0, 0) == false);
			assert(calculateXor(0, 1) == true );
			assert(calculateXor(1, 0) == true );
			assert(calculateXor(1, 1) == false);
			 
			
			function calculateXor($x, $y) {
				return $x xor $y;
			}
			//var_dump (calculateXor(1, 1));
		?>
		<?php require \App\View::$templatePath . '\footer.php';?>
	</body>
</html>
 