<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumar</title>
</head>
<body>
    <form method="get">
        Número 1: <input type="number" name="nro1" value="0"/><br>
        Número 2: <input type="number" name="nro2" value="0"/><br>
        <input type="submit" value="Sumar"/>
    </form>
    <?php 
		if(isset($_REQUEST['nro1']) && isset($_REQUEST['nro2']) && $_REQUEST['nro1']!=null && $_REQUEST['nro2']!=null){
			$nro1=$_REQUEST['nro1'];
			$nro2=$_REQUEST['nro2'];
			$resultado=$nro1+$nro2;
			echo $resultado;
		}else{
			echo 'Ingrese los valores a sumar!<br>';
		}
    ?>
</body>
</html>