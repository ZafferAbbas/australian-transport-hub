<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div
        class="relative sm:flex min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <livewire:welcome.navigation />
        @endif
        <div class="relative flex flex-column">
            <form action="" method="POST">
                <input type="text" name="cargo-title" id="cargo-title">
                <input type="text" name="cargo-desc" id="cargo-desc">
                <input type="text" name="cargo-quantity" id="cargo-quantity">
                <input type="text" name="cargo-height" id="cargo-height">
                <input type="text" name="cargo-weight" id="cargo-weight">
            </form>
        </div>
    </div>
    </div>
</body>

</html>
