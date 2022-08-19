<?php

use Illuminate\Support\Facades\Routes;

Route::get('/',function(){
    return view('Home');
});

Route::get('/about-us', function(){
    return view('about');
});
