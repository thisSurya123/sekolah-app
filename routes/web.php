<?php

use Illuminate\Support\Facades\Route;
use App\Models\Siswa;
use App\Models\Jurusan;
use App\HTTP\Controllers\SiswaController;
use App\HTTP\Controllers\LoginController;

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
    return view('component.login');
})->name('login')->middleware('guest');


Route::group(['middleware' => ['siswa']], function(){
    Route::get('/dashboard', function(){
        return view('dashboard.siswa.profile-siswa',[
            'siswa' => Siswa::find(Auth::guard('siswa')->user()->id)
        ]);
    });

    Route::get('dashboard/kelas', function(){
        return view('dashboard.siswa.kelas-siswa',[
            'kelas' => Jurusan::find(Auth::guard('siswa')->user()->jurusan_id)->siswa
        ]);
    });
});

Route::resource('/siswa', SiswaController::class);


Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);