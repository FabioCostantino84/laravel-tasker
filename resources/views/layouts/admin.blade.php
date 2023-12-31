<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <header class="bg-dark">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="#" aria-current="page">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('tasks.create')}}">Create Tasks</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">User' s page</a>
            </li>
        </ul>
    </header>


    <main class=" bg-info">
        @yield('main-content')
    </main>

</body>

</html>
