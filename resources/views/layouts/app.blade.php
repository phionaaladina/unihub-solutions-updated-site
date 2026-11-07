<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home') | UniHub Solutions Uganda</title>
    <meta name="description" content="@yield('description', 'UniHub Solutions Uganda empowers businesses with software development, IT consultancy, ICT equipment supply, installations, and training.')">
    <meta name="theme-color" content="#1d2b72">

    <meta property="og:site_name" content="UniHub Solutions Uganda">
    <meta property="og:title" content="@yield('title', 'Home') | UniHub Solutions Uganda">
    <meta property="og:description" content="@yield('description', 'Digital Access for All. Software, ICT equipment, installation and training in Kampala, Uganda.')">
    <meta property="og:image" content="{{ asset('images/brand/unihub-mark.png') }}">

    <link rel="icon" href="{{ asset('images/brand/favicon-64.png') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('images/brand/apple-touch-icon.png') }}">

    @fonts

    <script>document.documentElement.classList.add('js')</script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white font-sans text-text antialiased">

    <a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[100] focus:rounded-full focus:bg-ink focus:px-5 focus:py-3 focus:text-white">Skip to content</a>

    @include('components.navbar')

    @if (session('success'))
        <div class="container-x mt-4">
            <div class="rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-800">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <main id="main">
        @yield('content')
    </main>

    @include('components.footer')

</body>

</html>
