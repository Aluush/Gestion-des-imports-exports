<?php

use App\Http\Controllers\Situations_tranController;
use Illuminate\Support\Facades\Route;
use  Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\excelController;
use App\Http\Controllers\pdfController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\OperatController;
use App\Http\Controllers\ReclamController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\DumController;
use App\Http\Controllers\RedController;
use App\Http\Controllers\Red__detailController;

use App\Models\Reclamation;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Laravel\Jetstream\Jetstream;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('index');
});Route::get('/CreerCompte', function () {
    return view('CreerCompte');
});

Route::post('/woow',[DemandeController::class, 'insertion'])->name('demade_insert');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',

])->group(function () {
    // ***********************ROUTES OPERATEUR ******************************

    // Route::get('/operateur-dum', [DumController::class, 'show'])->name('OP-consulter_dum');
    // Route::get('/download-pdf', [DumController::class, 'telecharger_pdf'])->name('telecharger_pdf');
    // Route::get('/download-excel', [DumController::class, 'telecharger_excel'])->name('telecharger_excel');


Route::get('/user/Nouvelle_reclamation', function () {
    return view('OP-reclamation');
})->name('jdsh');



// ***********************ROUTES ADMIN ******************************

Route::get('/admin/dashboard', function () {
    return view('admin-dash');
})->name('admin-dash');

Route::get('/admin/users',[UserController::class, 'showPourBloquer'])->name('admin-users');
// Route::get('/admin/users',[UserController::class, 'showAgent'])->name('admin-users-showAgent');

Route::post('/admin/user',[UserController::class, 'showOne'])->name('admin-users-un');
Route::post('/admin/insererAgent',[UserController::class, 'inserer_agent'])->name('inserer_agent');


Route::get('/admin/bloqueUser/{user_id}', [UserController::class, 'bloquer'])->name('users_bloquer');
Route::get('/admin/bloqueUser/{user_id}', [UserController::class, 'bloquer'])->name('users_bloquer');

Route::post('/admin/demande/Traitement', [UserController::class, 'accepter_refuser'])->name('demandes_A_R');

Route::post('/Admin/demande', [DemandeController::class, 'showDemadeTri'])->name('admin-demande-un');
Route::get('/Admin/demandes', [DemandeController::class, 'show'])->name('demandes_show');

Route::get('/Admin/reclamations', [ReclamController::class, 'showPourAdmin'])->name('admin-reclams');
Route::post('/Admin/reclamations/trier', [ReclamController::class, 'trierPouAdmin'])->name('admin-reclame-un');




Route::get('/notifReadAll', [DemandeController::class, 'readAlll'])->name('readAll');


Route::get('/demandes/{id}', [DemandeController::class, 'showWithId'])->name('show_demande_complete');

Route::get('/OP-dum', [DemandeController::class, 'show'])->name('demandes');
Route::get('/demandes/create', [DemandeController::class, 'create'])->name('demande.create');
Route::get('/demandes/edit/{id}', [DemandeController::class, 'edit'])->name('demande.edit');
Route::PUT('/demandes/update/{id}', [DemandeController::class, 'edit'])->name('demande.update');
Route::get('/demandes/delete/{id}', [DemandeController::class, 'delete'])->name('demande.delete');
Route::get('/demandes/deleteAll', [DemandeController::class, 'deleteAll'])->name('demande.deleteAll');
Route::get('/demandes/deleteAllTrunc', [DemandeController::class, 'deleteAllTrunc'])->name('demande.deleteAllTrunc');


Route::resource('operateurs',OperatController::class);
Route::get('/operateur/restore/{id}', [OperatController::class, 'restore'])->name('operateur.restore');
Route::get('/operateur/forceDelete/{id}', [OperatController::class, 'forceDelete'])->name('operateur.forceDelete');

Route::get('/rec', [OperatController::class, 'reclam_op']);
Route::get('/dum_op', [OperatController::class, 'dum_op']);
Route::get('/red', [OperatController::class, 'red']);
Route::get('/red_d_op', [OperatController::class, 'red_d_op']);
Route::get('/situation_op', [OperatController::class, 'situation_op']);

Route::get('/hhh', [ReclamController::class, 'OP']);

Route::get('/user/mes-reclamations', function () {
    return view('OP-MA-Reclam');
})->name('mes_réclamations');

Route::post('/user/inserer_Reclamation', [ReclamController::class, 'store'])->name('inserer_Reclam');

Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');


// *****************************Route Agent ******************************
Route::get('/agent/reclam', [ReclamController::class, 'show'])->name('agent-reclame');
Route::post('/agent/reclam/trier', [ReclamController::class, 'trier'])->name('agent-reclame-un');
Route::get('/agent/reclam/{id}', [ReclamController::class, 'show_id'])->name('show_reclam_complete');
Route::post('/agent/reclam/affecter', [ReclamController::class, 'affecter'])->name('affecter_service');
// Route::get('/agent/reclam', [ReclamController::class, 'show'])->name('users.show');



Route::get('/trans/situation', [Situations_tranController::class, 'show'])->name('situation_trans');
Route::post('/trans/tri', [Situations_tranController::class, 'trier'])->name('gerer_situation');

Route::get('/operateur-dum', [DumController::class, 'show'])->name('op_dum');
Route::post('/op/dum/tri', [DumController::class, 'trier'])->name('gerer_dum');

Route::get('/operateur-red', [RedController::class, 'show'])->name('op_red');
Route::post('/op/red/tri', [RedController::class, 'trier'])->name('gerer_red');

Route::get('/operateur-red_detail', [Red__detailController::class, 'show'])->name('or_red_d');
Route::post('/op/redD/tri', [Red__detailController::class, 'trier'])->name('gerer_red_d');

// Route::get('/operateur-red', function () {
//     return view('OP-red');
// });

// Route::get('/operateur-red_detail', function () {
//     return view('OP-redDetail');
// });



});

// Route::post('/adduser', [UserController::class, 'ajouterUtilisateur']);

Route::get('/ajouter', function () {
    return view('addUsers');
});