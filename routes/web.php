<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('convention.index');
});

Route::get('/cosplayer-award', function () {
    return view('cosplayer-award.index');
});

Route::get('/cosplayer-groups', function () {
    return view('cosplayer-group.index');
});

Route::get('/commissioners', function () {
    return view('commissioner.index');
});

Route::get('/photography-videography', function () {
    return view('photography-vidography.index');
});
