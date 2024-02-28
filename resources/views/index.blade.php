<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Australian Transport Hub</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
    </style>
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
</head>

<body class="antialiased">
    <div class="container">
        <header>
            <div class="navbar-desktop">
                <div class="brand">
                    <a href="#">
                        <img src="{{ url('/assets/images/logo.png') }}" alt="Australian Transport Hub">
                    </a>
                </div>
                <nav>
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
    </div>
</body>

</html>
