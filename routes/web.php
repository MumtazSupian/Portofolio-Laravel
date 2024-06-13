<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
        return view('home');
    });

    // untuk kembali ke page home
Route::get('/home.blade.php', function () {
    return view('home');
});

Route::get('/about.blade.php', function () {
    return view('about');
});

Route::get('/contact.blade.php', function () {
    return view('contact');
});

Route::get('/achievement.blade.php', function () {
    return view('achievement');
});

Route::get('/project.blade.php', function () {
    return view('project');
});
