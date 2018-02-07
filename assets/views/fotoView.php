<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/estilos.css">
	<title>Galeria</title>
</head>
<body>
	<header>
		<div class="contenedor">
			<h1 class="titulo"><?php if(!empty($foto['titulo'])){
				echo $foto['titulo'];
			}else{
				echo $foto['imagen'];
			}?></h1>
		</div>
	</header>
		<div class="contenedor">
			<div class="foto">
				<img src="assets/fotos/<?php echo $foto['imagen']?>" alt="">
				<p class="texto"><?php echo $foto['texto'];?></p>
				<a href="index.php" class="regresar"><i class="fa fa-long-arrow-left"></i>Regresar</a>
			</div>
		</div>
	</section>
	<footer>
		<p class="copyright">Galeria creada por Northerchild &copy;</p>
	</footer>
</body>
</html>