<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LandingController;

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
    return view('welcome');
});

Route::get('/index', [LandingController::class, 'index'])->name('index');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registerpost', [LoginController::class, 'registerpost'])->name('registerpost');
Route::post('/loginpost', [LoginController::class, 'loginpost'])->name('loginpost');


Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

Route::get('/siswa', [AdminController::class, 'siswa'])->name('siswa');
Route::get('/formsiswa', [AdminController::class, 'formsiswa'])->name('formsiswa');
Route::post('/addsiswa', [AdminController::class, 'addsiswa'])->name('addsiswa');

Route::get('/spp', [AdminController::class, 'spp'])->name('spp');
Route::get('/formspp', [AdminController::class, 'formspp'])->name('formspp');
Route::post('/addspp', [AdminController::class, 'addspp'])->name('addspp');
Route::get('/showspp/{id}', [AdminController::class, 'showspp'])->name('showspp');
Route::post('/updatespp/{id}', [AdminController::class, 'updatespp'])->name('updatespp');
Route::get('/deletespp/{id}', [AdminController::class, 'deletespp'])->name('deletespp');

Route::get('/kelas', [AdminController::class, 'kelas'])->name('kelas');
Route::get('/formkelas', [AdminController::class, 'formkelas'])->name('formkelas');
Route::post('/addkelas', [AdminController::class, 'addkelas'])->name('addkelas');
Route::get('/showkelas/{id}', [AdminController::class, 'showkelas'])->name('showkelas');
Route::post('/updatekelas/{id}', [AdminController::class, 'updatekelas'])->name('updatekelas');
