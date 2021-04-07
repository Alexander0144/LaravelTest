<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel App</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between">
        <ul class="flex items-center">
            <li>
                <a href="auto:blank" class="p-4">Home</a>
                
            </li>
            <li>
                <a href="auto:blank" class="p-4">Dashboard</a>
            </li>
            <li>
                <a href="{{ route('register') }}" class="p-4">Register</a>
            </li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>