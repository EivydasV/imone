<?php

use App\Http\Controllers\CompanyController;
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
    return view('welcome');
});
Auth::routes();
Route::get('/', function () {
    return redirect(route('login'));
});
Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::post('companies/search', [CompanyController::class, 'index']);
Route::resource('companies', CompanyController::class, ['except' => ['index']]);