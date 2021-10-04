<?php

use Illuminate\Support\Facades\Route;
//Il faut inclure notre fichier controlleur pour gerer les routes
use App\Http\Controllers\StudentController;


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

// Read Creation de notre route pour StudentController
Route::get("home", [StudentController::class, "index"]);
// Route::get("home", [VilleController::class, "index"]);

//Create
Route::get("create", [StudentController::class, "create"]);
Route::post("create", [StudentController::class, "store"]);

// Show on va chercher le lien id -> "{student}"  
Route::get("{student}", [StudentController::class, "show"]);
// Delete
Route::delete("{student}", [StudentController::class, "destroy"]);



//Edit // Probleme de redirection entre SHOW et EDIT
Route::get("edit/{student}", [StudentController::class, "edit"]);
Route::put("edit/{student}", [StudentController::class, "update"]);




