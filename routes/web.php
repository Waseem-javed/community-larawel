<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Company\CompanyController;
use App\Http\Controllers\Project\ProjectController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Job\JobController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

// Route::get('/companies', function() {
//     return view('companies.companies');
// });
// Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/companies', [CompanyController::class, 'index'])->name('companies');
Route::get('/company-profile', [CompanyController::class, 'companyProfile'])->name('company-profile');
Route::get('/projects', [ProjectController::class, 'projects'])->name('projects');
Route::get('/profiles', [ProfileController::class, 'profiles'])->name('profiles');
Route::get('/user-profile', [ProfileController::class, 'userProfile'])->name('user-profile');
Route::get('/jobs', [JobController::class, 'jobs'])->name('jobs');
Route::get('/signin', [LoginController::class, 'signin'])->name('signin');
Route::post('/signup', [RegisterController::class, 'signup'])->name('signup');