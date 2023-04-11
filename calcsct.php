<!DOCTYPE html>
<html>
<head>
	<title>Calculadora em PHP</title>
</head>
<body>

	<form method="post">
		<input type="number" name="num1" placeholder="Digite um ângulo em graus"><br><br>
		<input type="submit" name="sin" value="sin">
		<input type="submit" name="cos" value="cos">
		<input type="submit" name="tan" value="tan">
	</form>

	<?php
		if(isset($_POST['sin'])){
			$angulo = $_POST['num1'];
			$resultado = sin(deg2rad($angulo));
			echo "O seno de " . $angulo . " graus é: " . $resultado;
		}

		if(isset($_POST['cos'])){
			$angulo = $_POST['num1'];
			$resultado = cos(deg2rad($angulo));
			echo "O cosseno de " . $angulo . " graus é: " . $resultado;
		}

		if(isset($_POST['tan'])){
			$angulo = $_POST['num1'];
			$resultado = tan(deg2rad($angulo));
			echo "A tangente de " . $angulo . " graus é: " . $resultado;
		}
	?>

</body>
</html>