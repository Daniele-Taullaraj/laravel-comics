<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Comics</title>
</head>
<body>


        <h4>stampa studenti</h4>
    <ul>
            @foreach ($data['studenti'] as $studente)
                <li>{{ $studente }}</li>
            @endforeach
        </ul>

  

</body>
</html>