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
								“Fairy tales are more than true: not because they tell us that dragons exist,<br>
								but because they tell us that dragons can be beaten.” ― Neil Gaiman
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
												<h2>Libros Destacados</h2>
												
											</header>
											<ul class="style2">
											@foreach($books as $key => $data)
												<li>
													<article class="box post-excerpt">
														<div class="container-fluid">
															<div class="row">
																<div class="col-md-2">
																	<img src= {{ $data->cover }} width="50%"; height="auto"/>
																</div>
																<div class="col-md-3">
																	
																<h4>{{ $data->title }}</h4><br>
																<br>
													            <strong>Autor:</strong> {{ $data->author }}<br>
													            <strong>ISBN: </strong>{{ $data->isbn }}<br>
													            <strong>Precio: </strong>{{ $data->price }}<br>
																	
																</div>													
															</div>
														</div>
													</article>

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="style1" href="{{ URL::to('books/' . $data->id) }}"><i class="fa fa-inbox"></i></a>
                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="style2" href="{{ URL::to('books/' . $data->id . '/edit') }}"><i class="fa fa-edit"></i></a>
												</li>
											@endforeach
											</ul>
											<a href="books" class="button style1">Catálogo Completo</a>
										</article>
									</div>

							</div>
						</div>
					</div>
				</div>

		</div>
	</body>
</html>