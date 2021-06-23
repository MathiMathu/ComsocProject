<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CsparkController;
use App\Http\Controllers\FinancialsupportController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventRegisterController;
use App\Http\Controllers\ViewRegisteredStudentController;
use App\Http\Controllers\ViewEventController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TreasurerController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\PasswordController;
use App\Http\Controllers\Password1Controller;
use App\Http\Controllers\FestivalController;
use App\Http\Controllers\HomeController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/foget', function () {
    return view('foget');
});
Auth::routes();


Route::resource('events', EventController::class);

Route::get('/d', function () {
         return view('demo');
    });




Route::post('/register_now_form',[App\Http\Controllers\EventRegisterController::class, 'store30'])->name('store30');


Route::get('/Seminar', function () {
    return view('seminar');
});

Route::get('/seminarregistration', function () {
    return view('seminarRegistration');
});



Route::post('/store5',[App\Http\Controllers\SeminarController::class,'store5'])->name('store5');

Route::get('/financial_support', function () {
    return view('financial_support');
});


Route::get('/cspark', function () {
    return view('cspark');
});
Route::get('gallery', [FileController::class, 'view']);

Route::get('/photo_album/{id}', function () {
    return view('photo_album');
});

Route::get('aboutus', function () {
    return view('aboutus');
});
Route::get('/album/{id}',[FileController::class, 'album'])->name('album');

Route::post("saveFinancialsupport",[FinancialsupportController::class, "storeFinancialsupport"]);


// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/register', function () {
//     return view('register');
// });
// Route::get('/foget', function () {
//     return view('foget');
// });


// Route::get('/ourTeam', function () {
//     return view('members');
// });


Route::get('/members',[App\Http\Controllers\MemberController::class, 'index'])->name('index');
Route::post('/members',[App\Http\Controllers\MemberController::class, 'compute1'])->name('compute1');


Route::post("saveCspark",[CsparkController::class, "storeCspark"]);




Route::get('/kananiyam', function () {
    return view('kananiyam');
});

// Route::get('/festival', function () {
//     return view('festival');
// });
// Route::get('/festivalgallery'.'App\Http\Controllers\FestivalController@index');
// Route::get('/kananiyam', [App\Http\Controllers\articlecontroller::class, 'kananiyam'])->name('kananiyam');


Route::get('/festival', [App\Http\Controllers\FestivalController::class, 'festival'])->name('festival');


// Route::post('/upload_data'.'App\Http\Controllers\FestivalController@store');
Route::get('/upload_festival_gallery', function () {
    return view('upload_festival_gallery');
});

Route::get('/add_kananiyam', function () {
    return view('add_kananiyam');
});
Route::post('/add_article', 'App\Http\Controllers\articlecontroller@article');
Route::get('/download1/{id}',[App\Http\Controllers\EventController::class,'downloadFlyer'])->name('downloadFlyer');

Route::middleware(['auth'])->group(function () {
    Route::get('/approval', [App\Http\Controllers\HomeController::class,'approval'])->name('approval');

    Route::middleware(['approved'])->group(function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');
    });

    Route::middleware(['admin'])->group(function () {
        Route::get('/users', [App\Http\Controllers\UserController::class,'index'])->name('admin.users.index');
        Route::get('/users/{user_id}/approve', [App\Http\Controllers\UserController::class,'approve'])->name('admin.users.approve');
    });
});

Route::group(['middleware' => ['auth', 'admin']], function(){
    Route::get('/admin',[App\Http\Controllers\AdminController::class, 'handleAdmin'])->name('admin.route');
    Route::get('/create_event', [App\Http\Controllers\EventController::class, 'create'])->name('create_event');
    Route::get('/view_uploaded_event',[App\Http\Controllers\ViewEventController::class, 'index'])->name('index');
    Route::get('/delete/{id}',[ViewEventController::class,'destroy'])->name('delete');
    Route::get('/edit/{id}',[ViewEventController::class,'edit'])->name('edit');
    Route::patch('/update/{id}',[ViewEventController::class,'update'])->name('update');

    Route::get('/view_seminar_registration',[App\Http\Controllers\SeminarController::class, 'index1'])->name('index1');
    Route::get('/sort_seminar_registration',[App\Http\Controllers\SeminarController::class, 'compute7'])->name('compute7');

    Route::get('/view_registered_students',[App\Http\Controllers\ViewRegisteredStudentController::class, 'index'])->name('index');
    Route::get('/sort_registered_students',[App\Http\Controllers\ViewRegisteredStudentController::class, 'compute'])->name('compute');

    Route::get('/add_member', [App\Http\Controllers\MemberController::class, 'create'])->name('add_member');
    Route::post('/add_member',[App\Http\Controllers\MemberController::class, 'store2'])->name('store2');
    Route::get('/view_members',[App\Http\Controllers\MemberController::class, 'index1'])->name('index1');
    Route::get('/delete2/{id}',[MemberController::class,'destroy2'])->name('delete2');
    Route::get('/edit2/{id}',[MemberController::class,'edit2'])->name('edit2');
    Route::patch('/update2/{id}',[MemberController::class,'update2'])->name('update2');

    Route::get('/view_park_bookings', [App\Http\Controllers\CsparkController::class, 'index'])->name('index');
    Route::get('/sort_cspark_booking',[App\Http\Controllers\CsparkController::class, 'compute5'])->name('compute5');
    Route::get('/edit8/{id}',[CsparkController::class,'edit8'])->name('edit8');
    Route::patch('/update8/{id}',[CsparkController::class,'update8'])->name('update8');

    Route::get('/delete20/{id}',[FileController::class,'delete20'])->name('delete20');
    Route::get('/view_gallery',[App\Http\Controllers\FileController::class, 'index20'])->name('index20');
    Route::get('file', [FileController::class, 'create']);
    Route::post('file', [FileController::class, 'store']);

    Route::get('/view_registered_users', [App\Http\Controllers\UserController::class, 'index21'])->name('index21');
    Route::get('/student_details',[App\Http\Controllers\UserController::class, 'compute20'])->name('compute20');


    Route::get('/editpassword/{id}',[PasswordController::class,'editpassword'])->name('editpassword');
    Route::patch('/updatepassword/{id}',[PasswordController::class,'updatepassword'])->name('updatepassword');
    Route::patch('/updatepassword3/{id}',[PasswordController::class,'updatepassword3'])->name('updatepassword3');


    Route::get('/festivalgallery', [App\Http\Controllers\FestivalController::class, 'index'])->name('index');
    Route::get('/add_images', function () {
        return view('add_festival_image');
    });
    Route::post('/upload_data', [App\Http\Controllers\FestivalController::class, 'store100'])->name('store100');

    Route::get('/delete_images/{id}',[App\Http\Controllers\FestivalController::class,'delete1'])->name('delete1');

});




Route::group(['middleware' => ['auth']], function(){
    Route::get('/edit_profile/{id}', function () {
        return view('editprofile');
    });

    Route::get('/profile/{id}',[App\Http\Controllers\ProfileController::class,'index11'])->name('index11');
    Route::get('/edit11/{id}',[ProfileController::class,'edit11'])->name('edit11');
    Route::patch('/update11/{id}',[ProfileController::class,'update11'])->name('update11');

    Route::get('/finnancial_apply_now', function () {
        return view('finnancial_apply_now');
    });
    Route::get('/register_now_form/{id}',[App\Http\Controllers\EventRegisterController::class, 'getDisplay'])->name('getDisplay');
    Route::get('/uploadArticle', function () {
        return view('articleForm');
    });
    Route::get('/seminarregistration',[App\Http\Controllers\SeminarController::class, 'create'])->name('seminarregistration');

    Route::get('/changepassword1/{id}',[Password1Controller::class,'changepassword1'])->name('changepassword1');
    Route::patch('/updatepassword1/{id}',[Password1Controller::class,'updatepassword1'])->name('updatepassword1');
});


Route::group(['middleware' => ['auth', 'treasurer']], function(){
    Route::get('/treasurer',[App\Http\Controllers\TreasurerController::class, 'handleTreasurer'])->name('treasurer.route');
    Route::get('/view_finance', [App\Http\Controllers\FinancialsupportController::class, 'index'])->name('index');
    Route::get('/sort_financial_students',[App\Http\Controllers\FinancialsupportController::class, 'compute4'])->name('compute4');
    Route::get('/edit6/{id}',[FinancialsupportController::class,'edit6'])->name('edit6');
    Route::patch('/update6/{id}',[FinancialsupportController::class,'update6'])->name('update6');
    Route::get('/refresh_status',[App\Http\Controllers\FinancialsupportController::class, 'index7'])->name('index7');

});

Route::group(['middleware' => ['auth', 'editor']], function(){
    Route::get('/editor',[App\Http\Controllers\EditorController::class, 'handleEditor'])->name('editor.route');
    Route::get('/view_article', [App\Http\Controllers\articlecontroller::class, 'index'])->name('index');
    Route::get('/check/{id}',[App\Http\Controllers\articlecontroller::class,'check'])->name('check');
    Route::patch('/update10/{id}',[App\Http\Controllers\articlecontroller::class,'update10'])->name('update10');
    Route::get('/download/{id}',[App\Http\Controllers\articlecontroller::class,'downloadAudiobook'])->name('downloadAudiobook');

    Route::post('/save_past_kananiyam', [App\Http\Controllers\DocumentController::class, 'store'])->name('store');
    Route::get('/upload_past_kananiyam', [App\Http\Controllers\DocumentController::class, 'index'])->name('index');


Route::get('/view_festival/{id}', [App\Http\Controllers\FestivalController::class, 'gallery'])->name('gallery');

});





?>
