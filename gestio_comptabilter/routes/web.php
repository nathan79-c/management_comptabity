<?php

use App\Http\Controllers\ManagementController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [StudentController::class, 'index']);
ROute::post('/',[StudentController::class,'login'])->name('userCompte');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

   Route::Post('/addPromotion',[ManagementController::class,'updatePromotion'])->name('show');
   Route::get('/addStudent',function(){
        return view('addstudent');
   })->name('addStudent');
   Route::get('/find',function(){
        return view('findStudent');
   })->name('findStudent');
   Route::post('/findstudent',[ManagementController::class,'afficherMontantFrais'])->name('studentFind');
   Route::post('/store',[ManagementController::class,'store'])->name('store');
   Route::get('/succes',function(){
        return view('succes');
   })->name('Succes');


});
