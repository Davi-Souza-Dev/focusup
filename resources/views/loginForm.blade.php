<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Exemplo</title>
</head>
<body>
    @if ($mensagem = Session::get('error'))
        {{$mensagem}}
    @endif
    <form action={{route('login.auth')}} method="POST" enctype="multipart/form-data">
        @csrf
        <input type="email" name="email" id="email"><br>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit">Logar</button>
    </form>
</body>
</html>