@extends('layouts.master')

@section('content')

    <body>

        <p>Thanks for your post!</p>
        'Your post' . {$user->post->title->fetch()} . 'has been added and will be displayed.'

    </body>

@stop