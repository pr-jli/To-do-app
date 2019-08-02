<?php
//use Symfony\Component\Routing\Route;
use App\Http\Controllers\TaskController;
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
//Route::get("/tasks","TaskController@index");
//Route::post("/edit/", "TaskController@update");
//Route::post("/create", "TaskController@store");
//Route::delete("tasks/{tasks}", "TaskController@destroy");
Route::get('/',function()
{
    return view('welcome');
});
/*Route::get('/tasks','TaskController@index');
Route::post('/tasks' , 'TaskController@store');
Route::get('/tasks/create' , 'TaskController@create');
Route::get('/tasks/{task}','TaskController@show');
Route::get('/tasks/{task}/edit' , 'TaskController@edit');
Route::patch('/tasks/{task}' , 'TaskController@update');
Route::delete('/tasks/{task}' , 'TaskController@destroy');
*/
Route:: resource('tasks','TaskController');
//Route::get('/create' , 'TaskController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

