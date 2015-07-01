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
        padding-top:120px;
    }


</style>

{{-- {{{ var_dump($_POST) }}} --}}
<div class="container">
    <h1>Please Log In!</h1>
        {{ Form::open(array('action' => 'HomeController@doLogin', 'class'=> 'pure-form pure-form-aligned' )) }}
            <fieldset>
                <div class="pure-control-group">
                    {{ Form::label('email_or_username', 'Email or Username') }}
                    {{ Form::text('email_or_username', Input::old('email_or_username'), array('placeholder'=>'Email or Username')) }}
                    {{-- <input name="name" id="name" type="text" placeholder="Username" value="{{{ Input::old('name') }}}"> --}}
                </div>

                <div class="pure-control-group">
                    {{ Form::label('password', 'Password') }}
                    {{ Form::password('password', array('placeholder'=>'Password')) }}
                   {{--  <label for="body">Body</label>
                    <input name="body" id="password" type="text" placeholder="Body" value="{{{ Input::old('password') }}}"> --}}
                </div>


                <div class="pure-controls">
                    {{ Form::submit('Login!', array('class'=>'pure-button pure-button-primary', )) }}

                    {{-- <button type="submit" class="pure-button pure-button-primary">Log In!</button> --}}
                </div>
            </fieldset>
        {{ Form::close() }}

</div>

@stop
