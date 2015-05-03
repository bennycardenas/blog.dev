@extends('layouts.master')


@section('content')


    <style type="text/css">
        body{
            padding-top: 90px;
            padding-left: 20px;
        }
    </style>

{{$posts->links()}}




    <h1>Blog Posts</h1>
        <ul>
            @foreach($posts as $post)
            <h3><a href="{{{action('PostsController@show', $post->id)}}}">{{{$post->title}}}</a></h3>
                {{-- <a href="{{{ action('PostsController@edit', post->id) }}}">Edit</a> --}}
                <h8>Created:{{{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}}</h8>
                <p>Last updated: {{{$post->updated_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}}</p>
                <p>{{{$post->body}}}"</p>
            @endforeach
        </ul>

    {{$posts->links()}}

@stop