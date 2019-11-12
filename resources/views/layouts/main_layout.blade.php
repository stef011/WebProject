<!DOCTYPE html>
<html lang="en">
<head>
    
    {{-- Meta --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @yield('meta')

    <title>Site du BDE de Strasbourg</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="css/bootstrap.css">
    @yield('css')

    {{-- JavaScript --}}

    <script src="js/bootstrap.js"></script>
    @yield('js')

</head>
<body>
    <header>


    </header>


    @yield('body')


    <footer>


    </footer>
</body>
</html>