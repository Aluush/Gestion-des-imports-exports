<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mpdf\Mpdf;
use App\Models\User;

class pdfController extends Controller
{
    public function index()
    {
        // Récupérer les données de la base de données
        $users = DB::table('users')->get();

        // Créer un objet Mpdf
        $mpdf = new Mpdf();

        // Ajouter une image dans l'en-tête
        $header = '<img src="' . public_path('img.png') . '" style="width: 100%;">';
        $mpdf->WriteHTML($header);

        // Ajouter des styles CSS pour le tableau
        $mpdf->WriteHTML('<style>table {border-collapse: collapse; width: 100%;} th, td {text-align: left; padding: 8px;} tr:nth-child(even) {background-color: #f2f2f2;}</style> ');

        // Générer le tableau HTML
        $table = '<table><thead><tr><th>ID</th><th>USERNAME</th><th>E-mail</th><th>Password</th></tr></thead><tbody>';

        foreach ($users as $user) {
            $table .= '<tr>';
            $table .= '<td>' . $user->id . '</td>';
            $table .= '<td>' . $user->name . '</td>';
            $table .= '<td>' . $user->email . '</td>';
            $table .= '<td>' . $user->password . '</td>';
            $table .= '</tr>';
        }
        $table .= '</tbody></table>';

        // Écrire le tableau dans le PDF
        $mpdf->WriteHTML($table);

        // Générer le contenu du fichier PDF
        $pdfContent = $mpdf->Output('', 'S');

        // Retourner le fichier PDF en tant que téléchargement
        $filename = 'OP-' . date('Y-m-d') . '.pdf';
        return response($pdfContent)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'attachment; filename="' . $filename . '"');
    }

    public function afficherVue()
{
    return view('pdf');
}

}
