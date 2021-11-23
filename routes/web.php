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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::post('/events', [EventController::class, 'store']);

Route::get('contacts/contact', function () {
    return view('contacts.contact');
});
//
// Route::get('/produtos', function () {
//
//   $search = request('search'); // QueryString Param
//
//   return view('products', ['search' => $search]);
// });
//                   // tens que colocar o ? no {}
// Route::get('/produto/{id?}', function ($id = null) { // Caso não seja 'enviado' algum parametro, posso tornar default $id = 1
//   return view('product', ['id' => $id]);
// });
