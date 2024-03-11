<?php

use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


















// Route::get('/', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
});

// Route::group(['middleware' => 'auth'], function () {});

require __DIR__.'/auth.php';

// GraduationGawn Manage Here
Route::get('registergrown', [App\Http\Controllers\GraduationGrownRegister\GraduationGrownController::class, 'create'])->name('grown.create');
Route::post('store', [App\Http\Controllers\GraduationGrownRegister\GraduationGrownController::class, 'store'])->name('grown.store');


// GrownBooking Manage Here
Route::get('/', [App\Http\Controllers\GrownBooking\GrownBookingController::class, 'indexhomepage'])->name('homepage');
Route::get('listbooking', [App\Http\Controllers\GrownBooking\GrownBookingController::class, 'index'])->name('booking.list');
Route::get('registerbooking', [App\Http\Controllers\GrownBooking\GrownBookingController::class, 'create'])->name('booking.create');
Route::post('checkexamnumber', [App\Http\Controllers\GrownBooking\GrownBookingController::class, 'checkExamNumber'])->name('check-exam-number');
Route::post('storebooking', [App\Http\Controllers\GrownBooking\GrownBookingController::class, 'store'])->name('booking.store');


// To check student booking details
Route::get('bookingrecords', [App\Http\Controllers\GrownBooking\GrownBookingController::class, 'showBooking'])->name('booking.records');



// GrownPayment Manage Here
Route::get('grown-bookings/{bookingId}/pay-now', [App\Http\Controllers\Payment\GrownPaymentController::class, 'payNow'])->name('grown-bookings.pay-now');
Route::post('grown-bookings/{bookingId}/store-payment', [App\Http\Controllers\Payment\GrownPaymentController::class, 'storePayment'])->name('grown-bookings.store-payment');



// Graduation grown Contract Manage Here
Route::get('contract', [App\Http\Controllers\Contract\ContractController::class, 'index'])->name('contract.index');
Route::get('contractcreate', [App\Http\Controllers\Contract\ContractController::class, 'create'])->name('contract.create');
Route::get('contract/{contract}', [App\Http\Controllers\Contract\ContractController::class, 'show'])->name('contract.show');
Route::post('contractstore', [App\Http\Controllers\Contract\ContractController::class, 'store'])->name('contract.store');
Route::get('contractedit/{contract}', [App\Http\Controllers\Contract\ContractController::class, 'edit'])->name('contract.edit');
Route::post('contractupdate/{contract}', [App\Http\Controllers\Contract\ContractController::class, 'update'])->name('contract.update');