<?php

use Illuminate\Support\Facades\Http;
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
    $journals = [];

    try {
        $response = Http::timeout(5)->get('https://mrc.kamibisa.online/api/journals');

        if ($response->successful()) {
            $journals = $response->json();
        }
    } catch (\Throwable $e) {
        $journals = [];
    }

    return view('index', ['journals' => $journals]);
});

Route::get('/journals', function () {
    $journals = [];

    try {
        $response = Http::timeout(5)->get('https://mrc.kamibisa.online/api/journals');

        if ($response->successful()) {
            $journals = $response->json();
        }
    } catch (\Throwable $e) {
        $journals = [];
    }

    return view('journals', ['journals' => $journals]);
})->name('journals');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
