	<link rel="stylesheet" href="assets/css/estilos.css">
	<title>Galeria</title>
</head>
<body>
	<header>
		<div class="contenedor">
			<h1 class="titulo">Subir Foto</h1>
		</div>
	</header>
		<div class="contenedor">
			<form class="formulario" enctype="multipar/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
				<label for="foto">Seleciona tu foto</label>
				<input type="file" id="foto" name="foto">
				<label for="titulo">Titulo de tu foto</label>
				<input type="text" id="titulo" name="titulo">
				<label for="texto">Agrega la descripcion</label>
				<textarea name="texto" id="texto" placeholder="Ingresa una descripcion" ></textarea>
				<input type="submit" class="submit" value="Subir foto">
			</form>
		</div>
	<footer>
		<p class="copyright">Galeria creada por Northerchild &copy;</p>
	</footer>
</body>
</html>