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
								“Classic' - a book which people praise and don't read.” ― Mark Twain
							</blockquote>
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
												<h2>Detalle del Usuario</h2>
												<p>{{ $users->name }}</p>
											</header>
											<ul class="style2">
												<li>
													<article class="box post-excerpt">														
											    		<p>
											        		<strong>Apellidos:</strong> {{ $users->lastname }}<br>
											        		<strong>RFC: </strong> {{ $users->rfc }} <br>
											        		<strong>Dirección: </strong> {{ $users->address }} <br>
											        		<strong>Ciudad:</strong> {{ $users->city }} <br>
											        		<strong>e-mail: </strong> {{ $users->email}}
											    		</p>
													</article>
												</li>
											</ul>
											<a href="{{ URL::to('users') }}" class="button style2">Volver a la lista</a>
										</article>
									</div>

							</div>
						</div>
					</div>
				</div>

		</div>
	</body>
</html>