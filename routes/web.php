<?php

use App\Livewire\CreateUser;
use App\Livewire\PanelDashboard;
use App\Livewire\PanelLogin;
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

Route::get('/', function () {
    return redirect()->route('panel');
});

Route::get('/panel', PanelDashboard::class)->name('panel');
Route::get('/panel-login', PanelLogin::class)->name('panel.login');
Route::get('/panel/create', CreateUser::class)->name('user.create');
