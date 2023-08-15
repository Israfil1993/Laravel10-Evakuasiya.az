<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\HomeSliderController;
use App\Http\Controllers\Admin\CompanyLogoSliderController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\Statistics_CountersController;
use App\Http\Controllers\Admin\Our_ServicesController;
use App\Http\Controllers\Admin\CustomerTestimonialController;
use App\Http\Controllers\Admin\CorporativeController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\VacancyController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\CvController;
use App\Http\Controllers\Frontend\InformationController;
use App\Http\Controllers\Frontend\CvController AS FrontendCvController;
use App\Http\Controllers\Frontend\PartnersController;
use App\Http\Controllers\Frontend\HomeController AS FrontendHomeController;
use App\Http\Controllers\Frontend\ContactController AS FronendContactController;
use App\Http\Controllers\Frontend\OrderController AS FrontendOrderController;
use App\Http\Controllers\Frontend\AboutController AS FrontendAboutController;
use App\Http\Controllers\Frontend\FaqController AS FrontendFaqController;
use App\Http\Controllers\Frontend\Statictics_CountersController AS GalleryController;
use App\Http\Controllers\Frontend\CorporativeController AS FrontendCorporativeController;
use App\Http\Controllers\Frontend\ServicesControlller AS FrontendServicesController;
use App\Http\Controllers\Frontend\PostController AS FrontendPostController;
use App\Http\Controllers\Frontend\VacancyController AS FrontendVacancyController;
use App\Http\Controllers\Frontend\Vacancy_DetailController AS FrontendVacancy_DetailController;


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




Route::get('login', [LoginController::class, 'showLogin'])->middleware('guest')->name('admin.showLogin');
Route::post('login', [LoginController::class, 'login'])->middleware('guest')->name('admin.login');
Route::post('logout', [LoginController::class, 'logout'])->name('admin.logout');

Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('/', [HomeController::class, 'home'])->name('admin.index');
    Route::get('profile', [LoginController::class, 'editProfile'])->name('admin.profile');
    Route::post('profile/{id}', [LoginController::class, 'updateProfile'])->name('admin.update.profile');
});
// ******************** Backend Route *******************
Route::controller(HomeSliderController::class)->middleware('auth')->group(function () {
    Route::get('admin/slider/list','list')->name('admin.slider.list');
    Route::get('admin/slider/create','create')->name('admin.slider.create');
    Route::post('admin/slider/create', 'store')->name('admin.slider.store');
    Route::get('admin/slider/edit/{id}','edit')->name('admin.slider.edit');
    Route::post('admin/slider/edit/{id}','update')->name('admin.slider.update');
    Route::get('admin/slider/delete/{id}', 'delete')->name('admin.slider.delete');
});

Route::controller(CompanyLogoSliderController::class)->middleware('auth')->group(function (){
    Route::get('admin/partnyorlar/list', 'list')->name('admin.partnyorlar.list');
    Route::get('admin/partnyorlar/create', 'create')->name('admin.partnyorlar.create');
    Route::post('admin/partnyorlar/create', 'store')->name('admin.partnyorlar.store');
    Route::get('admin/partnyorlar/edit/{id}', 'edit')->name('admin.partnyorlar.edit');
    Route::post('admin/partnyorlar/edit/{id}', 'update')->name('admin.partnyorlar.update');
    Route::get('admin/partnyorlar/delet/{id}', 'delete')->name('admin.partnyorlar.delete');
});

Route::controller(FaqController::class)->middleware('auth')->group(function (){
    Route::get('admin/faq/list', 'list')->name('admin.faq.list');
    Route::get('admin/faq/create', 'create')->name('admin.faq.create');
    Route::post('admin/faq/create', 'store')->name('admin.faq.store');
    Route::get('admin/faq/edit/{id}', 'edit')->name('admin.faq.edit');
    Route::post('admin/faq/edit/{id}', 'update')->name('admin.faq.update');
    Route::get('admin/faq/delet/{id}', 'delete')->name('admin.faq.delete');
});

Route::controller(AboutController::class)->middleware('auth')->group(function (){
    Route::get('admin/about/list', 'list')->name('admin.about.list');
    Route::get('about/create', 'create')->name('admin.about.create');
    Route::post('admin/about/create', 'store')->name('admin.about.store');
    Route::get('admin/about/edit/{id}', 'edit')->name('admin.about.edit');
    Route::post('admin/about/edit/{id}', 'update')->name('admin.about.update');
    Route::get('admin/about/delet/{id}', 'delete')->name('admin.about.delete');
});

Route::controller(Statistics_CountersController::class)->middleware('auth')->group(function (){
    Route::get('admin/statistics-counters/list', 'list')->name('admin.statistics_counters.list');
    Route::get('admin/statistics-counters/create', 'create')->name('admin.statistics_counters.create');
    Route::post('admin/statistics-counters/create', 'store')->name('admin.statistics_counters.store');
    Route::get('admin/statistics-counters/edit/{id}', 'edit')->name('admin.statistics_counters.edit');
    Route::post('admin/statistics-counters/edit/{id}', 'update')->name('admin.statistics_counters.update');
    Route::get('admin/statistics-counters/delet/{id}', 'delete')->name('admin.statistics_counters.delete');
});

Route::controller(Our_ServicesController::class)->middleware('auth')->group(function (){
    Route::get('admin/our-services/list', 'list')->name('admin.our_services.list');
    Route::get('admin/our-services/create', 'create')->name('admin.our_services.create');
    Route::post('admin/our-services/create', 'store')->name('admin.our_services.store');
    Route::get('admin/our-services/edit/{id}', 'edit')->name('admin.our_services.edit');
    Route::post('admin/our-services/edit/{id}', 'update')->name('admin.our_services.update');
    Route::get('admin/our-services/delet/{id}', 'delete')->name('admin.our_services.delete');
});

Route::controller(CustomerTestimonialController::class)->middleware('auth')->group(function (){
    Route::get('admin/testimonial/list', 'list')->name('admin.testimonial.list');
    Route::get('admin/testimonial/create', 'create')->name('admin.testimonial.create');
    Route::post('admin/testimonial/create', 'store')->name('admin.testimonial.store');
    Route::get('admin/testimonial/show/{id}', 'show')->name('admin.testimonial.show');
    Route::get('admin/testimonial/edit/{id}', 'edit')->name('admin.testimonial.edit');
    Route::post('admin/testimonial/edit/{id}', 'update')->name('admin.testimonial.update');
    Route::get('admin/testimonial/delet/{id}', 'delete')->name('admin.testimonial.delete');
});

Route::controller(CorporativeController::class)->middleware('auth')->group(function (){
    Route::get('admin/corporative/list', 'list')->name('admin.corporative.list');
    Route::get('admin/corporative/create', 'create')->name('admin.corporative.create');
    Route::post('admin/corporative/create', 'store')->name('admin.corporative.store');
    Route::get('admin/corporative/edit/{id}', 'edit')->name('admin.corporative.edit');
    Route::post('admin/corporative/edit/{id}', 'update')->name('admin.corporative.update');
    Route::get('admin/corporative/delet/{id}', 'delete')->name('admin.corporative.delete');
});

Route::controller(SettingController::class)->middleware('auth')->group(function (){
    Route::get('admin/setting/list', 'list')->name('admin.setting.list');
    Route::get('admin/setting/create', 'create')->name('admin.setting.create');
    Route::post('admin/setting/create', 'store')->name('admin.setting.store');
    Route::get('admin/setting/edit/{id}', 'edit')->name('admin.setting.edit');
    Route::post('admin/setting/edit/{id}', 'update')->name('admin.setting.update');
    Route::get('admin/setting/delet/{id}', 'delete')->name('admin.setting.delete');
});

Route::controller(VacancyController::class)->middleware('auth')->group(function (){
    Route::get('admin/admin/vacancy/list', 'list')->name('admin.vacancy.list');
    Route::get('admin/admin/vacancy/create', 'create')->name('admin.vacancy.create');
    Route::post('admin/admin/vacancy/create', 'store')->name('admin.vacancy.store');
    Route::get('admin/admin/vacancy/show/{id}', 'show')->name('admin.vacancy.show');
    Route::get('admin/admin/vacancy/edit/{id}', 'edit')->name('admin.vacancy.edit');
    Route::post('admin/admin/vacancy/edit/{id}', 'update')->name('admin.vacancy.update');
    Route::get('admin/admin/vacancy/delet/{id}', 'delete')->name('admin.vacancy.delete');
});

Route::controller(PostController::class)->middleware('auth')->group(function (){
    Route::get('admin/post/list', 'list')->name('admin.post.list');
    Route::get('admin/post/create', 'create')->name('admin.post.create');
    Route::post('admin/post/create', 'store')->name('admin.post.store');
    Route::get('admin/post/edit/{id}', 'edit')->name('admin.post.edit');
    Route::post('admin/post/edit/{id}', 'update')->name('admin.post.update');
    Route::get('admin/post/delet/{id}', 'delete')->name('admin.post.delete');
});

Route::controller(OrderController::class)->middleware('auth')->group(function (){
    Route::get('admin/order/list', 'list')->name('admin.order.list');
    Route::get('admin/order/show/{id}', 'show')->name('admin.order.show');
    Route::get('admin/order/delet/{id}', 'delete')->name('admin.order.delete');
});

Route::controller(SeoController::class)->middleware('auth')->group(function (){
    Route::get('admin/seo/list', 'list')->name('admin.seo.list');
    Route::get('admin/seo/create', 'create')->name('admin.seo.create');
    Route::post('admin/seo/store', 'store')->name('admin.seo.store');
    Route::get('admin/seo/edit/{id}', 'edit')->name('admin.seo.edit');
    Route::post('admin/seo/edit/{id}', 'update')->name('admin.seo.update');
    Route::get('admin/seo/delet/{id}', 'delete')->name('admin.seo.delete');
});


Route::controller(CvController::class)->middleware('auth')->group(function (){
    Route::get('admin/cv/list', 'list')->name('admin.cv.list');
    Route::get('admin/cv/show/{id}', 'show')->name('admin.cv.show');
    Route::get('admin/cv/delet/{id}', 'delete')->name('admin.cv.delete');
});

Route::controller(ContactController::class)->middleware('auth')->group(function (){
    Route::get('admin/contact/list', 'list')->name('admin.contact.list');
    Route::get('admin/contact/show/{id}', 'show')->name('admin.contact.show');
    Route::get('admin/contact/delet/{id}', 'delete')->name('admin.contact.delete');
});


// **********************  Frontend Route *************************************

Route::post('/', [FrontendHomeController::class, 'contactForm'])->name('frontend.home.contact.submit');

// **********************  Frontend Pages Route *************************************
Route::prefix('{lang?}')->middleware('locale')->group(callback: function () {
    Route::get('/', [FrontendHomeController::class, 'home'])->name('frontend.index');
    Route::get('contact', [FronendContactController::class, 'show'])->name('frontend.contact');
    Route::post('contact', [FronendContactController::class, 'contactForm'])->name('frontend.contact.submit');
    Route::get('order', [FrontendOrderController::class, 'showOrder'])->name('frontend.order');
    Route::post('order', [FrontendOrderController::class, 'orderForm'])->name('forntend.order.submit');
    Route::get('about', [FrontendAboutController::class, 'show'])->name('frontend.about');
    Route::get('partners', [PartnersController::class, 'show'])->name('frontend.partners');
    Route::get('faq', [FrontendFaqController::class, 'show'])->name('frontend.faq');
    Route::get('services', [FrontendServicesController::class, 'show'])->name('frontend.services');
    Route::get('blog', [FrontendPostController::class, 'show'])->name('frontend.blog');
    Route::get('information', [InformationController::class, 'show'])->name('frontend.information');
    Route::get('gallery', [GalleryController::class, 'show'])->name('frontend.gallery');
    Route::get('esaskorparativ', [FrontendCorporativeController::class, 'show'])->name('frontend.esaskorparativ');
    Route::get('vacancy', [FrontendVacancyController::class, 'show'])->name('frontend.vacancy');
    Route::get('vacancy-detail/{id}', [FrontendVacancy_DetailController::class, 'show'])->name('frontend.vacancy.detail');
    Route::post('cv', [FrontendCvController::class, 'cvSubmit'])->name('cv.submit');

});




