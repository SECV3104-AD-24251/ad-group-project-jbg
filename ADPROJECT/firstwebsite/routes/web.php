<?php

use App\Mail\TestEmail;
use App\Models\Article;
use App\Http\Controllers\userInfo;
use App\Http\Middleware\isQuizDone;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaysController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\venueController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DemandbevenueController;
use Symfony\Component\HttpKernel\Profiler\Profile;

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


// ga3 satat bnat nass

Route::get('/', function () {
    return view('welcome');
})->name('home');




// Route::get('/mjid', function () {
//     return view('welcome');
// });



// Route::get('/dashboard',[FoodController::class , 'index'])->middleware(['auth'])->name('dashboard');

// Route::middleware(['auth','admin'])->group(function () {
// route::get('/admin', [FoodController::class, 'index'])->name('dashboard');

// });













Route::middleware(['auth'])->group(function () {
    Route::put('/updatepassword', [userInfo::class, 'changepassword'])->name('updatePassword');
Route::delete('/profile', [userInfo::class, 'destroy'])->name('profile.destroy');
// user routes
Route::middleware(['isUser'])->group(function () {
Route::get('/quiz', function() { return view('user.quiz');})->name('quiz');
Route::post('/quizend', [userInfo::class, 'quizend'])->name('quizzdone');
// Route::get('/dashboard',[userInfo::class, 'Dashboarding'])->name('dashboard');
Route::get('/dashboard/profile', function() { return view('user.profile'); })->name('user.profile');
Route::get('/dashboard', [userInfo::class , 'index'])->name('dashboard');
Route::get('/dashboard/courses', [CourseController::class , 'index'])->name('searchCourses');
Route::get('/profile', [userInfo::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [userInfo::class, 'update'])->name('profile.update');
Route::get('/dashboard/course', [CourseController::class, 'search'])->name('user.searchcourse');
Route::get('/dashboard/venuees',[venueController::class, 'index'])->name('searchvenuees');
Route::get('/dashboard/venue/{id}',[venueController::class, 'show'])->name('showavenue');
Route::post('/dashboard/venue/book',[venueController::class, 'store'])->name('booking');
Route::post('/dashboard/venue/search',[venueController::class, 'search'])->name('searchingfoavenue');
Route::get('/dashboard/course/{id}',[CourseController::class, 'show'])->name('viewCourse');
Route::post('/dashboard/applyvenueing',[DemandbevenueController::class, 'store'])->name('applyvenueing');
Route::get('/dashboard/applyvenueing',[DemandbevenueController::class, 'index'])->name('applyvenueingindex');
Route::post('/dashboard/addcpmment', [CommentController::class ,'store'])->name('addcomment');
Route::post('/dashboard/deletecomment/}', [CommentController::class ,'deleteComment'])->name('deletecomment');
});
// admin routes
Route::middleware(['isAdmin'])->group(function () {
    Route::get('/admin',[adminController::class, 'index'])->name('acceptvenueh');
    Route::get('/admin/venuees',[adminController::class, 'acceptvenue'])->name('acceptvenueing');
    Route::post('/admin/rejectvenue',[adminController::class, 'rejectvenue'])->name('rejectvenue');
    Route::post('/admin/acceptvenue',[adminController::class, 'acceptandemailing'])->name('acceptvenue');
    Route::get('/admin/allvenuees',[adminController::class, 'showallvenuees'])->name('showvenue');
    Route::get('/admin/venuees/{id}',[adminController::class, 'destroy'])->name('deletevenue');
    Route::get('/admin/courses',[adminController::class, 'showCourses'])->name('showCourses');
    Route::get('/admin/course/{id}',[adminController::class, 'deleteCourse'])->name('deleteCourse');

});


// venue routes
Route::middleware(['isvenue'])->group(function () {
    Route::get('/venue',[venueController::class, 'dashboard'])->name('dashboard.venue');
    Route::get('/venue/accept/{id}',[venueController::class, 'acceptBooking'])->name('accept');
    Route::get('/venue/reject/{id}',[venueController::class, 'rejectBooking'])->name('reject');
    Route::get('/venue/addcourse',[venueController::class, 'addcourse'])->name('addcourse');
    Route::get('/venue/mycourses',[venueController::class, 'mycourses'])->name('mycourses');
    Route::post('/venue/addcourse',[venueController::class, 'addacourse'])->name('storecourse');
    Route::get('/venue/mycourses/{id}',[venueController::class, 'deletecourse'])->name('deletecourse');
    Route::post('/venue/mycourses/edit',[venueController::class, 'editcourse'])->name('editcourse');
    Route::get('/venue/editprofile',[venueController::class, 'editvenue'])->name('edittheprofile');
    Route::post('/venue/editprofile',[venueController::class, 'updatevenue'])->name('updatevenue');
    // update route
    Route::post('/venue/mycourses/update',[venueController::class, 'updatecourse'])->name('updatecourse');



});
// Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// route::get('show/{id}', [FoodController::class, 'showw'])->name('showw');
});

// admin routes
Route::get('/admin/venuees', [adminController::class, 'redirectacceptvenueview'])->name('admin.venuees');

require __DIR__.'/auth.php';
