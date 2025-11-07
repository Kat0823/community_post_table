
<?php

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
    return view('home');
})->name('home');

/*register/login*/
Route::get('/register', function () {
    return view('auth/register');
});
Route::get('/login', function () {
    return view('auth/login');
});
Route::get('/forgotpassword', function () {
    return view('auth/forgot');
});

/*ui*/

// Inquiries
Route::get('/boardinghunter/home/showinquiries', function () {
    return view('inquiries/showinquiries');
})->name('inquiries.show');

// Profile
Route::get('/boardinghunter/home/profile', function () {
    return view('profiles/showprofile');
})->name('profile.show');

// Display all posts for CommunityPost
Route::get('/boardinghunter/home/communitypost', [CommunityPostController::class, 'index'])
->name('communitypost.index');

// Display a single post (by ID) CommunityPost
Route::get('/boardinghunter/home/communitypost/{id}', [CommunityPostController::class, 'show'])
->name('communitypost.show');