<?php

use App\Models\UserAccessLog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

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
// Middleware Auth
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        if (auth()->user()->role == 'admin') {
            return view('dashboard.index'); // View dashboard jika admin
        }
        return redirect('/'); // Redirect ke welcome jika bukan admin
    })->name('dashboard');
});
////////////////////////

Route::get('/user-access-logs', function () {
    return view('logs', ['logs' => UserAccessLog::latest()->get()]);
});

Route::get('/labs-room', function () {
    return view('labs-room.index');
})->name('labs-room');

Route::get('/jadwal', function () {
    return view('jadwal.index');
})->name('jadwal');

Route::middleware('registration.time')->group(function () {
    Route::prefix('peminjamanlab')->group(function () {
        Route::get('/', function () {
            return view('peminjamanlab.index');
        })->name('peminjamanlab');

        Route::get('/create', function () {
            return view('peminjamanlab.create');
        })->name('peminjamanlab.create');
    });

    Route::prefix('peminjamanalat')->group(function () {
        Route::get('/', function () {
            return view('peminjamanalat.index');
        })->name('peminjamanalat');

        Route::get('/create', function () {
            return view('peminjamanalat.create');
        })->name('peminjamanalat.create');
    });
});

// Home View
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
})->name('home');
////////////////////////

// Login View
Route::get('/login', function () {
    return view('pages.user-pages.login.index');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login');
////////////////////////

Route::post('/logout', function () {
    Auth::logout(); // Logout user
    request()->session()->invalidate(); // Hapus semua session
    request()->session()->regenerateToken(); // Regenerasi CSRF token

    return redirect('/login'); // Redirect ke halaman login
})->name('logout');

Route::post('/logouts', function () {
    Auth::logout(); // Logout user
    request()->session()->invalidate(); // Hapus semua session
    request()->session()->regenerateToken(); // Regenerasi CSRF token

    return redirect('/'); // Redirect ke halaman login
})->name('logouts');

Route::get('/register', function () {
    return view('pages.user-pages.register.index');
});

Route::get('/erro404', function () {
    return view('pages.error-pages.404.index');
});

Route::get('/erro500', function () {
    return view('pages.error-pages.500.index');
});
