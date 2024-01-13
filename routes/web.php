<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\CvsController;
use App\Http\Controllers\ExperiencesController;
use App\Http\Controllers\EducationsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApplyController;


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

//Laravel Auth
Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('user');
Route::get('/joblist', [HomeController::class, 'jobList']);
Route::group(['middleware' => ['auth']], function () {
    // ROUTE joblist dan jobdetail dan applicationHistory
    Route::get('/applicationhistory', [HomeController::class, 'applicationHistory']);
    Route::get('/jobdetail/{job_id}', [HomeController::class, 'jobDetail']);
    //CRUD Experiences
    Route::resource('experiences', ExperiencesController::class);

    //CRUD Educations
    Route::resource('educations', EducationsController::class);
    //CRUD Cvs
    Route::resource('cvs', CvsController::class);
    Route::post('/apply/{job_id}', [ApplyController::class, 'store']);
});
Route::middleware(['auth', 'getRole:admin'])->group(function () {

    Route::get('/admin', [HomeController::class, 'admin'])->name('admin');

    //Route Applications
    Route::get('/apply', [ApplyController::class, 'index']);
    Route::get('/apply/{id}', [ApplyController::class, 'show']);
    Route::get('/apply/{id}/cetak', [ApplyController::class, 'export']);


    //CRUD Categories
    Route::resource('categories', CategoriesController::class);

    //CRUD Jobs
    Route::resource('jobs', JobsController::class);

    //CRUD User.Admin
    Route::resource('user', UserController::class);
});
