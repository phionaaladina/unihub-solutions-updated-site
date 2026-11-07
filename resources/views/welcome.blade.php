<!DOCTYPE html>
<html>
<head>
    <title>UniHub Solutions</title>
    @vite(['resources/css/app.css'])
</head>

<body>

@include('components.navbar')

<main>
    @yield('content')
</main>

@include('components.footer')

</body>
</html>