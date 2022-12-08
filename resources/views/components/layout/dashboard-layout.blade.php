<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>InTime-landing </title>
    <!-- import Tailwind -->
    @vite('resources/css/app.css')
</head>

<body>
    @include('partials._navbar')
    @include('partials._session')

    {{ $slot }}

    @vite('resources/js/app.js')
</body>

</html>
