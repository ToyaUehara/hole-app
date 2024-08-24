<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ホール一覧</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Hole Name</h1>
        <div class='holes'>
            @foreach ($holes as $hole)
                <div class='hole'>
                    <h2 class='name'>{{ $hole->name }}</h2>
                    <p class='body'>{{ $hole->body }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>