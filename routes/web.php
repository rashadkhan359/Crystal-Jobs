<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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
// - All Listing
Route::get('/', [ListingController::class, 'index']);
// - Create Job
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');
// - Store listing data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');
// - Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');
// - Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');
// - Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');
// - Manage Listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');
// - Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);
// - Show register/create form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');
// - Create New User
Route::post('/users', [UserController::class, 'store']);
// - Logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
// - Show login form
Route::get('/login', [UserController::class, 'login'])->middleware('guest');
// - Login User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

//Common Resource routes:
// index - show all listings
// show - show single listing
// create - show form to create a listing
// store - store new listing
// edit - show form to edit listing
// update - update listing
// destroy - Delete listing
//Basic way-----------
// Route::get('/', function () {
//     return view(
//         'listings',
//         [
//             'heading' => 'Latest Listings',
//             'listings' => [
//                 [
//                     'id' => 1,
//                     'title' => 'Listing One',
//                     'description' => 'Lorem ipsum jaoba anfka infa fjanfknf sfsnfs f fjnf afjkaf naf abfnafbakfja f kfnmaf bf f al f  dv wnf ewa. faflabfamf'

//                 ],
//                 [
//                     'id' => 2,
//                     'title' => 'Listing Two',
//                     'description' => 'Lorem ipsum jaoba anfka infa fjanfknf sfsnfs f fjnf afjkaf naf abfnafbakfja f kfnmaf bf f al f  dv wnf ewa. faflabfamf'

//                 ]
//             ]
//         ]
//     );
// });



//My Example
// Route::get('/hello',function (){
//     return response('<h1>Hello Brothers!!</h1>');
// });
// Route::get('posts{id}', function($id){
//     return response('Post'.$id);
// })->where('id', '[0-9]+');
// Route::get('/search', function(Request $request){
//     return ($request->name." ".$request->city);
// });
