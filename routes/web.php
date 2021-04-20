<?php

use App\Events\MyEvent;
use App\Events\ServerMessage;
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

Route::view('/client', 'client');
Route::view('/server', 'server');
Route::post('/server/post-message', function () {
    event(new ServerMessage(request('message')));

    return redirect()->to('/server');
});
