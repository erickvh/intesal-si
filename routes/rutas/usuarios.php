<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'usuarios', 'middleware' => ['auth']], function () {
    // Ruta para visualizar el index 
    Route::get('/', 'Usuarios\UsuarioController@index')->name('usuarios.index');
    // Ruta para listar todos los usuarios 
    Route::get('/list', 'Usuarios\UsuarioController@list')->name('usuarios.list');
    // Ruta para realizar el post y guardar un nuevo usuario
    Route::post('/store', 'Usuarios\UsuarioController@store')->name('usuarios.store');
    // Ruta pora mostrar un usuario por medio de su id
    Route::get('/show/{id}', 'Usuarios\UsuarioController@show')->name('usuarios.show');
    // Ruta para actualizar un usuario por medio de su id
    Route::put('/update/{id}', 'Usuarios\UsuarioController@update')->name('usuarios.update');
    //  Ruta para eliminar un usuario por medio de su id
    Route::delete('/delete/{id}', 'Usuarios\UsuarioController@destroy')->name('usuarios.delete');
});
