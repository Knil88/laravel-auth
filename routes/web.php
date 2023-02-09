<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController :: class, 'home']) -> name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/logged', [MainController :: class, 'logged']) -> middleware(['auth', 'verified']) -> name('logged');
require __DIR__.'/auth.php';

//Show collengado la route al link una volta cliccato appariranno tutte le specifiche

Route :: get('/project/show/{project}', [MainController :: class, 'projectshow'])
    -> name('project.show');

//Delete:collegando la route con il link si potrà cancellare il dato

Route :: get('/project/destroy/{project}', [MainController :: class, 'projectdelete'])
    -> name('project.destroy');

    //Create: collegando la route il link si potrà creare un nuovo dato

    Route :: get('/project/create', [MainController :: class, 'projectcreate'])
    -> name('project.create');

//Con store riusciamo ad immettere in nuovi dati collegando i dati del form

    Route :: post('/project/store', [MainController :: class, 'projectstore'])
    -> name('project.store');

//Con Edit creiamo un metodo che quando si cliccherà sul link si potrà modificare un dato

Route :: get('/project/edit/{project}', [MainController :: class, 'projectedit'])
    -> name('project.edit');

    Route :: post('/project/update/{project}', [MainController :: class, 'projectupdate'])
    -> name('project.update');

