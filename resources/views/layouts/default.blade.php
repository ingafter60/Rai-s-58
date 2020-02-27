<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('public/css/public.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/grid.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/header.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.header')
    <div class="main">
        @yeild('main')
    </div>
</body>

