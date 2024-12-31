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
            color: white !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <!DOCTYPE html>
        <html>
        <head>
            <title>Notification de réclamation</title>
        </head>
        <body>
            <h1>Bonjour Mr Karim Aissa !</h1>
            <p>Cher(e) Agent Douanier,</p>
            
            <p>Une nouvelle réclamation a été soumise et nécessite votre attention.</p>
            
            <p>Voici les détails de la réclamation :</p>
            <ul>
                <li>Thème : <strong>     {{ $request->theme }}   </strong></li>
                <li>Sous-thème : <strong>    {{ $request->sous_theme }}   </strong></li>
                <li>Ville : <strong>    {{ $request->ville }}   </strong></li>
                <li>Bureau de destination : <strong>    {{ $request->bureauD }}   </strong></li>
                <li>Localisation : <strong>    {{ $request->localisation }}   </strong></li>
                <li>Objet : <strong>    {{ $request->objet }}   </strong></li>
                <li>Message : <strong>    {{ $request->message }}   </strong></li>
            </ul>
        
            <p>Veuillez prendre les mesures nécessaires pour traiter cette réclamation dans les plus brefs délais.</p>

            <p><a href="http://127.0.0.1:8000/login" class="button">Se Connecter</a></p>
                
            <p>Cordialement,</p>
            <p>L'équipe de gestion des réclamations</p>
        </body>
        </html>
        
    </div>
</body>
</html>

