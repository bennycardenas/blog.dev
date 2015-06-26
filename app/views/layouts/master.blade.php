<!DOCTYPE html>
<html lang="en">

@include('partials.head')

@yield('title')

@include('partials.nav')

    @if (Session::has('successMessage'))
        <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
    @endif
    @if (Session::has('errorMessage'))
        <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
    @endif

<body id="page-top" class="index">

@yield('content')

</body>

@include('partials.footer')

</html>
