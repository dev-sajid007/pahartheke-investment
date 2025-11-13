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


    return view('welcome', compact('tractions', 'plans', 'faqs'));
})->name('home');

Route::get('/our-traction', [TractionController::class, 'show'])->name('tractions.show');
Route::get('/plans/{plan}/details', [PlanController::class, 'publicShow'])->name('public.plan.show');

use App\Models\Investment;
Route::get('/dashboard', function () {
    $recentInvestments = Investment::with('plan')->latest()->take(10)->get();
    return view('dashboard', compact('recentInvestments'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/faqs', [FaqController::class, 'show'])->name('faqs.show');

Route::resource('tractions', TractionController::class)->middleware(['auth']);
Route::post('/investments', [App\Http\Controllers\InvestmentController::class, 'store'])->name('investments.store');
Route::get('/investments', [App\Http\Controllers\InvestmentController::class, 'index'])->name('investments.index');
Route::get('/investments/{investment}', [App\Http\Controllers\InvestmentController::class, 'show'])->name('investments.show');
Route::resource('plans', PlanController::class)->middleware(['auth']);
Route::resource('faqs', FaqController::class)->middleware(['auth']);
Route::resource('plans', PlanController::class)->middleware(['auth']);

Route::get('sections/index', [App\Http\Controllers\HeroSectionController::class, 'index']) ->name('home');

require __DIR__ . '/auth.php';
