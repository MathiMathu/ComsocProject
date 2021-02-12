<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventRegisterController;
use App\Http\Controllers\ViewRegisteredStudentController;
use App\Http\Controllers\ViewEventController;

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
    return view('home');
});

Route::get('/foget', function () {
    return view('foget');
});
Auth::routes();


Route::resource('events', EventController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/d', function () {
         return view('demo');
    });



Route::get('/create_event', [App\Http\Controllers\EventController::class, 'create'])->name('create_event');
Route::get('/register_now_form/{id}',[App\Http\Controllers\EventRegisterController::class, 'getDisplay'])->name('getDisplay');

Route::post('/register_now_form',[App\Http\Controllers\EventRegisterController::class, 'store'])->name('store');

Route::get('/Seminar', function () {
    return view('seminar');
});

Route::get('/seminarregistration', function () {
    return view('seminarRegistration');
});


Route::get('/view_registered_students',[App\Http\Controllers\ViewRegisteredStudentController::class, 'index'])->name('index');
Route::get('/sort_registered_students',[App\Http\Controllers\ViewRegisteredStudentController::class, 'compute'])->name('compute');
Route::get('/view_uploaded_event',[App\Http\Controllers\ViewEventController::class, 'index'])->name('index');
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/register', function () {
//     return view('register');
// });
// Route::get('/foget', function () {
//     return view('foget');
// });

Route::get('/ourTeam', function () {
    return view('members');
});

Route::get('/uploadArticle', function () {
    return view('articleForm');
});
Route::post('/add_article', 'App\Http\Controllers\articlecontroller@article');


?>
