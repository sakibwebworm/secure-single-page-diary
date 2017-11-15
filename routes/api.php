<?php

use App\Diary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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
Route::middleware('auth:api')->post('/add', 'DiaryCOntroller@store');
Route::get('/search',function(){
    $query = Input::get('query');
    $users = Diary::where('title','like','%'.$query.'%')->get();
    return response()->json($users);
});