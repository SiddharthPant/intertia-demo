<?php

use App\Http\Controllers\Auth\LoginController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store']);
Route::post('logout', [LoginController::class, 'destroy'])->middleware('auth');

Route::middleware('auth')->group(function () {
    //Route::get('/', function () {
    //    return Inertia::render('Welcome', [
    //        'canLogin' => Route::has('login'),
    //        'canRegister' => Route::has('register'),
    //        'laravelVersion' => Application::VERSION,
    //        'phpVersion' => PHP_VERSION,
    //    ]);
    //});

    Route::get('/', function () {
        return Inertia::render('Home');
    });

    Route::get('/users', function () {
        return Inertia::render('Users/Index', [
            'users' => User::query() // ::select(['id', 'name'])
            ->when(request('search'), function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
                ->paginate()
                ->withQueryString()
                ->through(fn($user) => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'can' => [
                        'edit' => Auth::user()->can('edit', $user),
                    ],
                ]),
            'filters' => Request::only(['search']),
            //        'users' => User::paginate()->through(fn($user) => [
            //            'id' => $user->id,
            //            'name' => $user->name,
            //        ]),
            'can' => [
                'createUser' => Auth::user()->can('create', User::class),
            ],
        ]);
    });

    Route::get('/users/create', function () {
        return Inertia::render('Users/Create');
    })->can('create', 'App\Models\User');

    Route::post('/users', function () {
        $attributes = Request::validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);
        User::create($attributes);

        // redirect
        return redirect('/users');
    });

    Route::get('/settings', function () {
        return Inertia::render('Settings');
    });

    //Route::get('/dashboard', function () {
    //    return Inertia::render('Dashboard');
    //})->middleware(['auth', 'verified'])->name('dashboard');

});

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

//require __DIR__.'/auth.php';
