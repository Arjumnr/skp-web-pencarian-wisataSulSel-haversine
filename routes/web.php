<?php

use App\Http\Controllers\Apps\FotoController;
use App\Http\Controllers\Apps\IndexController;
use App\Http\Controllers\Apps\KulinerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\Tourguide\tgDashboardController;
use App\Http\Controllers\Tourguide\tgProfilController;
use App\Http\Controllers\Tourguide\tgWisataController;



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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/wisata-foto', [FotoController::class, 'index'])->name('fotoWisata');
Route::get('/wisata-kuliner', [KulinerController::class, 'index'])->name('kulinerWisata');
Route::get('/wisata-all/{id}', [IndexController::class, 'detail'])->name('wisataAll');

// Route::get('/', function () {
//     dd(Location::get(request()->ip()));
// });
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/authh', [LoginController::class, 'authenticate'])->name('loginPost');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('registerPost');




// midelware 
Route::group(['middleware' => ['auth']], function () {
    // dd(['cekRole:1']);

    Route::group(['middleware' => ['cekRole:1']], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        //USER
        Route::resource('user', UserController::class);
        //WISATA
        Route::resource('wisata', WisataController::class);
        
    });



    Route::group(['middleware' => ['cekRole:2']], function () {
        Route::get('/dashboardtg', [tgDashboardController::class, 'index'])->name('tgDashboard');
        Route::get('/tg-profil', [tgProfilController::class, 'index'])->name('tgProfil');
        // Route::post('/update-foto-profil', [tgProfilController::class, 'updateFoto'])->name('updateFP');
        Route::post('/tg-profil/update-profil', [tgProfilController::class, 'update'])->name('postProfil');
        Route::resource('tg-wisata', tgWisataController::class);

        
    });



});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/log', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);



Route::get('/tes', function () {
    echo '<pre>';
    // $user = User::where('person_id', '=', 1);
    // var_dump($user->toArray()); // <---- or toJson()
    //cek session 
    dd(session()->all());
    echo '</pre>';
});
