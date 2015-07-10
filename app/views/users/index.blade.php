@extends('layouts.baseLayout')
		<title>Users</title>
	<body class="left-sidebar">
		<div id="page-wrapper">
			<!-- Header -->
				<div id="header-wrapper" class="wrapper">
					<div id="header">
					<!-- Logo -->
						<div id="logo">
							<h1><a href="index.html">Dracary's Bookstore</a></h1>
							<blockquote style="color:white;">
								“Books are the quietest and most constant of friends;<br>
								they are the most accessible and wisest of counselors,<br>
								and the most patient of teachers.” ― Charles William Eliot
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
												<h2>Buscar un usuario</h2>
											</header>
											<p>Lista de todos nuestros usuarios registrados.</p>
											<a href="#" class="button style1">Search</a>
										</section>								
									</div>

							</div>
							<div class="8u 12u(mobile) important(mobile)">

								<!-- Content -->
									<div id="content">
										<article class="box post">
											<header class="style1">
												<h2>Usuarios Destacados</h2>
											</header>
											<ul class="style2">
											@foreach($users as $key => $data)
												<li>
													<article class="box post-excerpt">
											           <p>{{ $data->name }}</p>
											            <p>{{ $data->lastname }}</p>
											           <p>{{ $data->address }}</p>
											           <p>{{ $data->city }}</p>
													</article>

                <!-- show the user (uses the show method found at GET /users/{id} -->
                <a class="style1" href="{{ URL::to('users/' . $data->id) }}"><i class="fa fa-inbox"></i></a>
                <!-- edit this user (uses the edit method found at GET /users/{id}/edit -->
                <a class="style2" href="{{ URL::to('users/' . $data->id . '/edit') }}"><i class="fa fa-edit"></i></a>
												</li>
											@endforeach
											</ul>
										</article>
									</div>

							</div>
						</div>
					</div>
				</div>

		</div>
	</body>
</html>