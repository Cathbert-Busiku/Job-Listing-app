<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing  


// All listingn
Route::get('/', [ListingController::class, 'index']);

//Show Create Form
Route::get('/listings/create', [ListingController::class, 
'create'])->middleware('auth');

// Store Listing Data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');
 
//Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//Update submit Listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

//Delete a Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Manage Listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// Single listing using model binding
Route::get('/listings/{listing}',[ListingController::class, 'show']);

//Show Register Create Form
Route::get('/register',[UserController::class, 'create'])->middleware('guest');

//Create New User
Route::post('/users', [UserController::class, 'store']);

// Log Out User
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']); 





// All listingn
// Route::get('/', function () {
//     return view('listings',[
//         'listings' => Listing::all()
//     ]);

// });



// Single listing
// Route::get('/listings/{id}', function($id) {
//     return view('listing', [
//         'heading' => 'Latest Listing',
//         'listing' => Listing::find($id)
//     ]);
// });



// Route::get('/hello', function() {
//     return response('<h1> Hello world </h1>')
//         
// });

// Route::get('/posts/{id}', function($id){
//     // dd($id);
//     // ddd($id);
//     return response('Post '. $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request){
//     dd($request->name . ' ' . $request->city);
// });