<?php
Use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\PizzaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can registerS web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/create', function () {
//    return view('create');
//});
//Route::get('/show', function () {
//    return view('pizzas');
//});

// pizza routes
//Route::get('/pizzas', 'App\\Http\\Controllers\\PizzaController@index');

Route::get("/users",[PizzaController::class,'show']);

Route::get("/delete/{id}",[PizzaController::class,'delete']);
Route::get("/edit/{id}",[PizzaController::class,'showData']);
Route::post("edit",[PizzaController::class,'update']);


Route::view('add','create');
Route::post("/add",[PizzaController::class,'addData']);
//Route::get('/pizzas/{id}', 'App\\Http\\Controllers\\PizzaController@show');
//Route::post('/pizzas', 'PizzaController@store');
//Route::post("/add","App\\Http\\Controllers\\PizzaController@store");
//Route::get("/users",[Users::class,'index']);
//Route::get("/users/{user}",[Users::class,'index']);
//Route::post('/store/', 'App\Http\Controllers\PizzaController@store')->name('store');
