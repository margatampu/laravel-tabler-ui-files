<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');

// Interface Pages
Route::get('/cards', function () {
    return view('card');
})->name('card');

Route::get('/charts', function () {
    return view('chart');
})->name('chart');

Route::get('/prices', function () {
    return view('price');
})->name('price');

// Component Pages
Route::get('/maps', function () {
    return view('map');
})->name('map');

Route::get('/icons', function () {
    return view('icon');
})->name('icon');

Route::get('/stores', function () {
    return view('store');
})->name('store');

Route::get('/blogs', function () {
    return view('blog');
})->name('blog');

Route::get('/carousels', function () {
    return view('carousel');
})->name('carousel');

// Pages
Route::get('/profiles', function () {
    return view('profile');
})->name('profile');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/forgot', function () {
    return view('forgot');
})->name('forgot');

Route::get('/400', function () {
    return view('400');
})->name('400');

Route::get('/401', function () {
    return view('401');
})->name('401');

Route::get('/403', function () {
    return view('403');
})->name('403');

Route::get('/404', function () {
    return view('404');
})->name('404');

Route::get('/500', function () {
    return view('500');
})->name('500');

Route::get('/503', function () {
    return view('503');
})->name('503');

Route::get('/email', function () {
    return view('email');
})->name('email');

Route::get('/empty', function () {
    return view('empty');
})->name('empty');

Route::get('/forms', function () {
    return view('form');
})->name('form');

Route::get('/galleries', function () {
    return view('gallery');
})->name('gallery');

Route::prefix('docs')->name('docs.')->group(function () {
    Route::get('/', function () {
        return view('docs.index')->with('uri', 'index');
    })->name('index');

    Route::get('/alerts', function () {
        return view('docs.alert')->with('uri', 'alert');
    })->name('alert');

    Route::get('/avatars', function () {
        return view('docs.avatar')->with('uri', 'avatar');
    })->name('avatar');

    Route::get('/buttons', function () {
        return view('docs.button')->with('uri', 'button');
    })->name('button');

    Route::get('/colors', function () {
        return view('docs.color')->with('uri', 'color');
    })->name('color');

    Route::get('/cards', function () {
        return view('docs.card')->with('uri', 'card');
    })->name('card');

    Route::get('/charts', function () {
        return view('docs.chart')->with('uri', 'chart');
    })->name('chart');

    Route::get('/forms', function () {
        return view('docs.form')->with('uri', 'form');
    })->name('form');

    Route::get('/tags', function () {
        return view('docs.tag')->with('uri', 'tag');
    })->name('tag');

    Route::get('/typographies', function () {
        return view('docs.typography')->with('uri', 'typography');
    })->name('typography');
});
