<html>
    <head>
        <meta charset="utf-8">
        <title>Match Key</title>
        <link rel="stylesheet" href="public/css/app.css">
    </head>
    <body>
    @include('inc.navbar')

    <div class="container">
    @if(Request::is('/'))
    @include('inc.showcase')
    @endif
        <div class="row">
            <div class="col-md-8 col-lg-8">
            @include('inc.message')
            @yield('content')
            </div>
            <div class="col-md-4 col-lg-4">
            @include('inc.sidebar')
            </div>
        </div>
    </div>
    </body>
    <footer id="footer" class="text-center">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>CopyRignt 2019 &copy;Match Key</p>
    </footer>
</html>