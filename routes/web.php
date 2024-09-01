<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\AnneescolaireController;
use App\Http\Controllers\ProfesseurCoursController;
use App\Http\Controllers\ClasseAnneescolaireController;
use App\Http\Controllers\SalleController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\DayController;
use App\Http\Controllers\HourController;
use App\Http\Controllers\PedagogieController;
use App\Http\Controllers\ProfileController;
use App\Models\Professeur;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


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

    return view('welcome');
});

Route::get('/test', function () {

    return view('test');
});

// Route::get('/home', function () {

//     return view('home');
// })->name('home');
Route::get('/home' , [RegisteredUserController::class , 'index'])->name('user.index')->middleware('auth');

Route::get('/ajouter-profil', function () {

    //Permet de faire afficher dans le select uniquement Peagogie, Secretariat & Professeur

    $roles = Role::whereNotIn('id', 1)->get();

    return view('user/create', compact('roles'));
})->name('user.create')->middleware('auth');

Route::post('/ajouter-profil' , [RegisteredUserController::class , 'create_personne'])->name('user.store')->middleware('auth');
Route::get('/ajouter-profil' , [RegisteredUserController::class , 'creation_success'])->name('user.success')->middleware('auth');


Route::get('/ajout-profil', function () {

    return view('create');
});


// //Gestion d'utilisateurs
// Route::get('/Ajouter-profil', function () {

//     //Permet de faire afficher dans le select uniquement Peagogie, Secretariat & Professeur
//     $roles = Role::whereNotIn('id', [1, Role::count()])->get();

//     return view('user/create', compact('roles'));
// })->name('user.create')->middleware('auth');

// Route::post('/Ajouter-profil' , [RegisteredUserController::class , 'create_personne'])->name('user.store')->middleware('auth');
// Route::get('/Ajouter-profil' , [RegisteredUserController::class , 'creation_success'])->name('user.success')->middleware('auth');

// Route::get('/Liste-profil' , [RegisteredUserController::class , 'index'])->name('user.index')->middleware('auth');


Route::get('/Liste-filtre' , [RegisteredUserController::class , 'filter'])->name('user.filter')->middleware('auth');

Route::get('/Liste-edit/{id}/{id_role}' , [RegisteredUserController::class , 'edit'])->name('user.edit')->middleware('auth');
Route::post('/Liste-edit/{id}' , [RegisteredUserController::class , 'upgrade'])->name('user.upgrade')->middleware('auth');


Route::delete('/Liste-profil/{id}' , [RegisteredUserController::class , 'delete'])->name('user.delete')->middleware('auth');


//Gestion d'années scolaires
Route::get('/pedagogie-home', function () {
    return view('pedagogie.home');
})->name('pedagogie.home');

Route::get('/pedagogie-anneescolaire-add', function () {
    return view('pedagogie.anneescolaire.store');
})->name('anneescolaire.add');

Route::get('/annee-scolaire'  , [AnneeScolaireController::class , 'index'])->name('anneescolaire.index')->middleware('auth');
Route::get('/annee-scolaire/{id}'  , [AnneeScolaireController::class , 'show'])->name('anneescolaire.show')->middleware('auth');
Route::post('/annee-scolaire'  , [AnneeScolaireController::class , 'store'])->name('anneescolaire.store')->middleware('auth');
Route::post('/annee-scolaireAdmin'  , [AnneeScolaireController::class , 'storeAdmin'])->name('anneescolaire.storeAdmin')->middleware('auth');
Route::get('/annee-scolaire/{id}/edit', [AnneeScolaireController::class, 'edit'])->name('anneescolaire.edit');
Route::put('/annee-scolaire/{id}', [AnneeScolaireController::class, 'update'])->name('anneescolaire.update');
Route::delete('/annee-scolaire/{id}', [AnneeScolaireController::class, 'destroy'])->name('anneescolaire.destroy');


Route::get('/salle'  , [SalleController::class , 'index'])->name('salle.index')->middleware('auth');
Route::post('/salle'  , [SalleController::class , 'store'])->name('salle.store')->middleware('auth');
Route::post('/salleAdmin'  , [SalleController::class , 'storeAdmin'])->name('salle.storeAdmin')->middleware('auth');
Route::get('/salle/{id}/edit', [SalleController::class, 'edit'])->name('salle.edit');
Route::put('/salle/{id}', [SalleController::class, 'update'])->name('salle.update');
Route::delete('/salle/{id}', [SalleController::class, 'destroy'])->name('salle.destroy');


Route::get('/cours'  , [CoursController::class , 'index'])->name('cours.index')->middleware('auth');
Route::post('/cours'  , [CoursController::class , 'store'])->name('cours.store')->middleware('auth');
Route::post('/coursAdmin'  , [CoursController::class , 'storeAdmin'])->name('cours.storeAdmin')->middleware('auth');
Route::get('/cours/{id}/edit', [CoursController::class, 'edit'])->name('cours.edit');
Route::put('/cours/{id}', [CoursController::class, 'update'])->name('cours.update');
Route::delete('/cours/{id}', [CoursController::class, 'destroy'])->name('cours.destroy');


Route::get('/classe'  , [ClasseController::class , 'index'])->name('classe.index')->middleware('auth');
Route::post('/classe'  , [ClasseController::class , 'store'])->name('classe.store')->middleware('auth');
Route::post('/classeAdmin'  , [ClasseController::class , 'storeAdmin'])->name('classe.storeAdmin')->middleware('auth');
Route::get('/classe/{id}/edit', [ClasseController::class, 'edit'])->name('classe.edit');
Route::put('/classe/{id}', [ClasseController::class, 'update'])->name('classe.update');
Route::delete('/classe/{id}', [ClasseController::class, 'destroy'])->name('classe.destroy');


Route::get('/classe/annee-scolaire'  , [AnneeScolaireController::class , 'indexLoad'])->name('classeanneescolaire.index')->middleware('auth');
Route::post('/classe/annee-scolaire'  , [ClasseAnneeScolaireController::class , 'store'])->name('classeanneescolaire.store')->middleware('auth');
Route::post('/annee-scolaire/{id}'  , [ClasseAnneeScolaireController::class , 'storeAdmin'])->name('classeanneescolaire.storeAdmin')->middleware('auth');
Route::get('/annee-scolaire/{id_annee}/classe/{id}'  , [ClasseAnneeScolaireController::class , 'show'])->name('classeanneescolaire.show')->middleware('auth');
Route::get('/classe/annee-scolaire/{id}/edit', [ClasseAnneeScolaireController::class, 'edit'])->name('classeanneescolaire.edit');
Route::put('/classe/annee-scolaire/{id}', [ClasseAnneeScolaireController::class, 'update'])->name('classeanneescolaire.update');
Route::delete('/classe/annee-scolaire/{id}', [ClasseAnneeScolaireController::class, 'destroy'])->name('classeanneescolaire.destroy');


Route::get('/etudiant'  , [EtudiantController::class , 'index'])->name('etudiant.index')->middleware('auth');
Route::post('/etudiant'  , [EtudiantController::class , 'store'])->name('etudiant.store')->middleware('auth');
Route::post('/etudiantAdmin'  , [EtudiantController::class , 'storeAdmin'])->name('etudiant.storeAdmin')->middleware('auth');
Route::post('/annee-scolaire/{id_annee}/classe/{id}/etudiant/'  , [EtudiantController::class , 'storeAdminCas'])->name('etudiant.storeAdminCas')->middleware('auth');



Route::get('/professeur'  , [ProfesseurController::class , 'index'])->name('professeur.index')->middleware('auth');
Route::post('/professeur'  , [ProfesseurController::class , 'store'])->name('professeur.store')->middleware('auth');
Route::post('/professeurAdmin'  , [ProfesseurController::class , 'storeAdmin'])->name('professeur.storeAdmin')->middleware('auth');



Route::post('/professeur/cours'  , [ProfesseurCoursController::class , 'store'])->name('professeurcours.store')->middleware('auth');



Route::get('/heure'  , [HourController::class , 'index'])->name('hour.index')->middleware('auth');
Route::get('/heure/{id}'  , [HourController::class , 'show'])->name('hour.show')->middleware('auth');
Route::post('/heure'  , [HourController::class , 'store'])->name('hour.store')->middleware('auth');



Route::get('/jour-d-annee-{id}'  , [DayController::class , 'index'])->name('day.index')->middleware('auth');
Route::post('/jour-d-annee-{id}'  , [DayController::class , 'store'])->name('day.store')->middleware('auth');
Route::get('/jour/{id}'  , [DayController::class , 'show'])->name('day.show')->middleware('auth');
Route::post('/jours/{id}', [DayController::class, 'storeHours'])->name('hours.store')->middleware('auth');


Route::get('/dashboard', function () {

    return view('dashboard');

})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
