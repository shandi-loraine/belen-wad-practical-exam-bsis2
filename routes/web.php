<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/transaction', [TransactionController::class, 'showAll'])->name('showAll');

Route::get('transactions/create', [TransactionController::class, 'createTransaction'])->name('createTransaction');
Route::post('transactions/store', [TransactionController::class, 'storeTransaction'])->name('storeTransaction');

Route::get('/transaction/{id}', [TransactionController::class, 'viewTransaction'])->name('viewTransaction');

Route::get('/transaction/{id}/edit', [TransactionController::class, 'editTransaction'])->name('editTransaction');
Route::put('/transaction/{id}/update', [TransactionController::class, 'updateTransaction'])->name('updateTransaction');

Route::delete('/transaction/{id}/delete', [TransactionController::class, 'deleteTransaction'])->name('deleteTransaction');


















//Transaction resource
// model
//id
