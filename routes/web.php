<?php
use App\Http\Controllers\ {
    UserController 
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
        
});

require __DIR__.'/auth.php';
