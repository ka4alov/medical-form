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
use App\Student;
use Illuminate\Support\Facades\Input;
use Illuminate\Routing\RouteCompiler;

Route::get('/', function () {
    return view('auth.register');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

Route::get('/home', 'HomeController@index')->name('content');

//create user
Route::get('/create', 'StudentsController@create')->name('info.create');

//add user
Route::post('/create', 'StudentsController@store');

//show user
Route::get('home/{id}/show/', 'StudentsController@show')->name('info.info');

//add Table
Route::get('/home/{id}/add', 'StudentsController@add')->name('info.add_table');
Route::post('/home/{id}/add', 'StudentsController@add_table');

//edit users
Route::get('home/{id}/edit', 'StudentsController@edit')->name('info.edit');

//update users
Route::put('home/{id}/update', 'StudentsController@update')->name('info.update');

//delete users
Route::delete('home/delete/{id}', 'StudentsController@del')->name('delete');

//search users

Route::any('/search', function(){
    $q = Input::get('q');
    $students = Student::where('last_name', 'LIKE', '%'.$q.'%')->get(); 
    if(strlen($q) < 6){
        return redirect()->back()->with('success', 'Слишком короткий запрос!');
    }
    if (count( $students ) > 0)
    return view('search', compact('students'));
    else
        return redirect()->back()->with('success', 'О данном человеке, информация отсуствует!');
})->name('search');

});

