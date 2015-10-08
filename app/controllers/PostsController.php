<?php

class PostsController extends BaseController {

	public function __construct()
	{
		$this->beforeFilter('auth', ['except'=>['index', 'show']]);
		parent::__construct();
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		// return 'Output list of all posts';
		$posts = Post::with('user')->orderBy('created_at', 'DESC')->paginate(10);

		$data = array(
			'posts' => $posts
			);
		return View::make('posts.index')->with($data);
	}

	// public function search()
	// {

	// 	$query = Post::with('user');

	//     $search = Input::get('search');

	//     $query->where('title', 'like', '%'. $search . '%');
	//     $query->orWhere('body' 'like' '%' . $search . '%');

	//     $query->orWhereHas('user', function($q){
	//         $q->where('username','like','%benny%')

	//     return Make::view('')
 	//    });
	// }

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
		$post->slug = Input::get('title');
		$post->body = Input::get('body');
		$post->user_id = 1;
		$post->save();

		Log::info('===========================');
		Log::info('Title:' . Input::get('title'));
		Log::info('Body:' . Input::get('body'));


		// Email confirmation when new post is added successfully
		// Mail::send('emails.welcome', array('key' => 'value'), function($message)
		// {

		// 	$message->to($user->email, $user->name)->subject('Thanks for your post!');

		// });

		return Redirect::action('PostsController@index');
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

			if(is_numeric($id)){
				$post = Post::findOrFail($id);
			} else {
				// Slug is a non-numeric string
				$slug = $id;
				$post = Post::where('slug', $slug)->firstOrFail();
			}

			$data = array (
				'post'=>$post
				);

			return View::make('posts.show')->with($data);

		} catch (Exception $e) {

			Log::error($e);
			App::abort(404);
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

		$post = Post::find($id);
		$post->title = Input::get('title');
		$post->body = Input::get('body');
		$post->slug = Input::get('title');
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

		Session::flash('successMessage','Post successfully deleted.');
		return Redirect::action('PostsController@index');

	}


}
