<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->site_title }}</title>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
</head>

<body id="home" class="text-gray-900 font-sans antialiased bg-gradient-to-r from-green-300 via-lime-300 to-orange-300 min-h-screen">
    <div class="flex flex-col min-h-screen">
        <div>
            @include('_partials.header')
            @include('_partials.hero')
        </div>
        <div class="flex flex-row">
            <div class="lg:hidden">
                @include('_partials.sidebar')
            </div>
            <div class="flex flex-grow flex-col min-h-screen">
                @yield('body')
            </div>
        </div>
    </div>
</body>

</html>
