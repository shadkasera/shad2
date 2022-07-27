<?php

use GuzzleHttp\Psr7\Request;
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

Route::get('/', function() {
    return view('listings', [
        'heading'=> 'latest listings',
        'listings' => [
            [
            'id' => 1,
            'title' => 'listing one',
            'description' => 'this is the short descrption of my listings'
            ],
            [
                'id' => 2,
                'title' => 'listing two',
                'description' => 'this is the short descrption of my listings'
                ]
        ],

    ]);
});
