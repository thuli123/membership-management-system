<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\RegistrationsAdmin\RegistrationsAdminController;
use App\Http\Controllers\Assessors\AssessorsController;
use App\Http\Controllers\FinanceTeam\FinanceTeamController;
use App\Http\Controllers\CEO\CEOController;
use App\Http\Controllers\MemberRegistration\MemberRegistrationController;


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
return view('dashboard.MemberRegistration.MemberRegistration');
 });

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->name('user.')->group(function(){

    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
        Route::view('/login','dashboard.user.login')->name('login');
        Route::view('/register','dashboard.user.register')->name('register');
        Route::view('/ForgotPassword','dashboard.user.ForgotPassword')->name('ForgotPassword');
       

        Route::post('/create',[UserController::class,'create'])->name('create');
        Route::post('/check',[UserController::class,'check'])->name('check');

    });

    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.user.home')->name('home');
        Route::view('/Datatable','dashboard.user.Datatable')->name('Datatable');
        Route::view('/AddUser','dashboard.user.AddUser')->name('AddUser');
        Route::post('/logout',[UserController::class,'logout'])->name('logout');
        Route::post('/add-new',[UserController::class,'add'])->name('add');



    });


});

Route::prefix('RegistrationsAdmin')->name('RegistrationsAdmin.')->group(function(){

     Route::middleware(['guest:RegistrationsAdmin','PreventBackHistory'])->group(function(){

         Route::view('/login','dashboard.RegistrationsAdmin.login')->name('login');
         Route::view('/ForgotPassword','dashboard.RegistrationsAdmin.ForgotPassword')->name('ForgotPassword');
         Route::post('/check',[RegistrationsAdminController::class,'check'])->name('check');


     });


     Route::middleware(['auth:RegistrationsAdmin','PreventBackHistory'])->group(function(){

        Route::view('/home','dashboard.RegistrationsAdmin.home')->name('home');
        Route::view('/Datatable','dashboard.RegistrationsAdmin.Datatable')->name('Datatable');
        Route::view('/AddUser','dashboard.RegistrationsAdmin.AddUser')->name('AddUser');
        Route::post('/logout',[RegistrationsAdminController::class,'logout'])->name('logout');

    });

});
Route::prefix('Assessors')->name('Assessors.')->group(function(){


    Route::middleware(['guest:Assessors','PreventBackHistory'])->group(function(){

        Route::view('/login','dashboard.Assessors.login')->name('login');
        Route::view('/ForgotPassword','dashboard.Assessors.ForgotPassword')->name('ForgotPassword');
        
        Route::post('/check',[AssessorsController::class,'check'])->name('check');


    });


    Route::middleware(['auth:Assessors','PreventBackHistory'])->group(function(){

       Route::view('/home','dashboard.Assessors.home')->name('home');
       Route::view('/Datatable','dashboard.Assessors.Datatable')->name('Datatable');
       Route::view('/AddUser','dashboard.Assessors.AddUser')->name('AddUser');
       Route::post('/logout',[AssessorsController::class,'logout'])->name('logout');

   });


});

Route::prefix('FinanceTeam')->name('FinanceTeam.')->group(function(){


    Route::middleware(['guest:FinanceTeam','PreventBackHistory'])->group(function(){

        Route::view('/login','dashboard.FinanceTeam.login')->name('login');
        Route::view('/ForgotPassword','dashboard.FinanceTeam.ForgotPassword')->name('ForgotPassword');
        Route::post('/check',[FinanceTeamController::class,'check'])->name('check');


    });


    Route::middleware(['auth:FinanceTeam','PreventBackHistory'])->group(function(){

       Route::view('/home','dashboard.FinanceTeam.home')->name('home');
       Route::view('/Datatable','dashboard.FinanceTeam.Datatable')->name('Datatable');
       Route::view('/AddUser','dashboard.FinanceTeam.AddUser')->name('AddUser');
       Route::post('/logout',[FinanceTeamController::class,'logout'])->name('logout');

   });


});
Route::prefix('CEO')->name('CEO.')->group(function(){


    Route::middleware(['guest:CEO','PreventBackHistory'])->group(function(){

        Route::view('/login','dashboard.CEO.login')->name('login');
        Route::view('/ForgotPassword','dashboard.CEO.ForgotPassword')->name('ForgotPassword');
        Route::post('/check',[CEOController::class,'check'])->name('check');


    });


    Route::middleware(['auth:CEO','PreventBackHistory'])->group(function(){

       Route::view('/home','dashboard.CEO.home')->name('home');
       Route::view('/Datatable','dashboard.CEO.Datatable')->name('Datatable');
       Route::view('/AddUser','dashboard.CEO.AddUser')->name('AddUser');
       Route::post('/logout',[CEOController::class,'logout'])->name('logout');

   });


});

Route::prefix('MemberRegistration')->name('MemberRegistration.')->group(function(){

    Route::middleware(['guest:MemberRegistration','PreventBackHistory'])->group(function(){
    
        Route::view('/register','dashboard.MemberRegistration.MemberRegistration')->name('register');
    
       

        Route::post('/create',[MemberRegistrationController::class,'create'])->name('create');
        Route::post('/check',[MemberRegistrationController::class,'check'])->name('check');

    });

    Route::middleware(['auth:MemberRegistration','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.MemberRegistration.home')->name('home');
    
        
        Route::post('/logout',[MemberRegistrationController::class,'logout'])->name('logout');
        Route::post('/add-new',[MemberRegistrationController::class,'add'])->name('add');



    });


});