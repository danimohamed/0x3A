<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/style.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <div>
        <ul class='nav'>
            <li><a href="{{url('employes')}}">Liste Employes</a></li>
            <li><a href="{{url('employes/create')}}">Ajouter Employee</a></li>
        </ul>
    </div>
    <div>
        <p>welcome to @yield('titre') page</p>
    </div>
    <div>
        @yield('content')
    </div>
 
</body>
</html>