<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Primeiro PHP</title>
	<link rel="stylesheet" href="base.css" />
</head>
	<body>
		<h1>
			<?php
				echo "Hello World!!!";
			?>
		</h1>
		<?php
			//comentário de uma linha
			$a = 1;
			$b = (int) "5";
			
			if (isset($a) && isset($b)) {			
				$soma = $a + $b;
			}
			else {
				$soma = 0;
			}
			
			/*try {
				multiplica($a,$b);
			} catch(Exception $e) {
				echo "Deu ruim: ".$e->getMessage();
			}*/
			
			
		?>
		<p>Resultado da soma: <strong><?php echo "a+b: ".$soma; ?></strong></p>
		
		<?php
		
			$variavel = "";
			
			if ($variavel === null) {
				?>
				<br />entrei no <strong>if</strong>
				<?php
			}
			else {
				echo "<br />entrei no <strong>else</strong>";
			}
			
			function soma($a,$b) {
				return ($a+$b);
			}

			
			$arr = [];

			array_push($arr,"João");
			array_push($arr,"Maria");
			array_push($arr,"Ana");
			array_push($arr,"José");
			
			$arr["aula"] = "WebI";
			$arr["nota"] = 10.0;
			$arr[11] = "QualquerCoisa";
			
			echo "<br />".$arr[1];
			
		?>
		<ul>
			<?php
				/*for ($i=0;$i<count($arr);$i++) {
					echo "<li>".$arr[$i]."</li>";
				}*/
				
				foreach ($arr as $k => $item) {
					echo "<li>".$k." : ".$item."</li>";
				}
				
				
				
			?>
		</ul>
		
		<?php
		
			for ($i=11;$i<=40;$i++) {
				?>
	<p style="font-size: <?php echo $i.'px' ?>">Lorem Ipsum</p>
				<?php
			}
		
		
			print_r($_SERVER);
			
			var_dump($_SERVER);
		
		
		?>
		
		
		
		
	</body>
</html>