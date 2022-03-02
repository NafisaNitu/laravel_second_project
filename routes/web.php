<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Example;
//use App\Http\Controllers\NameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FullNameController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\StudentController;

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

//Route::get('/', function () {
////    return view('welcome');
////    return 'Hello World';
////    return view('demo');
//});
//
//Route::get('/bitm', [
//    'uses' => 'App\Http\Controllers\Example@index',
//    'as' => 'basis'
//]);
//
//Route::get('/arif','App\Http\Controllers\NameController@index')->name('arif');
//
//Route::get('/full-name', [NameController::class, 'fullName']);
//
//Route::get('/', [StudentController::class, 'home'])->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/full-name', [HomeController::class, 'fullName'])->name('fullName');
Route::get('/calculator', [HomeController::class, 'calculator'])->name('calculator');

Route::get('/get-full-name', [FullNameController::class, 'getFullName'])->name('get-full-name');

Route::get('/student', [StudentController::class, 'student'])->name('student');


Route::post('/get-full-name',[FullNameController::class,'getFullName'])->name('get-full-name');
Route::post('/get-calculator-result', [CalculatorController::class, 'getResult'])->name('get-calculator-result');
