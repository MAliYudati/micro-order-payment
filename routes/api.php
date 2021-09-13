<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('orders', 'App\Http\Controllers\OrderController@create');
Route::get('orders', 'App\Http\Controllers\OrderController@index');

Route::post('webhook', 'App\Http\Controllers\WebhookController@midtransHandler');
