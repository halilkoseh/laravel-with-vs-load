<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;    




Route::get('/', function () {
    return view('welcome');
});


Route::get('/test-load', function () {
    $users = User::all();
    foreach ($users as $user) {
        $user->load('posts');
    }
    return 'Done';
});

Route::get('/test-with', function () {
    $users = User::with('posts')->get();
    return 'Done';
});
