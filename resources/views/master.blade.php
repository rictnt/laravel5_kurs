<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
        <title>@yield('title')</title>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand">Menu główne</a>
              </div>
              <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                  <li><a href="">Pozycja 1</a></li>
                  <li><a href="">Pozycja 2</a></li>
                </ul>
              </div>
            </div>
          </nav>
        <div class="container">
            @yield('content')
        </div>
        <script src="{{ asset("js/scripts.js") }}"></script>
    </body>
</html>
