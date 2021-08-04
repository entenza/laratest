<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SingleController;

use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

Route::get('/saludar', [SingleController::class, 'saludar'])->name('saludar');

// Route::get('/saludos', function () {
//     Route::redirect('/saludos', '/saludar');
//     // return redirect()->route('saludar');
//     //return "Saludos para ti";
// });

Route::get('/saludos', [SingleController::class, 'saludos'])->name('saludos');

Route::resource('photos', PhotoController::class);

Route::get('/greetings', function (){
    // return view('greetings', ['name' => 'Elmer Entenza']);
    // View::composer(['greetings'], 'mipropiosaludo');
    return View::make('greetings', ['name' => 'James']);
});

Route::get('/test', function (Request $request) {
    
    function getNombre() {
        return "<br />Texto desde dentro de una funcion";
    }
    
    echo 'date - '.date('Y-m-d H:i:s');
    echo '<br />';
    echo 'now - '.now();
    echo getNombre();
    

    // return view('child', [
    //     'footer' => 'footer desde controller'
    // ]);
});

Route::get('/lista', [SingleController::class, 'lista']);




Route::get('/post/create', [PostController::class, 'create']);
Route::post('/post', [PostController::class, 'store']);
