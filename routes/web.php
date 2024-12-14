<?php

use App\Http\Controllers\TaskController;
use Illuminate\Console\View\Components\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks',[TaskController::class,'index']); // route qui permet de lister tous les taches
Route::get('/task',[TaskController::class,'create'])->name('create.page'); //route pour l'ajout d'une tache
Route::post('/task',[TaskController::class,'store'])->name('store.task'); // stocker une tache 
Route::delete('/task/{id}',[TaskController::class,'destroy'])->name('destroy.task');//suppprimer une tache
Route::post('/task/{id}',[TaskController::class,'page_update'])->name('page.update');//pour la page de modification
Route::put('/task/{id}',[TaskController::class,'update'])->name('update.task'); //route pour la mise a jour d'une tache
