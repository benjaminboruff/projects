<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
</head>

<body id="home" class="text-gray-900 font-sans antialiased bg-green-50">
    <div class="flex flex-row">
        <div>
            @include('_partials.sidebar')
        </div>
        <div class="flex flex-grow flex-col min-h-screen">
            {{-- @include('_partials.header') --}}
            @yield('body')
        </div>
    </div>
</body>

</html>
