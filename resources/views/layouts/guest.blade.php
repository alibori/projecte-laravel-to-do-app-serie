<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - {{config('app.name', 'To-Do App')}}</title>
    <meta name="Description" content="A simple To-Do App to manage your tasks">
    <meta name="Keywords" content="To-do App, laravel, livewire, php, tailwind css, javascript">

    <!-- Site favicon -->
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">

    <!-- Links to .js and .css files -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</head>
<body class="">
    <main class="w-full mx-auto">
        @yield('content')
    </main>
</body>
</html>
