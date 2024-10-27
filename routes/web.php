<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\UnitController;

use App\Models\Property;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/property/map/',function(){
    $property = Property::latest()->paginate(4);
    return view('property.property_map',['property' => $property]);
})->name('property.map');

Route::get('/dashboard', function () {
    $property = Property::latest()->paginate(10);
    return view('dashboard',['property' => $property]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('properties', PropertyController::class);
Route::resource('invoices',InvoiceController::class);
Route::resource('agents',AgentController::class);
Route::resource('faqs',FAQController::class);
Route::resource('units',UnitController::class);


Route::get('/agent/overview',function(){
    return view('agents.overview');
})->name('agents.overview');

Route::get('/earnings',function(){
    return view('property/earnings');
});


// Route::get('/invoice_overview',function(){
//     return view('invoices/overview');
// });
