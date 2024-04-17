<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Aprovado e reprovado PHP</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Digite um número: <input type="text" name="numero"><br><br>
	 
   
    <input type="submit" name="submit" value="Calcular">
</form> <br><hr>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
    $numero = $_POST['numero'];
	
 	if ($numero >= 6) {
	
	echo "<br><strong>Você foi aprovado!!</strong> ";
	
	} else {
	
	echo "<br><strong>Você foi reprovado!</strong>";
	}
    
	}
	?>
	
</body>
</html>