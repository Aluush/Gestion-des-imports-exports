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
    </style>
</head>
<body>
    <div class="container">
        <h1>Bonjour Mr {{ $request->prenom_gerant }} {{ $request->nom_gerant }} !</h1>
        <p>Cher(e) Opérateur,</p>
        <p>Votre demande d'inscription a été acceptée avec succès. Félicitations !</p>
        <p>Voici vos informations de connexion :</p>
        <ul>
            <li>Adresse e-mail : <strong>{{ $request->email }} </strong></li>
            <li>Mot de passe : <strong> {{ $password }} </strong></li>
        </ul>
        <p>Nous vous recommandons de vous connecter rapidement en utilisant le lien ci-dessous :</p>
        <p><a href="http://127.0.0.1:8000/login" class="button">Se Connecter</a></p>
        <p>Après votre première connexion, nous vous suggérons de modifier votre mot de passe pour des raisons de sécurité. Vous pouvez le faire en accédant à votre profil et en sélectionnant l'option de modification de mot de passe.</p>
        <p>Cordialement,</p>
    </div>
</body>
</html>

