@extends('layouts.baseLayout')
		<title>Store</title>
	<body class="left-sidebar">
		<div id="page-wrapper">
			<!-- Header -->
				<div id="header-wrapper" class="wrapper">
					<div id="header">
					<!-- Logo -->
						<div id="logo">
							<h1><a href="index.html">Dracary's Bookstore</a></h1>
							<blockquote style="color:white;">
								“There is no friend as loyal as a book.” ― Ernest Hemingway
							</blockquote>|
						</div>

					<!-- Nav -->
						<nav id="nav">
							@include('includes.navUser')
						</nav>
					</div>
				</div>

			<!-- Main -->
				<div class="wrapper style2">					
					<div id="main" class="container">
						<div class="row 150%">
							<div class="4u 12u(mobile)">

								<!-- Sidebar -->
									<div id="sidebar">
										<section class="box">
											<header>
												<h2>Buscar un Libro</h2>
											</header>
											<p>Revise entre todo nuestro catálogo.</p>
											<a href="#" class="button style1">Search</a>
										</section>								
									</div>

							</div>
							<div class="8u 12u(mobile) important(mobile)">

								<!-- Content -->
									<div id="content">
										<article class="box post">
											<header class="style1">
												<h2>Detalle del Libro</h2>
												<p>{{ $books->title }}</p>
											</header>
											<ul class="style2">
												<li>
													<article class="box post-excerpt">														
											    	<h3>{{ $books->author }}</h3>
											    		<p>
											        		<strong>ISBN:</strong> {{ $books->isbn }}<br>
											        		<strong>Año: </strong> {{ $books->year }} <br>
											        		<strong>Precio:</strong>$ {{ $books->price }} <br>
											        		<strong>Cantidad en Stock: </strong> {{ $books->stock}}
											    		</p>
													</article>
												</li>
											</ul>
											<a href="{{ URL::to('books') }}" class="button style2">Volver al Catálogo</a>
										</article>
									</div>

							</div>
						</div>
					</div>
				</div>

		</div>
	</body>
</html>