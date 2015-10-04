<!DOCTYPE html>
<html>
    <head>
        <title>App Name - @yield('title')</title>
        
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="http://cdn.foundation5.zurb.com/foundation.css" rel="stylesheet" type="text/css">
        <link href="css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
        <script type="text/javascript" src="http://cdn.foundation5.zurb.com/foundation.js"></script>
    </body>
</html>