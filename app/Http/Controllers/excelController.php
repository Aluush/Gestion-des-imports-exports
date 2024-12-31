<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Models\User;

class ExcelController extends Controller
{
    public function index()
    {
        // Récupérer les données de la base de données
        $users = DB::table('users')->get();

        // Créer un nouvel objet Spreadsheet
        $spreadsheet = new Spreadsheet();

        // Sélectionner la feuille de calcul active
        $sheet = $spreadsheet->getActiveSheet();

        // Ajouter des données à la feuille de calcul
        $sheet->setCellValue('A1', 'Nom');
        $sheet->setCellValue('B1', 'E-mail');

        $row = 2;
        foreach ($users as $user) {
            $sheet->setCellValue('A' . $row, $user->name);
            $sheet->setCellValue('B' . $row, $user->email);
            $row++;
        }

        // Créer un objet Xlsx Writer
        $writer = new Xlsx($spreadsheet);

        // Définir le nom de fichier
        $filename = 'utilisateurs.xlsx';

        // Sauvegarder le fichier Excel
        $writer->save(storage_path('app/public/' . $filename));

        // Retourner le fichier Excel en tant que téléchargement
        return response()->download(storage_path('app/public/' . $filename), $filename, [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ]);
    }
}
