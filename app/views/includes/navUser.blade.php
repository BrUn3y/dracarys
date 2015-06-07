<!-- Nav -->
<nav id="nav">
	<ul>
		<li><a href="{{ URL::to('/') }}">Inicio</a></li>
		<li>
			<a href="#">Dar de Alta</a>
			<ul>
				<li><a href="{{ URL::to('books/create') }}">Libro</a></li>
				<li><a href="{{ URL::to('users/create') }}">Usuario</a></li>				
			</ul>
		</li>
		<li>
			<a href="#">Mostrar</a>
			<ul>
				<li><a href="{{ URL::to('books') }}">Catálogo</a></li>
				<li><a href="{{ URL::to('users')}}">Lista de Usuarios</a></li>
			</ul>
		</li>
		<li><a href="#">Cerrar Sesión</a></li>
	</ul>
</nav>