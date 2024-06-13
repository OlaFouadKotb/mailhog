<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Mail\testMail;

Route::get('/', function () {
    return view('welcome');

});
Route::get('/send-test-email', [Controller::class, 'sendTestMail']);

