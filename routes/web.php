<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporBanjirController;

Route::get('/', function () {
    return redirect('/lapor-banjir');
});

Route::get('/lapor-banjir', [LaporBanjirController::class, 'form']);

Route::post('/lapor-banjir', [LaporBanjirController::class, 'kirim']);