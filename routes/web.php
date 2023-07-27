<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\TermController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\RefundController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SliderController;
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

/*Route::get('/', function () {
    return view('welcome');
})->name('index');*/
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/about_us', [FrontendController::class, 'about'])->name('about');
Route::get('/privacy_policy', [FrontendController::class, 'privacy'])->name('privacy_policy');
Route::get('/terms_conditions', [FrontendController::class, 'terms'])->name('terms');
Route::get('/refund_policy', [FrontendController::class, 'refund'])->name('refund');
Route::get('/event-list', [FrontendController::class, 'event'])->name('event');
Route::post('/event-filter', [FrontendController::class, 'event_filter'])->name('event_filter');
Route::get('/event-details/{id}', [FrontendController::class, 'event_details'])->name('event_details');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resources([
        'about' => AboutController::class,
       'privacy' => PrivacyController::class,
       'term' => TermController::class,
       'location' => LocationController::class,
       'refund' => RefundController::class,
       'event' => EventController::class,
       'slider' => SliderController::class
     ]);
});

require __DIR__.'/auth.php';
