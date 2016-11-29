
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
    <link rel="shortcut icon" href="/images/logo/logo.png" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SecretSanta') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <!-- Styles -->
    <link href="/css/custome.app.css" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <!-- Custom styles for this template -->
<!--    <link href="/css/narrow-jumbotron.css" rel="stylesheet"> -->
</head>

<body>

<div class="app">
    @include('layouts.menu')
    @yield('body')
    @include('layouts.footer')


</div> <!-- /container -->



</body>
</html>
