<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <title>Larave Layout</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

@include('layouts.subviews.navbar')

<main class="bg-gray-300 mt-2 p-20 min-h-screen">
    @yield('content')
</main>
</body>
</html>
