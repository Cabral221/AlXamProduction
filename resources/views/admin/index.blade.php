<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenu dans l'administration</h1>
    <a href="#" onclick="event.preventDefault();document.getElementById('logout').submit()">Deconnexion</a>
    <form id="logout" action="{{ route('admin.logout') }}" method="post" style="display: none">
        @csrf
    </form>
</body>
</html>