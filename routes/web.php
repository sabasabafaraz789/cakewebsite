<?php

use App\Http\Controllers\frontend\ServicesController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ContactController;
use App\Models\frontend\ContactModel;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\backend\AdminLoginController;
use App\Http\Controllers\backend\AdminHomeController;
use App\Http\Controllers\backend\AdminProjectsController;
use App\Http\Controllers\backend\TeamMemberController;
use App\Http\Controllers\backend\AdminFaqsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::post('/home', [HomeController::class, 'submitMessage1'])->name('submitMessage1');
Route::get('/about', [AboutController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/contact-us', [ContactController::class, 'index']);
Route::post('/contact-us', [ContactController::class, 'submitMessage']);
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::post('/services', [ServicesController::class, 'submitMessage'])->name('submitMessage');

// Backend
// Login Page
Route::get('/admin/login', function() {
    return view('backend.login');
})->name('admin.login');

Route::post('/admin/login', [AdminLoginController::class, 'onLogin']);
Route::get('/admin/logout', [AdminLoginController::class, 'logoutAdmin']);

// Admin Home
Route::get('/admin', function() {
    if (session()->has('email')) {
        return redirect('/admin/home');
    } else {
        return view('backend.login');
    }
});

Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin.home');

// Admin Management
Route::get('/admin/register', [AdminHomeController::class, 'registerAdmin'])->name('admin.create');
Route::post('/admin/register', [AdminHomeController::class, 'submitAdminRecord']);
Route::get('/admin/admins-list', [AdminHomeController::class, 'showAdminRecord'])->name('admin.show');
Route::get('/admin/delete/{id}', [AdminHomeController::class, 'deleteAdminRecord'])->name('admin.delete');
Route::get('/admin/edit/{id}', [AdminHomeController::class, 'editAdminRecord'])->name('admin.edit');
Route::post('/admin/update/{id}', [AdminHomeController::class, 'updateAdminRecord'])->name('admin.update');

// Team Management
Route::get('/admin/team', [TeamMemberController::class, 'index'])->name('team.show');
Route::get('/admin/team-member-details/{id}', [TeamMemberController::class, 'showTeamMember'])->name('team.details');
Route::get('/admin/team-add', [TeamMemberController::class, 'registerTeam'])->name('team.add');
Route::post('/admin/team-add', [TeamMemberController::class, 'submitTeamRecord']);
Route::get('/admin/team-edit/{id}', [TeamMemberController::class, 'editTeam'])->name('team.edit');
Route::put('/admin/team-edit/{id}', [TeamMemberController::class, 'updateTeam'])->name('team.update');
Route::delete('/admin/team-delete/{id}', [TeamMemberController::class, 'deleteTeam'])->name('team.delete');

// FAQs Management
Route::get('/admin/faqs', [AdminFaqsController::class, 'index'])->name('faq.show');
Route::get('/admin/faq-add', [AdminFaqsController::class, 'addFAQ'])->name('faq.add');
Route::post('/admin/faq-add', [AdminFaqsController::class, 'submitFaqRecord']);
Route::get('/admin/faq-edit/{id}', [AdminFaqsController::class, 'editFAQ'])->name('faq.edit');
Route::put('/admin/faq-edit/{id}', [AdminFaqsController::class, 'updateFAQ'])->name('faq.update');
Route::delete('/admin/faq-delete/{id}', [AdminFaqsController::class, 'deleteFAQ'])->name('faq.delete');

// Project Management
Route::get('/admin/projects', [AdminProjectsController::class, 'index'])->name('project.show');
Route::get('/admin/project-add', [AdminProjectsController::class, 'addProject'])->name('project.add');
Route::post('/admin/project-add', [AdminProjectsController::class, 'submitProjectRecord']);
Route::get('/admin/project-edit/{id}', [AdminProjectsController::class, 'editProject'])->name('project.edit');
Route::put('/admin/project-edit/{id}', [AdminProjectsController::class, 'updateProject'])->name('project.update');
Route::delete('/admin/project-delete/{id}', [AdminProjectsController::class, 'deleteProject'])->name('project.delete');

// Logout Functionality
Route::get('admin/logout', function() {
    if (session()->has('email')) {
        session()->flush();
    }
    return redirect('/admin/login');
})->name('admin.logout');
