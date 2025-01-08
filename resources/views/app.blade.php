<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="GOAT, Goofy Osu Addict Team">

        <!-- Primary Meta Tags -->
        <title inertia>{{ config('app.name', 'Goofy Osu Addict Team') }}</title>
        <meta name="title" content="Goofy Osu Addict Team" />
        <meta name="description" content="Join us today to know more about our GOAT clan." />

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://goat.applism.ca" />
        <meta property="og:title" content="Goofy Osu Addict Team" />
        <meta property="og:description" content="Join us today to know more about our GOAT clan." />
        <meta property="og:image" content="https://i.ibb.co.com/1d6H2Ts/GOAT.jpg" />

        <!-- Twitter -->
        <meta property="twitter:card" content="summary" />
        <meta property="twitter:url" content="https://goat.applism.ca" />
        <meta property="twitter:title" content="Goofy Osu Addict Team" />
        <meta property="twitter:description" content="Join us today to know more about our GOAT clan." />
        <meta property="twitter:image" content="https://i.ibb.co.com/1d6H2Ts/GOAT.jpg" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
