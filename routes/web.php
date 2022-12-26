<?php
use App\Http\Controllers\ {
    UserController,
    VehicleController
};
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Controllers\Admin\CommentController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::middleware(['auth'])->group(function () {
    Route::get('/',[UserController::class,'index',['user' =>auth()->user()]])->name('users.index');
    Route::get('/users/create',[UserController::class,'create'])->name('users.create');
    Route::post('/users',[UserController::class,'store'])->name('users.store');
    Route::get('/vehicles',[VehicleController::class,'index'])->name('vehicles.index');
    Route::get('/vehicles/create',[VehicleController::class,'create'])->name('vehicles.create');
    Route::put('/vehicles/{id}',[VehicleController::class,'update'])->name('vehicles.update');
    Route::post('/vehicles',[VehicleController::class,'store'])->name('vehicles.store');
    Route::get('/vehicles/{id}',[VehicleController::class,'edit'])->name('vehicles.edit');
    Route::get('/vehicles/delete/{id}',[VehicleController::class,'destroy'])->name('vehicles.destroy');
});

require __DIR__.'/auth.php';
