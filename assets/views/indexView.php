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
			<h1 class="titulo">Mi Galeria</h1>
		</div>
	</header>
	<section class="fotos">
		<div class="contenedor">
		<!--Ciclo para traer las fotos-->	
			<?php foreach($fotos as $foto):?>
				<div class="thumb">
					<a href="foto.php?id=<?php echo $foto['id'];?>">
						<img src="assets/fotos/<?php echo $foto['imagen'];?>" >
					</a></div>
			<?php endforeach;?>	
		<!--Funcionalidad de los botones-->
			<div class="paginacion">
				<?php if($pagina_actual >1):?>
					<a href="index.php?p=<?php echo $pagina_actual - 1;?>" class="izquierda"><i class="fa fa-long-arrow-left"></i>Pagina Anterior</a>
				<?php endif;?>
				<?php if($total_pagina != $pagina_actual):?>	
				<a href="index.php?p=<?php echo $pagina_actual + 1;?>" class="derecha">Pagina Siguiente <i class="fa fa-long-arrow-right"></i></a>
				<?php endif;?>		
			</div>
		</div>
	</section>
	<footer>
		<p class="copyright">Galeria creada por Northerchild &copy;</p>
	</footer>
</body>
</html>