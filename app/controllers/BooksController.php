<?php

class BooksController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the books
		$books = Books::all(); /*donde Books es el nombre de nuestro modelo 
								y all es la función que permite traernos todos los datos almacenados.*/

			// load the view and pass the users
			return View::make('books.index',array('books' => $books)); 
			// donde 'books.index' es carpeta y archivo
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// load the create form (app/views/books/create.blade.php)
		return View::make('books.create');
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
        	'title' 	=> 'required',
        	'author' 	=> 'required',
            'year'     	=> 'required',
            'isbn' 		=> 'required',
            'price' 	=> 'required',
            'stock' 	=> 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('books/create');
        } else {
        		// imagen
        	$filename = Input::get('isbn').'.jpg';
        	$path = (public_path() != '') ? public_path() : '/public/cover';
        	$destinationPath = $path;
        	/* destinationPath es la ruta donde se va a guardar la imagen
        	del libro, la imagen se guarda con el nombre del isbn del libro.
				*/

				if(Input::file('cover') != ""){
				Input::file('cover')->move($destinationPath, $filename);

				}

		var_dump($path);

            // store
            $books = new Books;
            $books->title   = Input::get('title');
            $books->cover 	= $filename;
            $books->author  = Input::get('author');            
            $books->year 	= Input::get('year');
            $books->isbn 	= Input::get('isbn');
            $books->price 	= Input::get('price');
            $books->stock 	= Input::get('stock');
            $books->save();

            // redirect
            //Session::flash('message', $destinationPath); <-- este mensaje sólo muestra la ruta donde se supone debe guardarse la img
            Session::flash('message', 'Libro guardado exitósamente');
            /*session flash es un mensage que aparece después de haberse cumplido la condición, tal el caso de guardar un nuevo libro.
            	para mostrarlo sólo hay que colocar esta línea en donde quieres ponerlo: */


            /*	@if (Session::has('message'))
			*	{{ Session::get('message') }}
            *	@endif
            */

            return Redirect::to('books/create');
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
		// get the books
        $books = Books::find($id);

        return View::make('books.show',array('books' => $books));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the book
        $books = Books::find($id);

        // show the edit form and pass the book
        return View::make('books.edit', array('books' => $books));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
        	'title' 	=> 'required',
        	'author' 	=> 'required',
        	'isbn' 		=> 'required',
            'year'     	=> 'required',
            'price' 	=> 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
       if ($validator->fails()) {
            return Redirect::to('books/' . $id . '/edit')
            ->withErrors($validator);
        } else {
            // store
            $books = Books::find($id);
            $books->title   = Input::get('title');
            $books->author  = Input::get('author');
            $books->isbn 	= Input::get('isbn');
            $books->year 	= Input::get('year');
            $books->price 	= Input::get('price');
            $books->save();

            // redirect
            Session::flash('message', 'Se han actualizado los datos del libro!');
            return Redirect::to('/books');
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
        $books = Books::find($id);
        $books->delete();

        // redirect
        Session::flash('message', 'Ha sido borrado de la base de datos!');
        return Redirect::to('books');
	}


}
