@extends('layouts.baseLayout')
<title>Dracary's - Edición de Usuario </title>
	<body class="no-sidebar">
		<div id="page-wrapper">
			<div id="header-wrapper" class="wrapper">
				<div id="header">
					<div id="logo">
						<h1><a href="index.html">Dracary's Bookstore</a></h1>
						<blockquote style="color:white;">
							“The books that the world calls immoral are books that show the world its own shame.” 
							<p>― Oscar Wilde, The Picture of Dorian Gray</p>
						</blockquote>
					</div>
					<nav id="nav">
						@include('includes.navUser')
					</nav>
				</div>
			</div>
<!-- Main -->
<div class="wrapper style2">
	<div class="title">Registro de Usuario</div>
		<div id="main" class="container">
			<!-- Content -->
			<div id="content">
				<article class="box post">
					<header class="style1">
						<p>Mostrando Usuario<br class="mobile-hide" />{{ $users->nombre }}
						para editar.</p>
						<p><!-- Si ocurre un error al guardar datos, se mostrará aqui-->
							{{ HTML::ul($errors->all()) }}</p>
							 @if (Session::has('message'))
			                 <div class="alert alert-info"><span>{{ Session::get('message') }}</span></div>
			                 @endif											
					</header>
					<!--Formularios blade, no son tan difíciles de usar una vez te acostumbras a ellos-->
				{{ Form::model($users, array('route' => array('users.update', $users->id), 'method' => 'PUT')) }}
					<div class="row 50%">
						<div class="6u 12u(mobile)">
							{{ Form::text('name', Input::old('name'), array('class' => 'form-control', 'placeholder' => 'Nombre')) }}
						</div>
						<div class="6u 12u(mobile)">
							{{ Form::text('lastname', Input::old('lastname'), array('class' => 'form-control', 'placeholder' => 'Apellidos')) }}
						</div>												
					</div>
					<div class="row 50%">
						<div class="6u 12u(mobile)">
							{{ Form::text('rfc', Input::old('rfc'), array('class' => 'form-control', 'placeholder' => 'RFC')) }}
						</div>
						<div class="6u 12u(mobile)">
							{{ Form::text('address', Input::old('address'), array('class' => 'form-control', 'placeholder' => 'Dirección')) }}
						</div>
						<div class="6u 12u(mobile)">
							{{ Form::text('city', Input::old('city'), array('class' => 'form-control', 'placeholder' => 'Ciudad')) }}
						</div>
						<div class="6u 12u(mobile)">
							{{ Form::email('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'email@sample.com')) }}
						</div>																			
					</div>
					<div class="row">
						<div class="12u">
							<ul class="actions">
								{{ Form::submit('Actualizar', array('class' => 'style1')) }}
				{{ Form::close() }}
							</ul>
						</div>
					</div>
				</article>		
			</div>
		</div>
	</body>
</html>