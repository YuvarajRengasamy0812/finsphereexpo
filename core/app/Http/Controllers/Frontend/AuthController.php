<?php


namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Services\MailService; // ✅ THIS IS THE FIX
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Country;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Carbon;



class AuthController extends Controller
{
    
      	protected $redirectTo = '/email/verify';
    protected $mailService;

    

    public function __construct(MailService $mailService)
    {
        $this->mailService = $mailService;
    }

    // LOGIN
    public function customerlogin(Request $request)
    {

        
       $credentials = $request->only('email', 'password');
       
       $user = \App\Models\User::where('email', $request->email)->first();


        if ($user) {
        // If user exists but wrong password
        if (!\Illuminate\Support\Facades\Hash::check($request->password, $user->password)) {
            if ($request->ajax()) {
                return response()->json(['errors' => ['password' => 'Incorrect password']], 422);
            }
            return back()->withErrors(['password' => 'Incorrect password'])->withInput();
        }
    }
       if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            // echo '<pre>';print_r($user->user_type );exit;
            if ($user->user_type == 2) {
                $redirect = '/';
            }  else {
                Auth::logout();
                if ($request->ajax()) {
                    return response()->json(['errors' => ['Access denied.']], 422);
                }
                 return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
            }

            if ($request->ajax()) {
                return response()->json(['redirect' => $redirect]);
            }
            return redirect($redirect)->with('success', 'Login  successfully.');
        }

        if ($request->ajax()) {
            return response()->json(['errors' => ['Invalid credentials']], 422);
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
       
    }

  public function customer(){

//  echo'<pre>';print_r('test');exit;
        return view('frontEnd.pages.login');
    }
 
public function logoutcustomer(Request $request)
{
    // echo'<pre>';print_r('yes');exit;
    Auth::guard('user')->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login')->with('success', 'LogOut successfully.');;
}


//     protected function sportsRegister(Request $request)
// {
//     $validator = Validator::make($request->all(), [
//         'name'              => 'required|string|max:255',
        
//         'email'                  => 'required|string|email|max:255|unique:users',
//         'password'               => 'required|string|min:6',
//         'real_password'          => 'required|string|min:6|same:password',
//         'phone'          => 'required|string|max:20',
//         'nationalities'          => 'required|string|max:20',
//          'company'          => 'required|string|max:20',
//         'designation'          => 'required|string|max:20',
//          'source'          => 'required|string|max:20',
//         'type'          => 'required|string|max:20',
//         'country_code' =>'required|string|max:20',
      
//     ], [
//         'email.unique'           => 'This email is already registered.',
//         'real_password.same'      => 'Password and Confirm Password do not match.',
//     ]);

//     if ($validator->fails()) {
//         return redirect()->back()
//             ->withErrors($validator)
//             ->withInput();
//     }

//     DB::beginTransaction();

//     try {
//         $user = User::create([
//             'name'      => $request->name,
//           'type'  => $request->type,
//              'source'  => $request->source,
//             'company'  => $request->company,
//              'designation'  => $request->designation,
//             'email'     => $request->email,
//             'phone'     => $request->phone,
//             'nationalities'=>$request->nationalities,
//             'country_code' => $request->country_code,
//             'password'  => Hash::make($request->password),
//             'real_password'   => $request->real_password,
//             'status'    => true,
//             'user_type' => 2,
//              'permissions_id' => 2, // тнР ADD THIS LINE
//         ]);

//         $user->update([
//             'userid' => 'PROFX' . (10000 + $user->id),
//         ]);

//         DB::commit();

//         return redirect("/login")
//             ->with('success', 'Register  successfully.');

//     } catch (\Exception $e) {
//         DB::rollBack();

//         return redirect()->back()
//             ->withErrors(['error' => 'Registration failed. ' . $e->getMessage()]);
//     }
// }


protected function sportsRegister(Request $request)
{ $validator = Validator::make($request->all(), [
        'name'              => 'required|string|max:255',
        
        'email'                  => 'required|string|email|max:255|unique:users',
        'password'               => 'required|string|min:6',
        'real_password'          => 'required|string|min:6|same:password',
        'phone'          => 'required|string|max:20',
        'nationalities'          => 'required|string|max:20',
         'company'          => 'required|string|max:20',
        'designation'          => 'required|string|max:20',
         'source'          => 'required|string|max:20',
        'type'          => 'required|string|max:20',
        'country_code' =>'required|string|max:20',
      
    ], [
        'email.unique'           => 'This email is already registered.',
        'real_password.same'      => 'Password and Confirm Password do not match.',
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    DB::beginTransaction();

    try {
        $user = User::create([
            'name'      => $request->name,
          'type'  => $request->type,
             'source'  => $request->source,
            'company'  => $request->company,
             'designation'  => $request->designation,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'nationalities'=>$request->nationalities,
            'country_code' => $request->country_code,
            'password'  => Hash::make($request->password),
            'real_password'   => $request->real_password,
            'status'    => true,
            'user_type' => 2,
             'permissions_id' => 2, // ⭐ ADD THIS LINE
        ]);

        $user->update([
            'userid' => 'PROFX' . (10000 + $user->id),
        ]);

        // Email verification link
        $verificationLink = URL::temporarySignedRoute(
            'verification.verify',
            Carbon::now()->addMinutes(60),
            [
                'id'   => $user->id,
                'hash' => sha1($user->email)
            ]
        );

        // Mail template data
        $templateVars = [
            'name'            => $user->name,
            'server_name'     => 'FinSphere Expo Kuwait 2026',
            'site_link'       => 'https://finsphereexpo.com/',
            'email'           => $user->email,
            'verificationUrl' => $verificationLink,
        ];

        // Send mail
        $this->mailService->sendEmail(
            $user->email,
            'FinSphere Expo Kuwait 2026 - Email Verification!',
            [],
            'emails.account_verification',
            $templateVars
        );

        DB::commit();

        // ✅ SAME PAGE SUCCESS MESSAGE (NO REDIRECT)
        return back()->with('success', 'Registration successful! Verification email sent to your email address.');

    } catch (\Exception $e) {
        DB::rollBack();

        return back()->withErrors([
            'error' => 'Registration failed. ' . $e->getMessage()
        ])->withInput();
    }
}

  public function customerdashboard(){
     $countries = Country::all();

        return view('frontEnd.pages.register',compact('countries'));
        }
}