<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function() {
    return view('message.welcome');
});
Route::get('/comments/random', [MessageController::class, 'randomsystem']);

Route::get('/comments/{daytiming}', [MessageController::class, 'greetings']);

Route::get('/comments/freewords/{words}', [MessageController::class, 'freewords']);


