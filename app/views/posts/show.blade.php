@extends('layouts.master')

@section('content')

<style type="text/css">
    body{
        padding-top: 90px;
        padding-left: 20px;
    }
</style>

<h3>{{{$post->title}}}</h3>

    <p>Created:{{{$post->created_at}}}</p>
    <p>Last updated: {{{$post->updated_at}}}</p>
    <p>Author: {{{$post->user->username}}}</p>

    <p>{{{$post->body}}}</p>

<a href="{{{ action('PostsController@edit', $post->id) }}}">Edit</a>

    {{ Form::open(array('method'=>'delete', 'action'=>['PostsController@destroy', $post->id]))}}
        <button type='submit' class='btn btn-danget btn-sm'>Delete Post</button>
    {{Form::close()}}

@stop