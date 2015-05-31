<title>Dracary's - Editar un Libro </title>
@extends('layouts.baseLayout')
		<div id="page-wrapper">
			<!-- Header -->
				<div id="header-wrapper" class="wrapper">
					<div id="header">

						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.html">Dracary's Bookstore</a></h1>
								<blockquote style="color:white">
									“If one cannot enjoy reading a book over and over again, there is no use in reading it at all.” ― Oscar Wilde
								</blockquote>
							</div>
							<nav id="nav">
								@include('includes.navUser')
							</nav>
					</div>
				</div>

			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">Actualizar Datos de Libro</div>
					<div id="main" class="container">

						<!-- Content -->
							<div id="content">
								<article class="box post">
									<header class="style1">
										<p>Catálogo<br class="mobile-hide" />
										Revise que sus datos nuevos sean correctos.</p>
										<p><!-- if there are creation errors, they will show here -->
            								{{ HTML::ul($errors->all()) }}</p>
            								 @if (Session::has('message'))
							                  <div class="alert alert-info"><span>{{ Session::get('message') }}</span></div>
							                  @endif								
									</header>
									
			

           {{ Form::model($books, array('route' => array('books.update', $books->id), 'method' => 'PUT')) }}
					<div class="row 50%">
						<div class="6u 12u(mobile)">
							 {{ Form::text('title', Input::old('title'), array(
							 'class' => 'form-control', 'required', 'autofocus', 'placeholder' => 'Título')) }}
						</div>
						<div class="6u 12u(mobile)">
                    		 {{ Form::text('author', Input::old('author'), array(
                    		 'class' => 'form-control','required', 'placeholder' => 'Autor')) }}
						</div>												
					</div>
					<div class="row 50%">
						<div class="6u 12u(mobile)">
							 {{ Form::text('year', Input::old('year'), array(
							 'class' => 'form-control', 'required', 'placeholder' => 'Año de Publicación', 'onKeyPress' => 'return soloNumeros(event)')) }}
						</div>
						<div class="6u 12u(mobile)">
							{{ Form::text('isbn', Input::old('isbn'), array(
							'class' => 'form-control', 'placeholder' => 'ISBN')) }}
						</div>
						<div class="6u 12u(mobile)">
							 {{ Form::text('price', Input::old('price'), array(
							 'class' => 'form-control', 'onKeyPress' => 'return soloNumeros(event)', 'placeholder' => 'Precio')) }}
						</div>
						<div class="6u 12u(mobile)">
							{{ Form::text('stock', Input::old('stock'), array(
							 'class' => 'form-control', 'onKeyPress' => 'return soloNumeros(event)', 'placeholder' => 'Cantidad en Stock')) }}
						</div>
						<input type="file" name="cover">																			
					</div>
					<div class="row">
						<div class="12u">
							<ul class="actions">
								{{ Form::submit('Actualizar', array('class' => 'style1')) }}
							{{ Form::close() }}
							</ul>
						</div>
					</div>
				</form>
		</article>
	</div>