<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $comics = config('cards');

    $servicesLinks = config('servicesLinks');

    return view('home', compact('comics', 'servicesLinks'));
});
