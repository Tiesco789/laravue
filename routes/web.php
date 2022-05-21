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

Route::get('/', 'MainController@main')->name('site.index');
Route::get('/about-us', 'AboutUsController@aboutUs')->name('site.about-us');
Route::get('/contact', 'ContactController@contact')->name('site.contact');
Route::get('/login', function () { return 'Login'; })->name('site.login');

Route::prefix('/app')->group(function () {
    Route::get('/customers', function () { return 'Customers'; })->name('app.customers');
    Route::get('/providers', function () { return 'providers'; })->name('app.providers');
    Route::get('/products', function () { return 'Products'; })->name('app.products');
});

// Nome, categoria, assunto mensagem
// Route::get(
//     '/contato/{nome}/{categoria_id}',
//     function(
//         string $nome = 'Desconhecido',
//         int $categoria_id = 1
//     ) {
//         echo "Estamos aqui: $nome - $categoria_id";
//     }
// )->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
