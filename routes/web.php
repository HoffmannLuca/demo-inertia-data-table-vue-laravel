<?php

use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Inertia\Inertia;

Route::get('/', function(){
    return Inertia::render('Demo', [
        'usersWrapped' => JsonResource::collection(User::dataTable('usersWrapped')),
        'usersFlat' => User::dataTable('usersFlat'),
    ]);
})->name('demo');

// Route::inertia('/', 'Welcome', [
//     'canRegister' => Features::enabled(Features::registration()),
// ])->name('home');

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::inertia('dashboard', 'Dashboard')->name('dashboard');
// });

// require __DIR__.'/settings.php';
