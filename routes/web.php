<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\PDFController;
use App\Models\Location;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('admin.welcomeAdmin');
});


Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/loginAdmin', [AdminController::class, 'loginAdmin'])->name('loginAdmin');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('Messenger', [\App\Http\Controllers\AdminController::class, 'Messenger'])->name('Messenger');

//client Folder
Route::get('deleteComment/{id}', [\App\Http\Controllers\AdminController::class, 'deleteComment'])->name('deleteComment');
Route::get('deleteClient/{id}', [\App\Http\Controllers\AdminController::class, 'deleteClient'])->name('deleteClient');
Route::get('deleteOffer/{id}', [\App\Http\Controllers\AdminController::class, 'deleteOffer'])->name('deleteOffer');
Route::get('deleteSociety/{id}', [\App\Http\Controllers\AdminController::class, 'deleteSociety'])->name('deleteSociety');
Route::get('deleteReport/{id}', [\App\Http\Controllers\AdminController::class, 'deleteReport'])->name('deleteReport');
Route::get('deleteTrip/{id}', [\App\Http\Controllers\AdminController::class, 'deleteTrip'])->name('deleteTrip');

Route::get('ListesClients', [\App\Http\Controllers\AdminController::class, 'ListesClients'])->name('ListesClients');
//entreprise foalder
Route::get('ListesEntreprises', [\App\Http\Controllers\AdminController::class, 'ListesEntreprises'])->name('ListesEntreprises');
//admin foalder welcomeAdmin
Route::get('welcomeAdmin', [\App\Http\Controllers\AdminController::class, 'welcomeAdmin'])->name('welcomeAdmin'); //name is for the route
Route::get('ListesOffres', [\App\Http\Controllers\OffreController::class, 'getAllOffres'])->name('ListesOffres'); //name is for the route
Route::get('ViewAbonnement', [\App\Http\Controllers\AdminController::class, 'ViewAbonnement'])->name('ViewAbonnement'); //name is for the route
Route::get('statistiques', [\App\Http\Controllers\AdminController::class, 'statistiques'])->name('statistiques'); //name is for the route
Route::get('dashboardAdmin', [\App\Http\Controllers\AdminController::class, 'dashboardAdmin'])->name('dashboardAdmin'); //name is for the route
Route::get('mapLigneRoad', [\App\Http\Controllers\AdminController::class, 'mapLigneRoad'])->name('mapLigneRoad'); //name is for the route
Route::get('TripsSearch', [\App\Http\Controllers\AdminController::class, 'TripsSearch'])->name('TripsSearch'); //name is for the route
Route::get('EntreprisesProfiles', [\App\Http\Controllers\AdminController::class, 'EntreprisesProfiles'])->name('EntreprisesProfiles'); //name is for the route
Route::get('ClientsProfiles', [\App\Http\Controllers\AdminController::class, 'ClientsProfiles'])->name('ClientsProfiles'); //name is for the route
Route::get('ViewAllAbonnements', [\App\Http\Controllers\AdminController::class, 'ViewAllAbonnements'])->name('ViewAllAbonnements'); //name is for the route
Route::get('Planning', [\App\Http\Controllers\AdminController::class, 'Planning'])->name('Planning'); //name is for the route
Route::get('RapportsTrips', [\App\Http\Controllers\AdminController::class, 'RapportsTrips'])->name('RapportsTrips'); //name is for the route
Route::get('ListesComentaires', [\App\Http\Controllers\AdminController::class, 'ListesComentaires'])->name('ListesComentaires'); //name is for the route
Route::get('RapportClientsPDF', [\App\Http\Controllers\PDFController::class, 'RapportClientsPDF'])->name('RapportClientsPDF'); //name is for the route
Route::get('RapportEntreprisesPDF', [\App\Http\Controllers\PDFController::class, 'RapportEntreprisesPDF'])->name('RapportEntreprisesPDF'); //name is for the route
Route::get('RapportOffersPDF', [\App\Http\Controllers\PDFController::class, 'RapportOffersPDF'])->name('RapportOffersPDF'); //name is for the route
Route::get('RapportVehiculesPDF', [\App\Http\Controllers\PDFController::class, 'RapportVehiculesPDF'])->name('RapportVehiculesPDF'); //name is for the route

// Route::get('plusInfos/{id}', function ($id) {
//     $abonnement = DB::table('abonnements')->where('id', $id)->first();

//     return view('admin.plusInfos', [
//         'abonnement' => $abonnement,
//     ]);
// })->name('plusInfos');
// Route::get('Offers',  [\App\Http\Controllers\OffreController::class, 'getAllOffres'])->name('ListesOffres'); //name is for the route

Route::get('voirPlusAbonnement/{id}', function ($id) {
    $abonnement = DB::table('abonnements')->where('id', $id)->first();
    $destinationCitieDepart = Location::select(DB::raw('latitude as destinationCitieDepartlat'))->where('city', '=', $abonnement->depart)->first();
    $destinationCitieDepartlng = Location::select(DB::raw('longitude as destinationCitieDepartlng'))->where('city', '=', $abonnement->depart)->first();
    $destinationCitieDestination = Location::select(DB::raw('latitude as destinationCitieDestinationlat'))->where('city', '=', $abonnement->destination)->first();
    $destinationCitieDestinationlng = Location::select(DB::raw('longitude as destinationCitieDestinationlng'))->where('city', '=', $abonnement->destination)->first();

    return view('admin.voirPlusAbonnement', [
        'abonnement' => $abonnement,
        'destinationCitieDepart' => $destinationCitieDepart,
        'destinationCitieDepartlng' => $destinationCitieDepartlng,
        'destinationCitieDestination' => $destinationCitieDestination,
        'destinationCitieDestinationlng' => $destinationCitieDestinationlng,
    ]);

})->name('plusInfos');

Route::get('voirPlusOffre/{id}', function ($id) {

    $offre = DB::table('offres')->where('id', $id)->first();
    $abonnements = DB::table('abonnements')->where('id_offre', $id)->get();
    return view('admin.voirPlusOffre',compact('offre','abonnements'));
})->name('plusInfosoffre');
Route::get('consulterCommentaires', [\App\Http\Controllers\AdminController::class, 'consulterCommentaires'])->name('consulterCommentaires'); //name is for the route


Route::get('/plainningVoyages', ['App\Http\Controllers\AdminController', 'plannier'])->name('plainningVoyages');
    Route::post('plainningVoyages/voyages', ['App\Http\Controllers\AdminController', 'voireVoyages'])->name('voyages');
//Test des Pages
Route::get('VerificationCode', [\App\Http\Controllers\AdminController::class, 'VerificationCode'])->name('VerificationCode'); //name is for the route
Route::post('updateEntreprise/{id}', [\App\Http\Controllers\AdminController::class, 'updateEntreprise'])->name('updateEntreprise');
Route::post('updateClient/{id}', [\App\Http\Controllers\AdminController::class, 'updateClient'])->name('updateClient');
Route::get('/Repports', [\App\Http\Controllers\AdminController::class, 'Repports'])->name('Repports');
});

require __DIR__.'/auth.php';
