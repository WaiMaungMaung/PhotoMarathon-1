<?php

use App\Http\Controllers\MembersController;
use App\Http\Controllers\UploadFileController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\PsubmitController;
use App\Models\Member;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MyController;
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

Route::get('/waiting_approve', [App\Http\Controllers\MyController::class, 'waiting_approve'])->name('waiting_approve');


Route::get('/prizes', [App\Http\Controllers\MyController::class, 'prizes'])->name('prizes');

Route::get('/ptogallery', [App\Http\Controllers\MyController::class, 'ptogallery'])->name('ptogallery');

Route::get('/howto', [App\Http\Controllers\MyController::class, 'howto'])->name('howto');

Route::get('/contact', [App\Http\Controllers\MyController::class, 'contact'])->name('contact');

Route::get('/admin_reg', [App\Http\Controllers\MyController::class, 'admin_reg'])->name('admin_reg');


Route::get('/termncondition', [App\Http\Controllers\MyController::class, 'termncondition'])->name('termncondition');

Route::get('/admin_view', 'App\Http\Controllers\MembersController@index')->name('admin_view');

// Route::post('/admin_reg', 'App\Http\Controllers\MembersController@create')->name('data');

// Route::get('/enroll', [App\Http\Controllers\EnrollmentController::class, 'index'])->name('enroll');

Route::resource('/enrollment', EnrollmentController::class);
// Route::post('/enrollment/store', [EnrollmentController::class, 'store']);
Route::get('/member/{id}', [MembersController::class, 'show'])->name('member.show');
Route::get('/enroll/{id}', [EnrollmentController::class, 'showByCat'])->name('enroll.showByCat');




Route::get('/submission', [App\Http\Controllers\SubmissionController::class, 'index'])->name('submission');

Route::get('/photosubmit', [App\Http\Controllers\PsubmitController::class, 'index'])->name('photosubmit');

Route::get('/photosubmit/{id}', [App\Http\Controllers\PsubmitController::class, 'show'])->name('photosubmit/id');

Route::get('/submit/{id}', [App\Http\Controllers\PsubmitController::class, 'showByCat'])->name('submit.showByCat');




Route::post('/photosubmit/{id}',[PsubmitController::class,'store'])->name('photosubmit/id');

Route::post('/admin_reg', [MembersController::class, 'store']);

Route::get('/update_approve/{id}', [MembersController::class, 'update'])->name('/update_approve/id');

Route::post('/admin_reg', [MembersController::class, 'store']);

Route::get('/member/edit/{id}',[MembersController::class,'edit'])->name('member.edit');

Route::get('/member/destroy/{id}',[MembersController::class,'destroy'])->name('member.destroy');

Route::get('/fileupload',[UploadFileController::class,'imageUpload']);
Route::post('/fileupload',[UploadFileController::class,'imageUploadPost'])->name('image.upload.post');


Route::get('sendbasicemail','MailController@basic_email');
Route::get('sendbasicemail',[MailController::class,'basic_email']);
Route::get('html_email',[MailController::class,'html_email']);

Route::get('sendhtmlemail','MailController@html_email');
Route::get('sendattachmentemail','MailController@attachment_email');

Route::get('/config',[ConfigController::class,'index'])->name('config');

Route::post('/reg-time-config',[ConfigController::class,'reg_time_store'])->name('reg-time-config');

Route::post('/enroll-time-config',[ConfigController::class,'enroll_time_store'])->name('enroll-time-config');

Route::post('/student-time-config',[ConfigController::class,'student_time_store'])->name('student-time-config');

Route::post('/theme1-time-config',[ConfigController::class,'theme1_time_store'])->name('theme1-time-config');

Route::post('/theme2-time-config',[ConfigController::class,'theme2_time_store'])->name('theme2-time-config');

// Route::get('/enroll',[EnrollmentController::class,'index'])->name('enroll');

//Excel Route
Route::get('importExportView', [MyController::class, 'importExportView']);
Route::get('export', [MyController::class, 'export'])->name('export');
Route::post('import', [MyController::class, 'import'])->name('import');

Route::get('enrollmentExport', [MyController::class, 'enrollmentExport'])->name('enrollmentExport');

Route::get('submissionExport', [MyController::class, 'submissionExport'])->name('submissionExport');




                
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
