<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<body id="app">
<script>window.Laravel = { csrfToken: '{{ csrf_token() }}', user: @json($user) };</script>
{{--@dd($user)--}}
@vite(['resources/js/app.js'])
</body>
</html>
