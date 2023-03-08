<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

use App\Http\Controllers\FeedbackController;

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
//     return view('index');
// });




Route::get('/', [MainController::class, 'home']);
Route::get('/news/{NewsTheme}', [MainController::class, 'news']);
Route::get('/news/{NewsTheme}/{NewsName}', [MainController::class, 'newsName']);
Route::get('/news', [MainController::class, 'newsM']);




Route::get('/inlineContent/main', [MainController::class, 'main']);
Route::get('/inlineContent/main_order', [MainController::class, 'main_order']);
Route::get('/inlineContent/news_column1', [MainController::class, 'news_column1']);
Route::get('/inlineContent/news_column2', [MainController::class, 'news_column2']);


Route::post('/send-mail', [FeedbackController::class, 'send']);




Route::get('/search', [MainController::class, 'search']);




