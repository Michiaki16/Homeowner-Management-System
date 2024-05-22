<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeownerController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\DashboardController;

//homeowner Routes
Route::get('/homeowners', [HomeownerController::class, 'index'])->name('homeowners.index');
Route::get('/homeowners/create', [HomeownerController::class, 'create'])->name('homeowners.createmember');
Route::post('/homeowners', [HomeownerController::class, 'store'])->name('homeowners.store');
Route::get('/homeowners/{homeowner}/edit', [HomeownerController::class, 'edit'])->name('homeowners.edit');
Route::put('/homeowners/{homeowner}', [HomeownerController::class, 'update'])->name('homeowners.update');
Route::delete('/homeowners/{homeowner}', [HomeownerController::class, 'destroy'])->name('homeowners.destroy');

//events routes
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::get('/events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
Route::put('/events/{id}', [EventController::class, 'update'])->name('events.update');
Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('events.destroy');

// Complaint routes
Route::get('/complaints', [ComplaintController::class, 'index'])->name('complaints.index');
Route::get('/complaints/create', [ComplaintController::class, 'create'])->name('complaints.create');
Route::post('/complaints', [ComplaintController::class, 'store'])->name('complaints.store');
Route::get('/complaints/{id}/edit', [ComplaintController::class, 'edit'])->name('complaints.edit');
Route::put('/complaints/{id}', [ComplaintController::class, 'update'])->name('complaints.update');
Route::delete('/complaints/{id}', [ComplaintController::class, 'destroy'])->name('complaints.destroy');

//map routes
Route::get('/maps', [MapController::class, 'index'])->name('maps.index');

//Dashboard routes
Route::get('/', [DashboardController::class, 'index'])->name('layout');
// Route::get('/', [DashboardController::class, 'recentAct'])->name('layout');