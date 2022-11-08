<?php

use App\Http\Livewire\Admin\AddGallery1;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\EditGallery1;
use App\Http\Livewire\Admin\Gallery1;
use App\Http\Livewire\Admin\GGMPAddGallery;
use App\Http\Livewire\Admin\GGMPEditGallery;
use App\Http\Livewire\Admin\GGPAGallery;
use App\Http\Livewire\Admin\GMDAddGallery;
use App\Http\Livewire\Admin\GMDEditGallery;
use App\Http\Livewire\Admin\GMDGallery;
use App\Http\Livewire\Admin\MRMAddGallery;
use App\Http\Livewire\Admin\MRMEditGallery;
use App\Http\Livewire\Admin\MRMGallery;
use App\Http\Livewire\Admin\RegisteredUsers;
use App\Http\Livewire\Admin\SVAddGallery;
use App\Http\Livewire\Admin\SVEditGallery;
use App\Http\Livewire\Admin\SVGallery;
use App\Http\Livewire\Constituency\DevelopmentActivities;
use App\Http\Livewire\Constituency\WelfairActivities;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Events\GoodMorningDenduluru;
use App\Http\Livewire\Events\JaganMaata;
use App\Http\Livewire\Events\SkillUpDenduluru;
use App\Http\Livewire\Home\Home;
use App\Http\Livewire\Registration;
use App\Http\Livewire\User\UserDashboardComponent;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Home::class)->name('home');
Route::get('/constituency/development-activities', DevelopmentActivities::class)->name('development');
Route::get('/constituency/welfare-activities', WelfairActivities::class)->name('welfair');
Route::get('/events/gadapa-gadapaku-mana-prabhutvam', GoodMorningDenduluru::class)->name('goodmorning');
Route::get('/events/skill-up-denduluru', SkillUpDenduluru::class)->name('skill');
Route::get('/events/jagan-maata-abbaya-bata', JaganMaata::class)->name('jagan');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/registration', Registration::class)->name('registration');

// For User or Customer 
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

// For Admin 
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/registered-users', RegisteredUsers::class)->name('admin.register');
    Route::get('/admin/gallery-1', Gallery1::class)->name('admin.gallery1');
    Route::get('/admin/add-gallery-1', AddGallery1::class)->name('admin.addgallery1');
    Route::get('/admin/editproducts/{product_slug}', EditGallery1::class)->name('admin.editproducts');
    Route::get('/admin/ggmp-gallery', GGPAGallery::class)->name('admin.ggmpgallery');
    Route::get('/admin/ggmp-add-gallery', GGMPAddGallery::class)->name('admin.ggmpaddgallery');
    Route::get('/admin/ggmp-editproducts/{product_slug}', GGMPEditGallery::class)->name('admin.ggmpeditproducts');
    Route::get('/admin/gmd-gallery', GMDGallery::class)->name('admin.gmdgallery');
    Route::get('/admin/gmd-add-gallery', GMDAddGallery::class)->name('admin.gmdaddgallery');
    Route::get('/admin/gmd-editproducts/{product_slug}', GMDEditGallery::class)->name('admin.gmdeditproducts');
    Route::get('/admin/sv-gallery', SVGallery::class)->name('admin.svgallery');
    Route::get('/admin/sv-add-gallery', SVAddGallery::class)->name('admin.svaddgallery');
    Route::get('/admin/sv-editproducts/{product_slug}', SVEditGallery::class)->name('admin.sveditproducts');
    Route::get('/admin/mrm-gallery', MRMGallery::class)->name('admin.mrmgallery');
    Route::get('/admin/mrm-add-gallery', MRMAddGallery::class)->name('admin.mrmaddgallery');
    Route::get('/admin/mrm-editproducts/{product_slug}', MRMEditGallery::class)->name('admin.mrmeditproducts');

    Route::get('/admin/export-excel', [SkillUpDenduluru::class,'exportIntoExcel'])->name('admin.export');
});