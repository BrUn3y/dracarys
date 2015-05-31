<!-- Nav -->
<nav id="nav">
	<ul>
		<li><a href="{{ URL::to('/') }}">Inicio</a></li>
		<li>
			<a href="#">Menu</a>
			<ul>
				<li><a href="{{ URL::to('books/create') }}">Nuevo Libro</a></li>
				<li><a href="{{ URL::to('users/create') }}">Agregar un Usuario</a></li>
				<li><a href="{{ URL::to('books') }}">Catálogo</a></li>				
			</ul>
		</li>
		<li><a href="{{ URL::to('users')}}">Lista de Usuarios</a></li>
		<li><a href="#">Cerrar Sesión</a></li>
	</ul>
</nav>