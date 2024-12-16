<?php

use App\Http\Controllers\LeadController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Rooms\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/create',[LeadController::class,'create'])->name('lead.index');
    Route::get('/viewleads',[LeadController::class,'view'])->name('viewleads');
    Route::post('/submit',[LeadController::class,'store'])->name('lead.submit');

    Route::get('/location',[LeadController::class,'location'])->name('lead.location');
    Route::post('/save',[LeadController::class,'save'])->name('location.save');
    Route::get('/viewlocation',[LeadController::class,'viewLocation'])->name('location.list');
    Route::get('/hotels',[LeadController::class, 'hotel'])->name('location');
    Route::post('/hotelsave',[LeadController::class,'saveHotel'])->name('hotel.save');

    Route::get('/create-room',[RoomController::class,'create'])->name('room.create');
    Route::post('/save-room',[RoomController::class,'store'])->name('room.save');

    Route::get('/get-hotels-by-location',[RoomController::class, 'getHotels'])->name('hotels.get');
    Route::get('/get-room-types-by-hotel',[RoomController::class, 'getRoomTypes'])->name('roomTypes.get');




});

require __DIR__.'/auth.php';
