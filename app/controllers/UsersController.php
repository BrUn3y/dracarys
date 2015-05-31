<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the users
		$users = Users::all(); //donde Usuario es el nombre de nuestro modelo

			// load the view and pass the users
			return View::make('users.index',array('users' => $users)); // donde 'usuarios.index' es carpeta y archivo
					//->with('usuarios', $users);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		// load the create form (app/views/users/create.blade.php)	
		return View::make('users.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
        	'nombre' 	=> 'required',
        	'apellido' 	=> 'required',
        	'username' 	=> 'required',
            'email'     => 'required|email',
            'password' 	=> 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('users/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $users = new Users;
            $users->nombre      = Input::get('nombre');
            $users->apellido    = Input::get('apellido');
            $users->username 	= Input::get('username');
            $users->email 		= Input::get('email');
            $users->password 	= Input::get('password');
            $users->save();

            // redirect
            //Session::flash('message', 'Your profile has been created Sucessfully!');
            return Redirect::to('users');
        }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// get the nerd
        $users = Users::find($id);

        // show the view and pass the nerd to it
        return View::make('users.show',array('users' => $users));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the user
        $users = Users::find($id);

        // show the edit form and pass the user
        return View::make('users.edit', array('users' => $users));
            //->with('nerd', $nerd);
	}

	public function loginUsuario()
	{
		$users = Users::whereEmail(Input::get("email"))->first();

		if($users["password"] == Input::get("password")){
			Session::put("id", $users["id"]);
			Session::put("email", $users["email"]);
		return Redirect::to('/books');
		}else{
			Session::flash('message', 'correo o contraseña incorrectos');
			return Redirect::to('/');
		}
	}


	public function logout()
	{
		Auth::logout(Auth::users());
		return View::make('/');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(

        	'nombre' 	=> 'required',
        	'apellido' 	=> 'required',
        	'username' 	=> 'required',
            'email'     => 'required|email',
            'password' 	=> 'required'

        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('users/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $users = Users::find($id);            
            $users->nombre      = Input::get('nombre');
            $users->apellido    = Input::get('apellido');
            $users->username 	= Input::get('username');
            $users->email 		= Input::get('email');
            $users->password 	= Input::get('password');
            $users->save();

            // redirect
            Session::flash('message', 'Se ha actualizado exitosamente!');
            return Redirect::to('users');
        }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
        $users = Users::find($id);
        $users->delete();

        // redirect
        Session::flash('message', 'Se ha borrado el usuario!');
        return Redirect::to('users');
	}


}
