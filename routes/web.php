<?php

//use Illuminate\Auth\Access\Gate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'App\Http\Controllers\MainController@home');

Route::get('/articles', 'App\Http\Controllers\MainController@articles');

Route::get('/about', 'App\Http\Controllers\MainController@about');

Route::get('/review', 'App\Http\Controllers\MainController@review')->name('review');

Route::post('/review/check', 'App\Http\Controllers\MainController@review_check');

Route::delete('/review/{id}', 'App\Http\Controllers\MainController@destroy')->name('reviews_destroy');



Route::name('user.')->group(function(){
    Route::view( '/private', 'private')->middleware( 'auth')->name('private');

    Route::get('/login', function (){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('login');
    })->name('login');

    Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login']);

    Route::get('/logout', function(){
        Auth::logout();
        return redirect( '/');
    })->name('logout');

    Route::get('/registration', function (){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('registration');
    })->name('registration');

    //$check_status

    Route::get('/inner', function (){
        if(Gate::check('view-protected-form')){
            return view('inner');
        };
        return 'Нет авторизации';
    })->middleware(['auth'])->name('inner');

    Route::post('/registration', [\App\Http\Controllers\RegisterController::class, 'save']);

});

//Route::get('/user/{ID}/{name}', function ($ID, $name) {
//    return 'ID: '. $ID.'. Name: '.$name;
//});
