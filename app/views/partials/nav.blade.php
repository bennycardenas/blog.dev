<!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{{ action('HomeController@showWelcome')}}}">Benny</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="{{{ action ('PostsController@index')}}}">Blog</a>
                    </li>
                    <li class="page-scroll">
                        <a href="{{{ action ('HomeController@showPortfolio')}}}">Portfolio</a>
                    </li>
                    <li class="page-scroll">
                        <a href="{{{ action ('HomeController@showResume')}}}">Resume</a>
                    </li>
                    <li class="page-scroll">
                        <a href="/#contact">Contact</a>
                    </li>

                    {{-- login and out --}}
                    @if(Auth::check())
                        <li>Hello, {{{ Auth::user()->username }}}</li>
                        <li class="page-scroll">
                            <a href="{{{ action('HomeController@logout') }}}">Logout</a>
                        </li>
                    @else
                        <li class="page-scroll">
                            <a href="{{{ action('HomeController@login') }}}">Login</a>
                        </li>
                    @endif

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>