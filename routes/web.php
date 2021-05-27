<?php


use App\Http\Controllers\RoyxatOtishController;

use App\Http\Controllers\KirishController;
use App\Http\Controllers\FoydalanuvchiController;
use App\Http\Controllers\KitobController;
use App\Http\Controllers\XodimController;
use App\Http\Controllers\MuallifController;
use App\Http\Controllers\KitobMuallifController;
use App\Http\Controllers\IjaraController;
use App\Http\Controllers\BolimController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[RoyxatOtishController::class,"index"])->name('Royxatdan_otish');
//Route::get('foydalanuvchi',[FoydalanuvchiController::class,"index"]);
//Route::get('foydalanuvchi',[FoydalanuvchiController::class,"index"])->name('foydalanuvchi.index');
Route::get('kitob',[KitobController::class,"index"]);
Route::get('Add',[FoydalanuvchiController::class,"ShowBookAdd"])->name("ShowBookAdd");
Route::post('Qosh',[FoydalanuvchiController::class,"AddBooks"])->name("AddBooks");
Route::get('XodimAdd',[XodimController::class,"XodimAdd"])->name("XodimAdd");
Route::post('AddXodim',[XodimControllerController::class,"AddXodim"])->name("AddXodim");
Route::get('FoydalanuvchiAdd',[FoydalanuvchiController::class,"FoydalanuvchiAdd"])->name("FoydalanuvchiAdd");
Route::post('AddFoydalanuvchi',[FoydalanuvchiController::class,"AddFoydalanuvchi"])->name("AddFoydalanuvchi");
/*Route::get('Royxatdan_otish', function () {
    return view('Royxatdan_otish.index');
});
*/

Route::get('Royxatdan_otish',[RoyxatOtishController::class,"index"])->name('Royxatdan_otish');
Route::get('muallif',[MuallifController::class,"index"])->name('muallif');
//Route::get('foydalanuvchi',[FoydalanuvchiController::class,"index"]);
//Route::get('foydalanuvchi',[FoydalanuvchiController::class,"index"])->name('foydalanuvchi.index');
Route::get('kitob',[KitobController::class,"index"]);
//Route::get('kirish',[KirishController::class,"index"])->name('kirish');

//Route::get('kirish', function () {
  //  return view('kirish');
//});





