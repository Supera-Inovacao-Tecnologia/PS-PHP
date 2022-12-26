<?php
use App\Http\Controllers\ {
    UserController,
    VehicleController,
    MaintenanceController
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

    Route::get('/maintenances',[MaintenanceController::class,'index'])->name('maintenances.index');
    Route::get('/maintenances/create',[MaintenanceController::class,'create'])->name('maintenances.create');
    Route::post('/maintenances',[MaintenanceController::class,'store'])->name('maintenances.store');
    Route::get('/maintenances/{id}',[MaintenanceController::class,'edit'])->name('maintenances.edit');
    Route::post('/maintenances/update/{id}',[MaintenanceController::class,'update'])->name('maintenances.update');
    Route::get('/maintenances/delete/{id}',[MaintenanceController::class,'destroy'])->name('maintenances.destroy');
});

require __DIR__.'/auth.php';
