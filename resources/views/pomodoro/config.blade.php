<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset("style/reset.css")}}">
    <link rel="stylesheet" href="{{asset("style/style.css")}}">
    <link rel="stylesheet" href="{{asset("style/pomodoro.css")}}">
    <link rel="stylesheet" href="{{asset("style/menu.css")}}">
    <title>Menu Layout</title>
</head>
<body>
    @include('components.pomodoro.pomoConfig')
    @include('components.menu')

    <script>
        // MODAL DAS CONFIGURAÇÔES DO POMODORO
        const containerTimer = document.getElementById('containerTimer');
        const modalConfig = document.getElementById('configForm');
        const btnConfig = document.getElementById('btnConfig');
    </script>
</body>
</html>