<?php

use App\Http\Controllers\SpeakerController;

Route::get('/', [SpeakerController::class, 'index'])->name('speakers.index');
Route::get('/speaker/{id}', [SpeakerController::class, 'show'])->name('speakers.detail');

Route::get('/speakers/create', [SpeakerController::class, 'create'])->name('speakers.create');
Route::post('/speakers', [SpeakerController::class, 'store'])->name('speakers.store');

Route::get('/speakers/{speaker}/edit', [SpeakerController::class, 'edit'])->name('speakers.edit');
Route::put('/speakers/{speaker}', [SpeakerController::class, 'update'])->name('speakers.update');

Route::delete('/speakers/{speaker}', [SpeakerController::class, 'destroy'])->name('speakers.destroy');