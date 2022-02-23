<?php

use App\Http\Controllers\UsersController;
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

Route::get('/users',function(){
    $users = \App\Models\User::search('山')->get();
    dd($users);
});

Route::get('/users',function(){
    // $users = \App\Models\User::search('山')->get();
    $client = Algolia\AlgoliaSearch\SearchClient::create(
        env('ALGOLIA_APP_ID'),
        env('ALGOLIA_SECRET')
    );

    $index = $client->initIndex('users');
    $results = $index->search('山');
    dd($results);
});

Route::get('/users', [UsersController::class, 'index']);
