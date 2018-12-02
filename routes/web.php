<?php

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
   app(); 
});

Route:: get('abuet', function () {
   return 'About Page';
});

get('reporting', function () {
   return 'Reporting feateru';
})

// Whatever logic to add report with more changes