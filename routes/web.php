<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WisataController;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/authh', [LoginController::class, 'authenticate'])->name('loginPost');


// midelware 
Route::group(['middleware' => ['auth']], function () {
    // dd(['auth']);
    Route::group(['middleware' => ['cekRole:{1}']], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        //WISATA
        
    });

    // Route::group(['prefix' => '/wisata'], function () {
    //     Route::get('/', [WisataController::class, 'index'])->name('indexWisata');
    // });


    Route::group(['middleware' => ['cekRole:{2}']], function () {
        Route::get('/register', [UserController::class, 'index'])->name('indexUser');
    });



    // Route::get('/user', [UserController::class, 'index'])->name('indexUser');
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');




Route::get('/tes', function () {
    echo '<pre>';
    // $user = User::where('person_id', '=', 1);
    // var_dump($user->toArray()); // <---- or toJson()
    //cek session 
    dd(session()->all());
    echo '</pre>';
});
