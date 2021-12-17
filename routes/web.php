<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\FinishedProjectsController;

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
    return view('Index');
});

Route::get('/portfolio', function () {
    return view('Portfolio');
});

Route::get('/workingprojects', [ProjectsController::class, 'index'])->Name('workingprojects.index');
Route::get('/finishedprojects', [FinishedProjectsController::class, 'index'])->Name('finishedgprojects.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/projects/store', [ProjectsController::class, 'store'])->name('projects.store')->middleware(['auth']);
Route::put('/projects/{id}', [ProjectsController::class, 'update'])->name('projects.update')->middleware(['auth']);
Route::get('/projects/{id}/edit',[ProjectsController::class, 'edit'])->middleware(['auth']);
Route::delete('/projects/{id}', [ProjectsController::class, 'destroy'])->name('projects.destroy')->middleware(['auth']);

require __DIR__.'/auth.php';
