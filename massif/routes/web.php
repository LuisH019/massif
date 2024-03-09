<?php

use App\Http\Controllers\fichaController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
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

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    /**
     * Home Routes
     */
    Route::get('/', 'LoginController@show')->name('login');

    Route::group(['middleware' => ['guest']], function () {
        /**
         * Register Routes
         */
        Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
        Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');


    });

    Route::group(['middleware' => ['auth']], function () {
        
        Route::get('/home', [PacienteController::class, 'index'])->name('home.index');

        Route::post('/pacientes', [PacienteController::class, 'store']);
        Route::get('/pacientes/{paciente}', [PacienteController::class, 'show']);
        Route::get('/fichaPaciente', 'fichaController@index')->name('ficha.index');
        Route::get('/{paciente}/edit', 'PacienteController@edit')->name('paciente.edit');
        Route::post('/{paciente}/update', [PacienteController::class, 'update'])->name('paciente.update');
        Route::get('/{paciente}/delete', 'PacienteController@destroy')->name('paciente.destroy');
        Route::get('/{paciente}/show',[PacienteController::class ,'show'])->name('paciente.show');
        Route::get('/allpacientes', 'PacienteController@mostrarTabela')->name('table.index');

        Route::get('/pacientepdf/', 'PacienteController@createPDF')->name('exportpdf');

        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

            Route::get('/home', 'HomeController@index')->name('admin.index'); 

            Route::get('/users','UserController@index')->name('user.index');
            Route::get('/{user}/delete','UserController@destroy')->name('user.destroy');

        });


    });

    
});
