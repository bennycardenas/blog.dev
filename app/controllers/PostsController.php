<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// return 'Output list of all posts';
		$posts = Post::paginate(4);

		$data = array(
			'posts' => $posts
			);
		return View::make('posts.index')->with($data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');


		Session::flash('errorMessage','Update failed. See error message.');
		return Redirect::action('PostsController@index');
	}

	/**
	 * Store a newly created resource in storage.
	 * (Save a new post in the Posts table in the DB)
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), Post::$rules);

		if($validator->fails()){
			// return ' woh oh';
			return Redirect::back()->withInput()->withErrors($validator);

		} else {

		$post = new Post;
		$post->title = Input::get('title');
		$post->body = Input::get('body');
		$post->save();
		return Redirect::to('/posts');

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
		try{
			$post = Post::findOrFail($id);
			$data = array (
				'post'=>$post
				);
			return View::make('posts.show')->with($data);

		} catch (Exception $e) {

			$data = array(
				'error' => $e->getMessage()
				);

			return View::make('errors.exceptions')->with($data);
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

		try{
			$post = Post::findOrFail($id);
			$data = array (
				'post'=>$post
				);
			return View::make('posts.edit')->with($data);

		} catch (Exception $e) {

			$data = array(
				'error' => $e->getMessage()
				);

			return View::make('errors.exceptions')->with($data);
		}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), Post::$rules);

		if($validator->fails()){
			// return ' woh oh';
			Session::flash('errorMessage','Update failed. See error message.');
			return Redirect::back()->withInput()->withErrors($validator);

		} else {

		$post = new Post;
		$post->title = Input::get('title');
		$post->body = Input::get('body');
		$post->save();
		Session::flash('successMessage','Update successful.');
		return Redirect::to('/posts');

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

		$post = Post::findOrFail($id);
		$post->delete();

		Session::flash('successMessage','Post successful deleted.');
		return Redirect::action('PostsController@index');

	}


}
