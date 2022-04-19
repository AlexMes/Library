<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\v1\BookController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Books
Route::prefix('book')->group(function (){

    Route::get('/', 'API\v1\BookController@index');
    Route::get('/{id}', 'API\v1\BookController@show');
    Route::post('/create', 'API\v1\BookController@store');
    Route::put('/{book}', 'API\v1\BookController@update');
    Route::delete('/{book}', 'API\v1\BookController@destroy');

});
