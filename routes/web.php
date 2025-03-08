<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ==== Contact Mail ====

Route::get('/peminjamanlab', function () {
    return view('peminjamanlab.index');
})->name('peminjamanlab');

Route::get('/peminjamanalat', function () {
    return view('peminjamanalat.index');
})->name('peminjamanalat');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::get('/forms', function () {
    return view('pages.forms.index');
});

Route::get('/buttons', function () {
    return view('pages.ui-features.buttons.index');
});

Route::get('/dropdowns', function () {
    return view('pages.ui-features.dropdowns.index');
});

Route::get('/typography', function () {
    return view('pages.ui-features.typography.index');
});

Route::get('/chart', function () {
    return view('pages.chart.index');
});

Route::get('/table', function () {
    return view('pages.table.index');
});

Route::get('/icons', function () {
    return view('pages.icons.index');
});

Route::get('/login', function () {
    return view('pages.user-pages.login.index');
})->name('login');

Route::get('/register', function () {
    return view('pages.user-pages.register.index');
});

Route::get('/erro404', function () {
    return view('pages.error-pages.404.index');
});

Route::get('/erro500', function () {
    return view('pages.error-pages.500.index');
});
