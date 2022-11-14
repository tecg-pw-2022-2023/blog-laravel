<!doctype html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="description"
              content="">
        <meta name="keywords"
              content="">
        <meta name="author"
              content="">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible"
              content="ie=edge">
        <title>{{ config('app.name') }}</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body class="bg-gray-200 font-serif">
        {{ $slot }}
    </body>
</html>
