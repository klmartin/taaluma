<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('website.index');
})->name('index');





Route::get('/jobs', [App\Http\Controllers\JobController::class, 'addJob'])->name('jobs');
Route::post('/save_job', [App\Http\Controllers\JobController::class, 'saveJob'])->name('save_job');
Route::post('/save_company', [App\Http\Controllers\CompanyController::class, 'saveCompany'])->name('save_company');
Route::post('/save_category', [App\Http\Controllers\JobController::class, 'saveCategory'])->name('save_category');
Route::get('/job_list', [App\Http\Controllers\JobController::class, 'jobList'])->name('job_list');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'adminIndex'])->name('admin');
Route::get('/about', [App\Http\Controllers\WebsiteController::class, 'aboutPage'])->name('about');
Route::get('/contact', [App\Http\Controllers\WebsiteController::class, 'contactPage'])->name('contact');
Route::get('/companies', [App\Http\Controllers\CompanyController::class, 'companyIndex'])->name('companies');
Route::get('/categories', [App\Http\Controllers\JobController::class, 'categoryIndex'])->name('categories');



