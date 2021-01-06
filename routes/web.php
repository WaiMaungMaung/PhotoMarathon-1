<?php

use App\Http\Controllers\MembersController;
use App\Http\Controllers\UploadFileController;
use App\Models\Member;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('home');

require __DIR__.'/auth.php';


Auth::routes(['verify' => true]);




Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('/about', [App\Http\Controllers\MyController::class, 'about'])->name('about');

Route::get('/contact', [App\Http\Controllers\MyController::class, 'contact'])->name('contact');
Route::get('/admin_reg', [App\Http\Controllers\MyController::class, 'admin_reg'])->name('admin_reg');


Route::get('/termncondition', [App\Http\Controllers\MyController::class, 'termncondition'])->name('termncondition');
Route::get('/admin_view', 'App\Http\Controllers\MembersController@index')->name('admin_view');

// Route::post('/admin_reg', 'App\Http\Controllers\MembersController@create')->name('data');

Route::get('/enroll', [App\Http\Controllers\EnrollController::class, 'index'])->name('enroll');

Route::get('/submission', [App\Http\Controllers\SubmissionController::class, 'index'])->name('submission');

Route::get('/photosubmit', [App\Http\Controllers\PsubmitController::class, 'index'])->name('photosubmit');

Route::post('/admin_reg', [MembersController::class, 'store']);




Route::get('/member/edit/{id}',[MembersController::class,'edit'])->name('member.edit');

Route::get('/member/destroy/{id}',[MembersController::class,'destroy'])->name('member.destroy');

Route::get('/fileupload',[UploadFileController::class,'imageUpload']);
Route::post('/fileupload',[UploadFileController::class,'imageUploadPost'])->name('image.upload.post');

                
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
