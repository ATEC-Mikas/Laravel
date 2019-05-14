<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/contacto">Contactos</a></li>
            <li><a href="/curso">Cursos</a></li>
            <li><a href="#"></a></li>
        </ul>
    </header>

    <div>
        @yield("content")
    </div>
</body>
</html>