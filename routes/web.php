<?php


Route::get('/', function () {
    return view('index');
});

Route::post('/result', 'calculatorController@calculate');
