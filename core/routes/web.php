<?php

use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SiteMapController;
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

/*
|--------------------------------------------------------------------------
| Web Routes - Frontend Route Start
|--------------------------------------------------------------------------
|
| Frontend Routes for various pages of the website. Each route returns a specific view
|
*/

// Home route
Route::get('/', function () {
    return view('frontEnd.pages.home');
});
Route::get('/register', function () {
    return view('frontEnd.pages.register');
});
Route::get('/login', function () {
    return view('frontEnd.pages.login');
});
Route::get('/forgot-password', function () {
    return view('frontEnd.pages.forgot-password');
});
Route::get('/reset-password', function () {
    return view('frontEnd.pages.reset-password');
});
Route::get('/profile', function () {
    return view('frontEnd.pages.profile');
});
// Route::get('/home1', function () {
//     return view('frontEnd.pages.home-1');
// });
Route::get('/about', function () {
    return view('frontEnd.pages.about');
});
Route::get('/expo-summit', function () {
    return view('frontEnd.pages.expo-summit');
});
Route::get('/profxmedia', function () {
    return view('frontEnd.pages.profxmedia');
});
Route::get('/events', function () {
    return view('frontEnd.pages.events');
});
Route::get('/speakers', function () {
    return view('frontEnd.pages.speakers');
});
Route::get('/exhibitors', function () {
    return view('frontEnd.pages.exhibitors');
});
Route::get('/Influencer', function () {
    return view('frontEnd.pages.Influencer');
});
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

Route::get('/news', function () {
    return view('frontEnd.pages.news');
});
Route::get('/single-news', function () {
    return view('frontEnd.pages.single-news');
});
Route::get('/privacy', function () {
    return view('frontEnd.pages.privacy');
});
Route::get('/error-404', function () {
    return view('frontEnd.pages.error-404');
});
Route::get('/contact', function () {
    return view('frontEnd.pages.contact');
});


/*
|--------------------------------------------------------------------------
| Web Routes - Frontend Route End
|--------------------------------------------------------------------------
|
*/

// Language Route
Route::post('/lang', [LanguageController::class, 'index'])->middleware('LanguageSwitcher')->name('lang');
// For Language direct URL link
Route::get('/lang/{lang}', [LanguageController::class, 'change'])->middleware('LanguageSwitcher')->name('langChange');
Route::get('/locale/{lang}', [LanguageController::class, 'locale'])->middleware('LanguageSwitcher')->name('localeChange');
// .. End of Language Route

// Not Found
Route::get('/{lang?}/404', [HomeController::class, 'page_404'])->name('NotFound');


// RSS Feed Routes
if (config('smartend.rss_status')) {
    Route::feeds();
}

// Social Auth
Route::get('/oauth/{driver}', [SocialAuthController::class, 'redirectToProvider'])->name('social.oauth');
Route::get('/oauth/{driver}/callback', [SocialAuthController::class, 'handleProviderCallback'])->name('social.callback');

Route::Group(['prefix' => config('smartend.backend_path')], function () {
    Auth::routes();
});

// Add your custom routes here


// Start of Frontend Routes
// - site map
Route::get('/sitemap.xml', [SiteMapController::class, 'siteMap'])->name('siteMap');
Route::get('/{lang}/sitemap', [SiteMapController::class, 'siteMap'])->name('siteMapByLang');

// - Public form submit
Route::post('/form-submit', [HomeController::class, 'form_submit'])->name('formSubmit');

// - Newsletter form submit
Route::post('/subscribe', [HomeController::class, 'subscribe_submit'])->name('subscribeSubmit');

// - Comment form submit
Route::post('/comment', [HomeController::class, 'comment_submit'])->name('commentSubmit');

// - Order form submit
Route::post('/order', [HomeController::class, 'order_submit'])->name('orderSubmit');

// - Contact page form submit
Route::post('/contact-submit', [HomeController::class, 'contact_submit'])->name('contact-submit');

// - Tags
Route::get('/tag/{tag_slug?}', [HomeController::class, 'tag'])->name('tag');

// - All Other slugs
Route::get('/{part1?}/{part2?}/{part3?}/{part4?}/{part5?}/{part6?}', [HomeController::class, 'seo'])->name("frontendRoute");
// End of Frontend Route
