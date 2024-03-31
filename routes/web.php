
<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
})->name('Home');

Route::get('/AboutUs', function () {
    return view('AboutUs');
})->name('aboutus');

Route::get('/Exback', function () {
    return view('Services.Exback');
})->name('Exback');

Route::get('/Exchest', function () {
    return view('Services.Exchest');
})->name('Exchest');

Route::get('/Exbiceps', function () {
    return view('Services.Exbiceps');
})->name('Exbiceps');

Route::get('/Extriceps', function () {
    return view('Services.Extriceps');
})->name('Extriceps');

Route::get('/Exshoulder', function () {
    return view('Services.Exshoulder');
})->name('Exshoulder');

Route::get('/Exlegs', function () {
    return view('Services.Exlegs');
})->name('Exlegs');


Route::get('/Excardio', function () {
    return view('Services.Excardio');
})->name('Excardio');

Route::get('/Exabs', function () {
    return view('Services.Exabs');
})->name('Exabs');


Route::middleware(['auth'])->group(function () {
    Route::get('/Services', [ServicesController::class, 'index'])->name('services');
    Route::get('/Shop', [ShopController::class, 'index'])->name('shop');
});

Route::get('/Login', [AuthManager::class, 'Login'])->name('login');
Route::post('/Login', [AuthManager::class, 'LoginPost'])->name('loginpost');

Route::get('/Registration', [AuthManager::class, 'Register'])->name('registration');
Route::post('/Registration', [AuthManager::class, 'RegisterPost'])->name('registerpost');

Route::post('/Logout', [AuthManager::class, 'logout'])->name('logout');

