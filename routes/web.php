<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

Route::get('index', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('register', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


Route::get('/', function () {
return view('index');
})->name('index');

Route::get('/index-two', function () {
return view('index-two');
})->name('index-two');

Route::get('/index-three', function () {
return view('index-three');
})->name('index-three');

Route::get('/index-four', function () {
return view('index-four');
})->name('index-four');

Route::get('/add-course', function () {
return view('add-course');
})->name('add-course');

Route::get('/blog-details', function () {
return view('blog-details');
})->name('blog-details');

Route::get('/blog-grid', function () {
return view('blog-grid');
})->name('blog-grid');

Route::get('/blog-list', function () {
return view('blog-list');
})->name('blog-list');

Route::get('/blog-masonry', function () {
return view('blog-masonry');
})->name('blog-masonry');

Route::get('/blog-modern', function () {
return view('blog-modern');
})->name('blog-modern');

Route::get('/cart', function () {
return view('cart');
})->name('cart');

Route::get('/checkout', function () {
return view('checkout');
})->name('checkout');

Route::get('/coming-soon', function () {
return view('coming-soon');
})->name('coming-soon');

Route::get('/course-details', function () {
return view('course-details');
})->name('course-details');

Route::get('/course-grid', function () {
return view('course-grid');
})->name('course-grid');

Route::get('/course-lesson', function () {
return view('course-lesson');
})->name('course-lesson');

Route::get('/course-list', function () {
return view('course-list');
})->name('course-list');

Route::get('/error-404', function () {
return view('error-404');
})->name('error-404');

Route::get('/error-500', function () {
return view('error-500');
})->name('error-500');

Route::get('/faq', function () {
return view('faq');
})->name('faq');

Route::get('/forgot-password', function () {
return view('forgot-password');
})->name('forgot-password');

Route::get('/help-center', function () {
return view('help-center');
})->name('help-center');

Route::get('/index', function () {
return view('index');
})->name('index');

Route::get('/instructor-chat', function () {
return view('instructor-chat');
})->name('instructor-chat');

Route::get('/instructor-course', function () {
return view('instructor-course');
})->name('instructor-course');

Route::get('/instructor-dashboard', function () {
return view('instructor-dashboard');
})->name('instructor-dashboard');

Route::get('/instructor-earnings', function () {
return view('instructor-earnings');
})->name('instructor-earnings');

Route::get('/instructor-edit', function () {
return view('instructor-edit');
})->name('instructor-edit');

Route::get('/instructor-grid', function () {
return view('instructor-grid');
})->name('instructor-grid');

Route::get('/instructor-list', function () {
return view('instructor-list');
})->name('instructor-list');

Route::get('/instructor-notifications', function () {
return view('instructor-notifications');
})->name('instructor-notifications');

Route::get('/instructor-orders', function () {
return view('instructor-orders');
})->name('instructor-orders');

Route::get('/instructor-profile', function () {
return view('instructor-profile');
})->name('instructor-profile');

Route::get('/instructor-reviews', function () {
return view('instructor-reviews');
})->name('instructor-reviews');

Route::get('/instructor-security', function () {
return view('instructor-security');
})->name('instructor-security');

Route::get('/instructor-tickets', function () {
return view('instructor-tickets');
})->name('instructor-tickets');

Route::get('/job-category', function () {
return view('job-category');
})->name('job-category');

Route::get('/login', function () {
return view('login');
})->name('login');

Route::get('/new-password', function () {
return view('new-password');
})->name('new-password');

Route::get('/notifications', function () {
return view('notifications');
})->name('notifications');

Route::get('/pricing-plan', function () {
return view('pricing-plan');
})->name('pricing-plan');

Route::get('/privacy-policy', function () {
return view('privacy-policy');
})->name('privacy-policy');

Route::get('/register-step-five', function () {
return view('register-step-five');
})->name('register-step-five');

Route::get('/register-step-four', function () {
return view('register-step-four');
})->name('register-step-four');

Route::get('/register-step-one', function () {
return view('register-step-one');
})->name('register-step-one');

Route::get('/register-step-three', function () {
return view('register-step-three');
})->name('register-step-three');

Route::get('/register-step-two', function () {
return view('register-step-two');
})->name('register-step-two');

Route::get('/register', function () {
return view('register');
})->name('register');

Route::get('/setting-student-subscription', function () {
return view('setting-student-subscription');
})->name('setting-student-subscription');

Route::get('/student-profile', function () {
return view('student-profile');
})->name('student-profile');

Route::get('/students-grid', function () {
return view('students-grid');
})->name('students-grid');

Route::get('/students-list', function () {
return view('students-list');
})->name('students-list');

Route::get('/support', function () {
return view('support');
})->name('support');

Route::get('/term-condition', function () {
return view('term-condition');
})->name('term-condition');

Route::get('/under-construction', function () {
return view('under-construction');
})->name('under-construction');

Route::get('/verification-code', function () {
return view('verification-code');
})->name('verification-code');

Route::get('/view-invoice', function () {
return view('view-invoice');
})->name('view-invoice');

Route::get('/wishlist', function () {
return view('wishlist');
})->name('wishlist');

Route::get('/student-dashboard', function () {
return view('student-dashboard');
})->name('student-dashboard');

Route::get('/student-courses', function () {
return view('student-courses');
})->name('student-courses');

Route::get('/student-wishlist', function () {
return view('student-wishlist');
})->name('student-wishlist');

Route::get('/student-reviews', function () {
return view('student-reviews');
})->name('student-reviews');

Route::get('/student-quiz', function () {
return view('student-quiz');
})->name('student-quiz');

Route::get('/student-order-history', function () {
return view('student-order-history');
})->name('student-order-history');

Route::get('/student-qa', function () {
return view('student-qa');
})->name('student-qa');

Route::get('/student-referral', function () {
return view('student-referral');
})->name('student-referral');

Route::get('/student-messages', function () {
return view('student-messages');
})->name('student-messages');

Route::get('/student-tickets', function () {
return view('student-tickets');
})->name('student-tickets');

Route::get('/student-settings', function () {
return view('student-settings');
})->name('student-settings');

Route::get('/student-change-password', function () {
return view('student-change-password');
})->name('student-change-password');

Route::get('/student-social-profile', function () {
return view('student-social-profile');
})->name('student-social-profile');

Route::get('/student-linked-accounts', function () {
return view('student-linked-accounts');
})->name('student-linked-accounts');

Route::get('/student-notifications', function () {
return view('student-notifications');
})->name('student-notifications');

Route::get('/student-quiz-details', function () {
return view('student-quiz-details');
})->name('student-quiz-details');

Route::get('/instructor-enrolled-course', function () {
return view('instructor-enrolled-course');
})->name('instructor-enrolled-course');

Route::get('/instructor-announcements', function () {
return view('instructor-announcements');
})->name('instructor-announcements');

Route::get('/instructor-assignment', function () {
return view('instructor-assignment');
})->name('instructor-assignment');

Route::get('/instructor-change-password', function () {
return view('instructor-change-password');
})->name('instructor-change-password');

Route::get('/instructor-delete-account', function () {
return view('instructor-delete-account');
})->name('instructor-delete-account');

Route::get('/instructor-qa', function () {
return view('instructor-qa');
})->name('instructor-qa');

Route::get('/instructor-quiz-attempts-details', function () {
return view('instructor-quiz-attempts-details');
})->name('instructor-quiz-attempts-details');

Route::get('/instructor-quiz-attempts', function () {
return view('instructor-quiz-attempts');
})->name('instructor-quiz-attempts');

Route::get('/instructor-quiz-details', function () {
return view('instructor-quiz-details');
})->name('instructor-quiz-details');

Route::get('/instructor-quiz', function () {
return view('instructor-quiz');
})->name('instructor-quiz');

Route::get('/instructor-referral', function () {
return view('instructor-referral');
})->name('instructor-referral');

Route::get('/instructor-withdraw', function () {
return view('instructor-withdraw');
})->name('instructor-withdraw');

Route::get('/instructor-wishlist', function () {
return view('instructor-wishlist');
})->name('instructor-wishlist');

Route::get('/instructor-settings', function () {
return view('instructor-settings');
})->name('instructor-settings');

Route::get('/instructor-setting-withdraw', function () {
return view('instructor-setting-withdraw');
})->name('instructor-setting-withdraw');

Route::get('/instructor-setting-notifications', function () {
return view('instructor-setting-notifications');
})->name('instructor-setting-notifications');

