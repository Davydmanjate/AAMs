<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AvanceController;
use App\Http\Controllers\CaseController;
use App\Http\Controllers\CustumController; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayerController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\EventsController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function (){
Route::get('register', 'register')->name('register');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
    
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
    Route::get('auth.index',[CustumController::class, 'index']);
});

Route::middleware('auth')->group(function (){
    Route::get('home', function (){
        return view('home');
    })->name('home');

    });
    Route::get('custums.index',[CustumController::class, 'index'])->name('custums.ind');
    Route::get('custums.add',[CustumController::class, 'addCustum'])->name('custums.add');
    Route::post('custums.save',[CustumController::class, 'saveCustum'])->name('custums.save');
    Route::get('custums.edit/{id}',[CustumController::class, 'editCustum']);
    Route::post('custums.update',[CustumController::class, 'updateCustum']);
    Route::get('custums.delete/{id}',[CustumController::class, 'deleteCustum']);

    Route::get('layers.index',[LayerController::class,'index'])->name('layer.ind');
    Route::get('layers.add',[LayerController::class,'addLayer'])->name('layers.add');
    Route::post('layers.save',[LayerController::class, 'saveLayer']);
    Route::get('layers.edit/{id}',[LayerController::class, 'editLayer']);
    Route::post('layers.update',[LayerController::class, 'updateLayer']);
    Route::get('layers.delete/{id}',[LayerController::class, 'deleteLayer']);
    Route::get('layers.generate-pdf', [LayerController::class, 'generatePDF'])->name('layers.generate-pdf');

    Route::get('case.index',[CaseController::class, 'index'])->name('case.index');
    Route::get('case.add',[CaseController::class, 'addCase'])->name('case.add');
    Route::post('case.save',[CaseController::class, 'saveCase'])->name('case.save');
    Route::get('case.edit/{id}',[CaseController::class, 'editCase']);
    Route::post('case.update',[CaseController::class, 'updateCase']);
    
    Route::get('generate-pdf', [CaseController::class, 'generatePDF'])->name('case.generate-pdf');

    Route::get('avanco.index',[AvanceController::class, 'index'])->name('avance.index');
    Route::get('avanco.add',[AvanceController::class, 'addAvance'])->name('avance.add');
    Route::post('avanco.save',[AvanceController::class, 'saveAvance'])->name('avance.save');
    Route::get('avanco.edit/{id}',[AvanceController::class, 'edit'])->name('avance.edit');
    Route::put('avanco/{id}',[AvanceController::class, 'update'])->name('avance.upate');
    Route::get('avanco.delete/{id}',[AvanceController::class, 'deleteAvance']);

    Route::get('layers.resume',[ResumeController::class, 'index'])->name('layer.resume');
    Route::get('avanco.adicione/{id}',[EventsController::class, 'edit'])->name('avance.adicione');
    Route::put('avanco/{id}',[EventsController::class, 'update'])->name('avance.upate');