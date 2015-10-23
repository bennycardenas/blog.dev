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
        {{ Form::open(array('action' => 'PostsController@store', 'class'=> 'pure-form pure-form-aligned', 'method' => 'POST')) }}
        {{Form::token()}}

            {{-- <fieldset> --}}
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


                <div>
                    {{ Form::submit('Submit Blog Entry', array('class' => 'pure-controls'))}}
                    {{-- {{Form::button('Submit Blog Entry')}} --}}
                    {{-- <button type="submit" class="pure-button pure-button-primary">Submit Blog Entry!
                    </button> --}}
                </div>
                <br>
            {{-- </fieldset> --}}
        {{ Form::close() }}

@stop