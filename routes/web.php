<?php

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

// Route::get('/empresa', function() {
//     return view('site/empresa');
// });

// Refactoring da rota /empresa que retorna apenas a view empresa
// A view emprea está localizada em resources/views/site/empresa.blade.php

Route::any('/any', function() {
    return "Permite todo tipo de acesso http (put, delete, get, post)";
});

Route::match(['put', 'delete'],'/match', function() {
    return "Permite apenas acessos definidos";
});

Route::get('produto/{id}/{categoria?}', function($id, $cat = 'Default') {
    return "O id do produto é: ".$id." e a categoria é: ".$cat;
});

Route::redirect('/sobre', '/empresa');
Route::view('/empresa', 'site/empresa');

Route::get('/timesnownews', function(){
    return view('/news');
})->name('noticias');

Route::get('/novidades', function(){
    return redirect()->route('noticias');
});