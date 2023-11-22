<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Backend\InsuranceRecommendationController;

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
    return view('frontend.index');
});

Route::post('/recommendations', [IndexController::class, 'GetRecommendations'])->name('recommendations.get');
Route::get('/contact/page', [IndexController::class, 'ContactPage'])->name('contact.page');
Route::post('/contact/store', [IndexController::class, 'StoreContact'])->name('contact.store');
 Route::get('recommendations/package/more/details{id}', [IndexController::class, 'MoreDetailsPage'])->name('more.details');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [InsuranceRecommendationController::class, 'Index'])->name('admin.dashboard');


    Route::get('packages', [InsuranceRecommendationController::class, 'PackageView'])->name('package.view');
    Route::get('add/package', [InsuranceRecommendationController::class, 'AddPackage'])->name('add-package');
    Route::post('logo/update', [InsuranceRecommendationController::class, 'LogoImageUpdate'])->name('update-package-logo');
	Route::post('store/package', [InsuranceRecommendationController::class, 'StorePackage'])->name('package-store');
	Route::post('package/data/update', [InsuranceRecommendationController::class, 'PackageUpdate'])->name('package-update');
	Route::get('edit/package/{id}', [InsuranceRecommendationController::class, 'EditPackage'])->name('package.edit');
	Route::get('delete/{id}', [InsuranceRecommendationController::class, 'PackageDelete'])->name('package.delete');
    Route::get('contact/view', [InsuranceRecommendationController::class, 'ContactView'])->name('contact.view');
    Route::get('contact/edit/{id}', [InsuranceRecommendationController::class, 'EditContact'])->name('contact.edit');
    Route::post('contact/data/update', [InsuranceRecommendationController::class, 'ContactUpdate'])->name('contact-update');
    Route::get('contact/delete/{id}', [InsuranceRecommendationController::class, 'ContactDelete'])->name('contact.delete');

    Route::get('package/benefits', [InsuranceRecommendationController::class, 'AddBenefitPackage'])->name('benefit.edit');
    Route::post('package/benefits/update', [InsuranceRecommendationController::class, 'AddBenefits'])->name('update-benefit-store');

    Route::get('package/exclusions/', [InsuranceRecommendationController::class, 'AddExclusionsToPackage'])->name('exclusion.add');
    Route::post('package/exclusions/store', [InsuranceRecommendationController::class, 'StoreExclusionsToPackage'])->name('store.exclusions');

    Route::get('package/periods/', [InsuranceRecommendationController::class, 'AddPeriodsToPackage'])->name('periods.add');
    Route::post('package/periods/store', [InsuranceRecommendationController::class, 'StorePeriodsToPackage'])->name('store.periods');

    Route::get('package/hospitals/', [InsuranceRecommendationController::class, 'AddHospitalsToPackage'])->name('hospitals.add');
    Route::post('package/hospitals/store', [InsuranceRecommendationController::class, 'StoreHospitalsToPackage'])->name('store.hospitals');

    Route::get('user/inquiries', [InsuranceRecommendationController::class, 'UserDetailView'])->name('user.inquiries');
    
});

require __DIR__.'/auth.php';
