@extends('layouts.baseLayout')
<title>Dracary's - Registro </title>
	<body class="no-sidebar">
		<div id="page-wrapper">
			<!-- Header -->
				<div id="header-wrapper" class="wrapper">
					<div id="header">

						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.html">Dracary's Bookstore</a></h1>
								<blockquote style="color:white;">
									“If there's a book that you want to read,
									but it hasn't been written yet, then you must write it.” <br>
									Toni Morrison
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
										<p>Bienvenido estimado client@<br class="mobile-hide" />
										Porfavor rellene cuidadosamente el siguiente formulario.</p>
										<p><!-- if there are creation errors, they will show here -->
            								{{ HTML::ul($errors->all()) }}</p>
            								 @if (Session::has('message'))
							                  <div class="alert alert-info"><span>{{ Session::get('message') }}</span></div>
							                  @endif											
									</header>
									
									 {{ Form::open(array('url' => 'users')) }}
											<div class="row 50%">
												<div class="6u 12u(mobile)">
													{{ Form::text('name', Input::old('name'), array(
							 'class' => 'form-control', 'required', 'autofocus', 'placeholder' => 'Nombre')) }}
												</div>
												<div class="6u 12u(mobile)">
													{{ Form::text('lastname', Input::old('lastname'), array(
							 'class' => 'form-control', 'required', 'autofocus', 'placeholder' => 'Apellidos')) }}
												</div>												
											</div>
											<div class="row 50%">
												<div class="6u 12u(mobile)">
													{{ Form::text('rfc', Input::old('rfc'), array(
							 'class' => 'form-control', 'required', 'autofocus', 'placeholder' => 'RFC')) }}
												</div>
												<div class="6u 12u(mobile)">
													{{ Form::text('address', Input::old('address'), array(
							 'class' => 'form-control', 'required', 'autofocus', 'placeholder' => 'Dirección')) }}
												</div>
												<div class="6u 12u(mobile)">
													{{ Form::text('city', Input::old('city'), array(
							 'class' => 'form-control', 'required', 'autofocus', 'placeholder' => 'Ciudad')) }}
												</div>
												<div class="6u 12u(mobile)">
													{{ Form::email('email', Input::old('email'), array(
							 'class' => 'form-control', 'required', 'autofocus', 'placeholder' => 'email@sample.com')) }}
												</div>
												<div class="6u 12u(mobile)">
													{{ Form::password('password', Input::old('password'), array(
							 'class' => 'form-control', 'required', 'autofocus', 'placeholder' => 'Contraseña')) }}
												</div>																			
											</div>
											<div class="row">
												<div class="12u">
													<ul class="actions">
														{{ Form::submit('Registrar', array('class' => 'style1')) }}
														{{ Form::close() }}
													</ul>
												</div>
											</div>
										</form>
								</article>		
			</div>
		</div>
	</body>
</html>