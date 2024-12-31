<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }
        .button:hover {
            background-color: #0056b3;
        }
        a{
            /* color: white !important; */
        }
    </style>
</head>
<body>
    <div class="container">
        @php
               $demandes = DB::table('demandes_inscription')->get()->last();
        @endphp
        <h1>Bonjour Mr Hicham Ammari !</h1>
        <p>Cher(e) Administrateur,</p>
        <p>Veiller checker un demande d 'inscription : Numero  <strong>{{$demandes->id}} </strong> d'un operateur {{$demandes->nom_gerant}} {{$demandes->prenom_gerant}} possede le mail : {{$demandes->email}}  <b>Portail Opérateur</b>.</p>
        <p>Connecter vous rapidement !</p>
        <p><a href="http://127.0.0.1:8000/login" class="button">Se Connecter</a></p>
        <p>Cordialement</p>
    </div>
</body>
</html>

