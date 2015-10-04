<!DOCTYPE html>
<html>
    <head>
        <title>App Name - @yield('title')</title>
        
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="http://cdn.foundation5.zurb.com/foundation.css" rel="stylesheet" type="text/css">
        <link href="/css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <nav class="top-bar" data-topbar role="navigation">
              <ul class="title-area">
                <li class="name">
                  <h1><a href="#">TEST TASK</a></h1>
                </li>
              </ul>
            </nav>
            <div class="row">
                <div class="small-8 small-centered columns">
                    @yield('content')
                </div>
            </div>
        </div>
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="http://cdn.foundation5.zurb.com/foundation.js"></script>
    </body>
</html>