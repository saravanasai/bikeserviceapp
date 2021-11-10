<?php


use App\Http\Controllers\AdminControlls\AdminLoginController;
use App\Http\Controllers\AdminControlls\bookingController;
use App\Http\Controllers\BookingControll\BookingCompletedController;
use App\Http\Controllers\BookingControll\BookingOnProcessController;
use App\Models\AdminModels\User;
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

Route::get('/pages', function () {
    return view('pages.table');
});
Route::get('/profile', function () {
    return view('pages.profile');
});


Route::view('/', 'pages.login');
//route section to handle the logins of admin
Route::post('/', [AdminLoginController::class, 'login'])->name('admin.login');
Route::prefix('admin')->middleware('is_admin')->group(function () {
    Route::view('dashboard', 'masterDashboard')->name('admin.dashboard');
    Route::post('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

    //route for booking management
    Route::resource('booking', bookingController::class);
    Route::resource('bookingOnProcess', BookingOnProcessController::class);
    Route::resource('bookingOnCompleted', BookingCompletedController::class);
});


//test route section
Route::get('/test', function () {

    $users = User::all();
    return view('test', ["users" => $users]);
});
