<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard/add_new_patient', function () {
        return view('dashboard');
    })->name('add_new');


Route::get('/dashboard/basic_params', function () {
        return view('dashboard');
    })->name('basic_params');
    


 Route::get('/dashboard/knowledgebase', function () { // patient dashboard info
        return view('dashboard');
    })->name('knowledgebase');
    

 Route::get('/dashboard/contact', function () { // patient dashboard info
        return view('dashboard');
    })->name('contact');
    


 Route::get('/dashboard/patients', function () { // patient dashboard info
        return view('dashboard');
    })->name('patient_dashboard');


 Route::get('/dashboard/patient/view/{pid}', function ($pid) { // basic patient info
        return view('dashboard');
    })->name('patient_management');

 Route::get('/dashboard/patient/edit/{pid}', function ($pid) { // basic patient info
        return view('dashboard');
    })->name('patient_edit_basics_management');

Route::get('/dashboard/patient/view/growth/{pid}', function ($pid) { // basic patient info
        return view('dashboard');
    })->name('patient_growth_management');


   Route::get('/dashboard/patient/disease/add_data/{pid}', function ($pid) { // basic patient info
        return view('dashboard');
    })->name('patient_disease_management');

    Route::get('/dashboard/patient/disease/all_data/{pid}', function ($pid) { // basic patient info
        return view('dashboard');
    })->name('patient_all_disease_data');

    Route::get('/dashboard/patient/print/{pid}', function ($pid) { // basic patient info
        return view('dashboard');
    })->name('patient_print_codes');

    
Route::get('/admin/dashboard', function () { // admin dashboard main
        return view('livewire.admin.dashboard');
    })->name('admin_dashboard');


    Route::get('/admin/dashboard/user_management', function () {
        return view('livewire.admin.dashboard');
    })->name('admin_dashboard_user_management');


  Route::get('/admin/dashboard/logs', function () {
        return view('livewire.admin.dashboard');
    })->name('admin_dashboard_logs');







    Route::get('/admin/dashboard/data_management', function () {
        return view('livewire.admin.dashboard');
    })->name('admin_dashboard_data_management');



    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

    
});