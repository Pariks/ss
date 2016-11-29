
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Custom styles for this template -->
<!--    <link href="/css/narrow-jumbotron.css" rel="stylesheet"> -->
</head>

<body>

<div class="container">
    @include('layouts.menu')
    @yield('body')
    @include('layouts.footer')


</div> <!-- /container -->



</body>
</html>
