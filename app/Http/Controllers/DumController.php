<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Mpdf\Mpdf;
use App\Models\User;
use App\Models\Situations_tran;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class DumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = DB::table('users')
            ->join('operateurs', 'users.email', '=', 'operateurs.email')
            ->select('operateurs.*')
            ->where('users.id', '=', Auth::user()->id)
            ->first();
    
        $dums = DB::table('dums')
            ->where('operateur_id', $user->id)
            ->get();
    
        return view('OP-dum', compact('dums'));  
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function trier(Request $request)
    {
        $user = DB::table('users')
        ->join('operateurs', 'users.email', '=', 'operateurs.email')
        ->select('operateurs.*')
        ->where('users.id', '=', Auth::user()->id)
        ->first();

        $dums = DB::table('dums')
        ->where('id', $request->id)
        ->where('operateur_id', $user->id)
        ->whereBetween('date_enregistrement', [$request->date_d, $request->date_f]) // Add this line to include the date condition
        ->get();

        if ($request->has('cherche')) {

            return view('OP-dum')->with('dums', $dums);;

        }
        if ($request->has('pdf')) {

        // Créer un objet Mpdf
        $mpdf = new Mpdf();

        // Ajouter une image dans l'en-tête
        $header = '<img src="' . public_path('img.png') . '" style="width: 100%;">';
        $mpdf->WriteHTML($header);

        // Ajouter des styles CSS pour le tableau
        $mpdf->WriteHTML('<style>table {border-collapse: collapse; width: 100%;} th, td {text-align: left; padding: 8px;} tr:nth-child(even) {background-color: #f2f2f2;}</style> ');

        // Générer le tableau HTML
        $table = '<table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Code BD</th>
                            <th>Repertoire</th>
                            <th>Dum</th>
                            <th>date enregistrement</th>
                            <th>crc</th>
                            <th>nrc</th>
                            <th>nom operateur</th>
                            <th>code declarant</th>
                            <th>valeur</th>
                            <th>numero agrement</th>
                        </tr>
                    </thead>
                <tbody>';

        foreach ($dums as $situation) {
            $table .= '<tr>';
            $table .= '<td>' . $situation->id . '</td>';
            $table .= '<td>' . $situation->code_bd . '</td>';
            $table .= '<td>' . $situation->repertoire . '</td>';
            $table .= '<td>' . $situation->dum . '</td>';
            $table .= '<td>' . $situation->date_enregistrement . '</td>';
            $table .= '<td>' . $situation->crc . '</td>';
            $table .= '<td>' . $situation->nrc . '</td>';
            $table .= '<td>' . $situation->nom_operateur . '</td>';
            $table .= '<td>' . $situation->code_declarant . '</td>';
            $table .= '<td>' . $situation->valeur . '</td>';
            $table .= '<td>' . $situation->numero_agrement . '</td>';
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
         if ($request->has('excel')) {

        // Créer un nouvel objet Spreadsheet
        $spreadsheet = new Spreadsheet();

        // Sélectionner la feuille de calcul active
        $sheet = $spreadsheet->getActiveSheet();

        // Ajouter des données à la feuille de calcul
        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Code BD');
        $sheet->setCellValue('C1', 'Repertoire');
        $sheet->setCellValue('D1', 'Dum');
        $sheet->setCellValue('E1', 'date enregistrement');
        $sheet->setCellValue('F1', 'crc');
        $sheet->setCellValue('G1', 'nrc');
        $sheet->setCellValue('H1', 'nom operateur');
        $sheet->setCellValue('I1', 'Code declarant');
        $sheet->setCellValue('J1', 'valeur');
        $sheet->setCellValue('K1', 'numero agrement');

        $row = 2;
        foreach ($dums as $situation) {
            $sheet->setCellValue('A' . $row, $situation->id);
            $sheet->setCellValue('B' . $row, $situation->code_bd);
            $sheet->setCellValue('C' . $row, $situation->repertoire);
            $sheet->setCellValue('D' . $row, $situation->dum);
            $sheet->setCellValue('E' . $row, $situation->date_chargement);
            $sheet->setCellValue('F' . $row, $situation->crc);
            $sheet->setCellValue('G' . $row, $situation->nrc);
            $sheet->setCellValue('H' . $row, $situation->nom_operateur);
            $sheet->setCellValue('I' . $row, $situation->code_declarant);
            $sheet->setCellValue('J' . $row, $situation->valeur);
            $sheet->setCellValue('K' . $row, $situation->numero_agrement);
            $row++;
        }

        // Créer un objet Xlsx Writer
        $writer = new Xlsx($spreadsheet);

        // Définir le nom de fichier
        $filename = 'situatuation_trans'.date('Y-m-d').'.xlsx';

        // Sauvegarder le fichier Excel
        $writer->save(storage_path('app/public/' . $filename));

        // Retourner le fichier Excel en tant que téléchargement
        return response()->download(storage_path('app/public/' . $filename), $filename, [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ]);
            
        }

    }


    
}

