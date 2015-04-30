@extends('layouts.master')


@section('content')


    <style type="text/css">
        body{
            padding-top: 90px;
            padding-left: 20px;
        }
    </style>

    <h1>Blog Posts</h1>
        <ul>
            @foreach($posts as $post)<h3>{{{$post->title}}}</h3>
                <p>{{{$post->body}}}</p>
            @endforeach
        </ul>

    {{$posts->links()}}

@stop