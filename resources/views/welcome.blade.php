<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaraPress</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Welcome to LaraPress</h1>
    </header>

    <section>
        <p>
            Your introduction text goes here. You can customize this page to provide information about your CMS.
        </p>

        <p>
            <a href="{{ route('pages.index') }}">Explore Pages</a>
        </p>
    </section>

    <footer>
        <p>Copyright © {{ date('Y') }} LaraPress</p>
    </footer>
</body>
</html>
