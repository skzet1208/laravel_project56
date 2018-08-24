<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'api'], function () {
    Route::get('articles',  function () {
        $articles = [
            ['id' => '1', 'content' => 'test_1', 'title' => 'sample title_1'],
            ['id' => '2', 'content' => 'test_2', 'title' => 'sample title_2'],
            ['id' => '3', 'content' => 'test_3', 'title' => 'sample title_3'],
        ];
        return $articles;
    });
});
