<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/proyecto1', function () {
    return view('p1');
});

Route::get('/proyecto2',function (){
    return view('p2');
}
);

Route::get('/proyecto4',function (){
    return view('p4');
}
);

Route::get('/proyecto5',function (){
    return view('p5');
}
);