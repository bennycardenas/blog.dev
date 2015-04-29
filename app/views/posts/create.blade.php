@extends('layouts.master')

@section('head')
    <head>
        
    </head>
@stop


@section('content')

<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">


<style type="text/css">
    body{
        padding-top:120px;
    }
</style>

        <form class="pure-form pure-form-aligned" method="post" action="{{{ action('PostsController@store') }}}">
            <fieldset>
                <div class="pure-control-group">
                    <label for="name">Username</label>
                    <input name="name" id="name" type="text" placeholder="Username" value="{{{ Input::old('name') }}}">
                </div>

                <div class="pure-control-group">
                    <label for="password">Password</label>
                    <input name="password" id="password" type="password" placeholder="Password" value="{{{ Input::old('password') }}}">
                </div>

                <div class="pure-control-group">
                    <label for="email">Email Address</label>
                    <input name="email" id="email" type="email" placeholder="Email Address" value="{{{ Input::old('email') }}}">
                </div>

                <div class="pure-control-group">
                    <label for="foo">Other Label</label>
                    <input name="foo" id="foo" type="text" placeholder="Enter it here..." value="{{{ Input::old('foo') }}}">
                </div>

                <div class="pure-controls">
                    <label for="cb" class="pure-checkbox">
                        <input name="cb" id="cb" type="checkbox"> I've read the terms and conditions
                    </label>
                    <br>
                    <button type="submit" class="pure-button pure-button-primary">Submit</button>
                </div>
            </fieldset>
        </form>

@stop