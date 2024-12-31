<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <!-- resources/views/users/show.blade.php -->

<h1>{{ $user->name }}</h1>

<!-- Afficher les autres détails de l'utilisateur -->

@if(count($files) > 0)
    <h2>Fichiers :</h2>
    <ul>
        @foreach($files as $file)
            <li>
                <a href="{{ $file['url'] }}">{{ $file['name'] }}</a>
            </li>
        @endforeach
    </ul>
@else
    <p>Aucun fichier associé à cet utilisateur.</p>
@endif

</body>
</html>