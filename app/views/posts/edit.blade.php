@extends('layouts.master')

@section('content')

        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

        <style type="text/css">
                body{
                padding-top: 120px;
                padding-left: 20px;
            }
            
        </style>


        {{-- Form Model binding according to Ryano --}}
        {{ Form::model($post, array('action'=> ['PostsController@update', $post->id], 'method'=> 'PUT', 'class'=>'blog-form','id'=>'posts-create-form')) }}


        {{ Form::open(array('action' => 'PostsController@store', 'class'=> 'pure-form pure-form-aligned' )) }}
            <fieldset>
                <div class="pure-control-group">
                    {{ Form::label('title', 'Title') }}
                    {{ Form::text('title', Input::old('title'), array('placeholder'=>'Title')) }}
                    {{-- <input name="name" id="name" type="text" placeholder="Username" value="{{{ Input::old('name') }}}"> --}}
                </div>

                <div class="pure-control-group">
                    {{ Form::label('body', 'Body') }}
                    {{ Form::textarea('body', Input::old('body'), array('placeholder'=>'Enter your text here','rows'=>'3')) }}
                   {{--  <label for="body">Body</label>
                    <input name="body" id="password" type="text" placeholder="Body" value="{{{ Input::old('password') }}}"> --}}
                </div>

                <div class="pure-controls">
                    <button type="submit" class="pure-button pure-button-primary">Update Blog Entry!</button>
                </div>
            </fieldset>


        {{ Form::close() }}

@stop