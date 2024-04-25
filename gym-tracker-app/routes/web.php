<?php

use App\Http\Controllers\Auth\ForgetPasswrodController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontOffice\homeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\backOffice\ClasseController;
use App\Http\Controllers\backOffice\PricingController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\backOffice\BenefitsController;
use App\Http\Controllers\backOffice\CategoryController;
use App\Http\Controllers\backOffice\DashboardController;
use App\Http\Controllers\frontOffice\BlogsController;
use App\Http\Controllers\frontOffice\CommentController;

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

Route::get('/', [homeController::class , 'index'])->name('home');

Route::get('/pricing', [HomeController::class, 'showPricing'])->name('show.pricing');

Route::get('/classeDetail/{id}/{category_id}', [HomeController::class, 'showClasseDetails'])->name('class.detail');
Route::get('/blogDetail/{id}', [HomeController::class, 'showBlogDetails'])->name('blog.detail');

Route::post('/ajaxupload', [CommentController::class, 'upload'])->name('add.comment');
Route::get('/comments/{id}', [CommentController::class, 'fetchComments']);

Route::get('/classes', [HomeController::class, 'showClasses'])->name('show.classes');
Route::get('/Blogs/{id}', [HomeController::class, 'showBlogs'])->name('show.blogs');
Route::get('/MyBlogs/{id}', [HomeController::class, 'MyBlogs'])->name('show.myBlogs');
Route::get('/coaches', [HomeController::class, 'showCoaches'])->name('show.coaches');
Route::get('/bim', [HomeController::class, 'showBim'])->name('show.BIM');

Route::post('/MyBlogs', [BlogsController::class, 'store'])->name('store.blogs');

Route::get('/register',[RegisterController::class , 'index'])->name('show.register');
Route::post('/register', [RegisterController::class, 'store'])->name('store.register');

Route::get('/login', [LoginController::class, 'index'])->name('show.login');
Route::post('/login', [LoginController::class, 'login'])->name('check.login');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/resetPassword', [ResetPasswordController::class, 'index'])->name('show.resetPassword');
Route::get('/forgetPassword', [ForgetPasswrodController::class, 'index'])->name('show.forgetPassword');

Route::get('/staticDash', [DashboardController::class, 'showStaticSection'])->name('show.static');
Route::get('/profileDash', [DashboardController::class, 'showProfilSection'])->name('show.profile');
Route::get('/tableDash', [DashboardController::class, 'showTableSection'])->name('show.profile');
Route::get('/classeDash', [DashboardController::class, 'showClasseSection'])->name('show.classes');
Route::get('/categoryDash', [DashboardController::class, 'showCategoryTable'])->name('show.categories');
Route::get('/userDash', [DashboardController::class, 'showUserTable'])->name('show.users');
Route::get('/benefitDash', [DashboardController::class, 'showBenefitTable'])->name('show.benefits');
Route::get('/featureDash', [DashboardController::class, 'showFeatureTable'])->name('show.features');

Route::post('/class/add', [ClasseController::class, 'store'])->name('store.class');
Route::post('/category/add', [CategoryController::class, 'store'])->name('store.category');
Route::post('/benefit/add', [BenefitsController::class, 'store'])->name('store.benefit');

Route::put('/updateClass/{id}', [ClasseController::class, 'updateClasse'])->name('update.classe');
Route::put('/updateCategory/{id}', [CategoryController::class, 'updateCategory'])->name('update.category');
Route::put('/updateBenefit/{id}', [BenefitsController::class, 'updateBenefit'])->name('update.benefit');

Route::delete('/deleteClass/{id}', [ClasseController::class, 'deleteClasse'])->name('delete.classe');
Route::delete('/deleteCategory/{id}', [CategoryController::class, 'deleteCategory'])->name('delete.category');
Route::delete('/deleteBenefit/{id}', [BenefitsController::class, 'deleteBenefit'])->name('delete.benefit');
Route::delete('/deleteBlog/{id}', [BlogsController::class, 'deleteBlog'])->name('delete.blog');

