<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/pomodoro.css') }}">
    <link rel="stylesheet" href="{{ asset('style/todolist.css') }}">
    <link rel="stylesheet" href="{{ asset('style/card.css') }}">
    <link rel="stylesheet" href="{{ asset('style/menu.css') }}">
    <title>Site</title>
</head>
<body>
    {{-- ESCOLHENDO A RENDERIZAÇÃO DA PÁGINA --}}
    @switch($page)
        @case(1)
            @include('components.pomodoro.pomodoro')
        @break
        @case(2)
            @include('components.todolist.todolist')
        @break
        @default
        @break
    @endswitch
    
    @include('components.menu')
</body>
</html>
