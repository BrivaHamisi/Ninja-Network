<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', function () {

    $ninjas = [
        ["name"=>"John", "skill"=>"75", "id"=>"1"],
        ["name"=>"Jane", "skill"=>"90", "id"=>"2"],
        ["name"=>"Jim", "skill"=>"50", "id"=>"3"],
        ["name"=>"Jill", "skill"=>"45", "id"=>"4"],
        ["name"=>"Joe", "skill"=>"95", "id"=>"5"],
    ];

    return view('ninjas.index', ["greeting" =>"Hello!", "ninjas" => $ninjas]);
});
Route::get('/ninjas/create', function () {
    return view('ninjas.create');
});

Route::get('/ninjas/{id}', function ($id) {
    return view('ninjas.show', ["id" => $id]);
});

