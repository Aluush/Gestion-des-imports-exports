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
        <!DOCTYPE html>
        <html>
        <head>
            <title>Notification de réclamation</title>
        </head>
        <body>
            <h1>Bonjour Mr {{$prenom}} {{$nom}} !</h1>
            <p>Cher(e) Opérateur,</p>
            
            <p>Votre réclamation N° {{$id}} a été affecter à le service {{$service}}.</p>

            <p>Cordialement,</p>
            
            <p>L'équipe de gestion des réclamations</p>
        </body>
        </html>
        
    </div>
</body>
</html>

