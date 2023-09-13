<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\MoutonController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//gestion des authentifications
Route::get('admin', [Usercontroller::class, 'index'])->name('admin')->middleware('admin');
Route::get('listEleveur', [Usercontroller::class, 'listEleveur'])->name('listEleveur')->middleware('admin');
Route::get('listClient', [Usercontroller::class, 'listClient'])->name('listClient')->middleware('admin');
Route::get('listAdmin', [Usercontroller::class, 'listAdmin'])->name('listAdmin')->middleware('admin');
Route::get('users/details/{id}', [Usercontroller::class, 'show'])->name('users.show')->middleware('admin');
Route::middleware(['auth'])->group(function () {

    Route::post('/users/block/{id}', [UserController::class, 'block'])->name('users.block');

    Route::post('/users/unblock/{id}', [UserController::class, 'unblock'])->name('users.unblock');
});

Route::resource('users', UserController::class)->only([
    'index', 'show', 'edit', 'update', 'destroy'
])->names([
    'index' => 'users.index',
    'show' => 'users.show',
    'edit' => 'users.edit',
    'update' => 'users.update',
    'destroy' => 'users.destroy',
]);




// Route::get('eleveur',function(){
//     return view('eleveur.eleveur');
// })->name('eleveur');

Route::get('indexByOwner',[MoutonController::class,'indexByOwner'])->name('indexByOwner')->middleware('eleveur');



Route::get('client',function(){
    return view('client.client');
})->name('client')->middleware('client');

//gestion des cruds

Route::resource('users', UserController::class);

//moutons
Route::middleware(['eleveur'])->group(function () {
    Route::resource('moutons', MoutonController::class)->only(['create', 'store', 'edit', 'update', 'destroy']);
});
Route::get('moutons', [MoutonController::class, 'index'])->name('moutons.index');
Route::get('moutons/{mouton}', [MoutonController::class, 'show'])->name('moutons.show');
Route::get('contact', [MoutonController::class, 'contact'])->name('contact');



