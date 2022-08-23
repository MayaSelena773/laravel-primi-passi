<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Film preferito (uno dei tanti)</h1>

    <p>Titolo: {{ $title }}</p>
    <p>Regista: {{ $director }}</p>
    <p>Anno: {{ $year }}</p>
    <p>Genere: {{ $genre }}</p>

    <p>Attori principali:</p>
    @forelse ($actors as $actor)
        {{ $actor }}@if(!$loop->last), @endif
    @empty
        <div>Non ci sono attori</div>       
    @endforelse

</body>
</html>