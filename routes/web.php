<?php
namespace App\Http\Controllers;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //Route::resource("/Caissier",CaissierController::class);
    //Route::resource("/Classe",ClasseController::class);
    //Route::resource("/Encaisser",EncaisserController::class);
    //Route::resource("/Etudiant",EtudiantController::class);


    Route::get("/caissier",[CaissierController::class,"index"])->name("tableCaissier");
     Route::get("/classe",[ClasseController::class,"index"])->name("tableClasse");


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
