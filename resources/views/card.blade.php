<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Comics</title>
</head>
<body>

<h1>ciao</h1>

        <ul>
            @foreach ($fumetti as $studente)
                <li>{{ $studente['title'] }} <br> {{ $studente['price'] }} </li>
            @endforeach
        </ul>

</body>
</html>

<style>
    h1{
        color:red;
    }
</style>