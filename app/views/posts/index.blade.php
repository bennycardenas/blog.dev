@extends('layouts.master')


@section('content')


    <style type="text/css">
        body{
            padding-top: 120px;
            padding-left: 20px;
        }
    </style>

{{$posts->links()}}

    <h1>Blog Posts</h1>
        <ul>
            @foreach($posts as $post)
            <h3><a href="{{{action('PostsController@show', $post->slug)}}}">{{{$post->title}}}</a></h3>
                {{-- <a href="{{{ action('PostsController@edit', post->id) }}}">Edit</a> --}}
                <h8>Created:{{{$post->created_at}}}</h8>
                <p>Last updated: {{{$post->updated_at }}}</p>
                <p>{{{$post->body}}}"</p>
            @endforeach
        </ul>

    {{$posts->links()}}

@stop