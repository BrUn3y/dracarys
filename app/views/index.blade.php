@extends('layouts.baseLayout') <!--este extends nos permite utilizar el template base que contiene los css y los js para la página entera-->
<title>Dracary's - Inicio </title>
	<body class="index-body">
		<div id="page-wrapper">
			<div class="wrapper">
				<div id="header">
					<div id="logo">
						<h1><a href="index.html">Dracary's Bookstore</a></h1>
						<p>Bienvenido</p>
					</div>
					<nav id="nav">
						@include('includes.nav') <!--include es cosa de los templates blade, permite usar 
												un elemento como si se estuviera trabajando con herencia.
												En términos simples, se puede utilizar el template de
												navegación (tal es el caso) en cualquier otro
												template sin escribir nuevamente ni adaptar el código.
												donde 'includes' es el nombre de la carpeta contenedora
												y 'nav' el nombre de nuestro archivo-->
					</nav>
				</div>
			</div>
		</div>
	</body>
</html>