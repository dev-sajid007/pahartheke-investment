<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TractionController;
use App\Models\Faq;
use App\Models\Plan;
use App\Models\Traction;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $tractions = Traction::latest()->paginate(6);
    $plans = Plan::latest()->paginate(6);
    $faqs = Faq::latest()->paginate(6);


    return view('welcome', compact('tractions','plans','faqs'));
})->name('home');

Route::get('/our-traction', [TractionController::class, 'show'])->name('tractions.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/faqs', [FaqController::class, 'show'])->name('faqs.show');

Route::resource('tractions', TractionController::class)->middleware(['auth']);
Route::resource('plans', PlanController::class)->middleware(['auth']);
Route::resource('faqs', FaqController::class)->middleware(['auth']);
Route::resource('plans', PlanController::class)->middleware(['auth']);

require __DIR__ . '/auth.php';
