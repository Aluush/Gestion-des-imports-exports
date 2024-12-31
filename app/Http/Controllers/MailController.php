<?php
namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function envoyerEmail()
    {
        // Récupérer les données du formulaire
        // $nom = "Ali Atattou";
        // $email = "aliatattou@gmail.com";
        // $message = "une nouvelle demande";

        // Créer une instance de TextPart avec le corps du message
        // $body = new \Symfony\Component\Mime\Part\TextPart($message);

        // Envoyer l'e-mail
        // Mail::send([], [], function ($mail) use ($nom, $email, $body) {
        //     $mail->to('aliatattou@gmail.com')
        //         ->subject('Nouveau message depuis le formulaire de contact')
        //         ->from($email, $nom)
        //         ->setBody($body);
        // });
        Mail::to('ahmed@gmail.com')->send( new \App\Mail\TestMail());

        // Rediriger l'utilisateur ou afficher un message de confirmation
        // return redirect()->back()->with('message', 'Votre message a été envoyé avec succès.');
    }
}
