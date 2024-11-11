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
    return redirect()->route('admin.clients');
});

/////////////
// PARTE 2 //
/////////////

///////////////////////////////////
// Agrupando as Rotas por PREFIX //
///////////////////////////////////

//Route::view('/', 'welcome');

// Route::prefix('admin')->group(function(){

//     Route::get('/dashboard', function(){
//         return "dashboard";
//     })->name('admin.dashboard');
    
//     Route::get('/users', function(){
//         return "users";
//     })->name('admin.users');
    
//     Route::get('/clients', function(){
//         return "clients";
//     })->name('admin.clients');

// });

/////////////////////////////////
// Agrupando as Rotas por NAME //
/////////////////////////////////

// Route::name('admin.')->group(function(){

//     Route::get('admin/dashboard', function(){
//         return "dashboard";
//     })->name('dashboard');
    
//     Route::get('admin/users', function(){
//         return "users";
//     })->name('users');
    
//     Route::get('admin/clients', function(){
//         return "clients";
//     })->name('clients');

// });

//////////////////////////////////////////
// Agrupando as Rotas por NAME e PREFIX //
//////////////////////////////////////////

Route::group([

        'prefix' => 'admin',
        'as' => 'admin.' 

    ], function(){

    Route::get('dashboard', function(){
        return "dashboard";
    })->name('dashboard');
    
    Route::get('users', function(){
        return "users";
    })->name('users');
    
    Route::get('clients', function(){
        return "clients";
    })->name('clients');

});





/////////////
// PARTE 1 //
/////////////

// Route::get('/empresa', function() {
//     return view('site/empresa');
// });

// Refactoring da rota /empresa que retorna apenas a view empresa
// A view emprea está localizada em resources/views/site/empresa.blade.php

// Route::any('/any', function() {
//     return "Permite todo tipo de acesso http (put, delete, get, post)";
// });

// Route::match(['put', 'delete'],'/match', function() {
//     return "Permite apenas acessos definidos";
// });

// Route::get('produto/{id}/{categoria?}', function($id, $cat = 'Default') {
//     return "O id do produto é: ".$id." e a categoria é: ".$cat;
// });

// Route::redirect('/sobre', '/empresa');
// Route::view('/empresa', 'site/empresa');

// Route::get('/timesnownews', function(){
//     return view('/news');
// })->name('noticias');

// Route::get('/novidades', function(){
//     return redirect()->route('noticias');
// });