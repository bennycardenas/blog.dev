@extends('layouts.master')

@if($errors->all())
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $error)
            {{$error}}
        @endforeach
    </div>
@endif

@section('content')

<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

<style type="text/css">
    body{
        padding-top:190px;
    }
    h1  {
        margin-left: 80px;
    }
</style>
    <h1>Blog Entry</h1>
        {{ Form::open(array ('action'   => 'PostsController@store'
                            , 'class'   => 'pure-form pure-form-aligned'
                            , 'method'  => 'POST')
                            )
                            }}

            <fieldset>
                <div class="pure-control-group">
                    {{ Form::label('title', 'Title') }}
                    {{ Form::text('title', Input::old('title'), array('placeholder'=>'Title')) }}
                </div>
                <div class="pure-control-group">
                    {{ Form::label('body', 'Body') }}
                    {{ Form::textarea('body', Input::old('body'), array('placeholder'=>'Enter your text here','rows'=>'3')) }}
                </div>
                <div>
                    {{ Form::submit('Submit Blog Entry', array('class' => 'pure-controls'))}}
                </div>
                <br>
            </fieldset>

            {{Form::token()}}

        {{ Form::close('action'   => 'PostsController@store'
                            , 'class'   => 'pure-form pure-form-aligned'
                            , 'method'  => 'POST') }}
