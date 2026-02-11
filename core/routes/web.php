<?php
use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ClientAuthController;
use App\Http\Controllers\FloorplanController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SiteMapController;
use App\Http\Controllers\VisitorBookingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Services\ReferralService;
use Illuminate\Auth\Events\Verified;

use Illuminate\Http\Request;


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

Auth::routes(['verify' => true]);

// Forgot Password Routes
Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])
    ->name('password.request');

Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])
    ->name('password.email');


    
// Reset Password Routes
Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])
    ->name('password.reset');

Route::post('reset-password', [ResetPasswordController::class, 'reset'])
    ->name('password.update');
Route::get('/', function () {
    return view('frontEnd.pages.home');
});
// Route::get('/register', function () {
//     return view('frontEnd.pages.register');
// });

Route::get('/login', [AuthController::class, 'customer'])->name('customer');
Route::get('/register', [AuthController::class, 'customerdashboard'])->name('customerdashboard');
Route::post('/sportsRegister', [AuthController::class, 'sportsRegister'])->name('sportsRegister');
Route::post('/customerlogin', [AuthController::class, 'customerlogin'])->name('customerlogin');
Route::post('/logoutcustomer', [AuthController::class, 'logoutcustomer'])->name('logoutcustomer');

Route::post('/visitor-booking-submit', [VisitorBookingController::class, 'store'])->name('visitor.booking.submit');
Route::post('/exhibitor-request-submit', [VisitorBookingController::class, 'exhibitorstore'])->name('exhibitor.request.submit');

Route::post('/speaker-apply', [VisitorBookingController::class, 'speakerstore'])->name('speaker.apply');// Route::get('/clientregister', fn()=>view('frontEnd.pages.register'));
// Route::get('/clientlogin', fn()=>view('frontEnd.pages.login'));

// // Register & Login
// Route::post('/clientregister', [ClientAuthController::class,'clientregister'])->name('clientregister');
// Route::post('/clientlogin', [ClientAuthController::class,'clientlogin'])->name('clientlogin');

// // Email verify notice
// Route::get('/verify-email', function () {
//     return view('frontEnd.pages.verify');
// })->name('verify.notice');

// // Verify link from email
// Route::get('/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();
//     return redirect('/clientlogin')->with('verified','Email verified. Please login');
// })->middleware(['signed'])->name('verification.verify');

// // Dashboard
// Route::get('/client/dashboard', function(){
//     return view('frontEnd.pages.home');
// })->middleware(['auth:client','verified'])->name('frontEnd.pages.home');


// Route::get('/login', function () {
//     return view('frontEnd.pages.login');
// });
// Route::get('/forgot-password', function () {
//     return view('frontEnd.pages.forgot-password');
// });
// Route::get('/reset-password', function () {
//     return view('frontEnd.pages.reset-password');
// });
Route::get('/profile', function () {
    return view('frontEnd.pages.profile');
});
Route::get('/visitor-booking', function () {
    return view('frontEnd.pages.visitor-booking');
});
Route::get('/speaker-booking', function () {
    return view('frontEnd.pages.speaker-booking');
});
Route::get('/exhibitor-booking', function () {
    return view('frontEnd.pages.exhibitor-booking');
});
Route::get('/home1', function () {
    return view('frontEnd.pages.home-1');
});
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
Route::get('/floorplan', function () {
    return view('frontEnd.floorplan.index');
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


Route::post('/floorplan/submit', [FloorplanController::class, 'FloorplanSubmit'])
    ->name('floorplan.submit');

    Route::get('/floorplanList', [FloorplanController::class, 'floorplanList'])
    ->name('floorplanList');

Route::get('/email/verify', function () {
    return view('frontEnd.pages.verify');
})->name('verification.notice');

// Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])
//     ->name('verification.verify')
//     ->middleware('signed');
Route::get('/email/verify/{id}/{hash}', function ($id, $hash, ReferralService $referralService) {

    $user = \App\Models\User::findOrFail($id);

    // Validate signed hash
    if (! hash_equals((string) $hash, sha1($user->getEmailForVerification()))) {
        abort(403, 'Invalid verification link.');
    }

    // Mark email as verified if not already
    if (! $user->hasVerifiedEmail()) {
        $user->markEmailAsVerified();
        event(new Verified($user));
    }

    // Auto-login the user (works on new browsers/devices)
    Auth::guard('web')->login($user);

   // try {
    //     $referralService->distributeRegistrationCommission($user->id, $user->name, 100);
    // } catch (\Exception $e) {
    //     Log::error('Commission error: ' . $e->getMessage());
    // }

    // Send welcome email
    try {
        // Mail::to($user->email)->send(new WelcomeEmail($user));
        $templateVars = [
                'name'             => $user->name,
                'server_name'      => 'PROFXSPORTSCLUB',
                'site_link'        => 'https://profxsportsclub.com/',
                'email'            => $user->email,
                'user'             => $user
            ];

            app(\App\Services\MailService::class)->sendEmail(
                $user->email,         // recipient
                'Welcome to PROFXSPORTSCLUB – Your Journey Starts Here', // subject
                [],                   // headers (ignored)
                'emails.greetings',      // <- use the Blade template here
                $templateVars         // variables for template
            );
    } catch (\Exception $e) {
        Log::error('Welcome email failed: ' . $e->getMessage());
    }

    return redirect('/crmdashboard')->with('status', 'Email verified successfully. Welcome!');

})->middleware(['signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('resent', true);
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
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
