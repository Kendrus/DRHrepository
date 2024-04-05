<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CongeController;
use App\Http\Controllers\ContratController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
//Route::post('/employee', [employeeController::class, 'store'])->name('store');

Route::resources([
    'roles' => RoleController::class,
    'users' => UserController::class,
    'employee' => employeeController::class,
    'conge' => CongeController::class,
    'contrats' => ContratController::class
]);

Route::get('/employee.index', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('/employee', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('/employee/store', [EmployeeController::class, 'store'])->name('employee.store');

Route::delete('/conges/{conge}', [CongeController::class, 'destroy'])->name('conges.destroy');
// Route pour afficher le formulaire de modification d'une demande de congé spécifique
Route::get('/conges/{conge}/edit', [CongeController::class, 'edit'])->name('conge.edit');
Route::put('/conges/{conge}', [CongeController::class, 'update'])->name('conge.update');
    
