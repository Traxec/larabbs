<?php

Route::view('/', 'pages.root')->name('root');

Auth::routes();

Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);
