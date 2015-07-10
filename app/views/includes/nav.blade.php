<!-- Nav -->
<nav id="nav">
	<ul>
		<li class="current">Login
			<ul>
			   <li><a href="#">Log in</a>											     
				     <div id="login-content">											        
				        {{ Form::open(array('url' => '/login')) }}
							<div class="row 50%">
							<div class="6u 12u(mobile)">
								{{ Form::text('email', '', array('class' => 'form-control', 'required', 'placeholder' => 'sample@mail.com'))}}
							</div>
							<div class="6u 12u(mobile)">
								{{ Form::password('password', array('class' => 'form-control', 'required', 'placeholder' => 'password'))}}
							</div>							
								<li>{{ Form::submit('Entrar', array('class' => 'style1 bluebuttons'))}}</li>								
							</div>
							@if (Session::has('message'))
			                  <div class="alert alert-info"><span>{{ Session::get('message') }}</span></div>
			                @endif
						{{ Form::close() }}
				     </div>                    
				</li>
			</ul>
		</li>	
		<li><a href="{{ URL::to('users/create') }}">Sign Up</a></li>
	</ul>
</nav>