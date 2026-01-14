<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ClientAuthController extends Controller
{
    // Register
    // public function clientregister(Request $request)
    // {
    //     $request->validate([
    //         'name'=>'required',
    //         'email'=>'required|email|unique:clients',
    //         'phone'=>'required',
    //         'location'=>'required',
    //         'password'=>'required|min:6|confirmed'
    //     ]);

    //     $client = Client::create([
    //         'name'=>$request->name,
    //         'email'=>$request->email,
    //         'phone'=>$request->phone,
    //         'location'=>$request->location,
    //         'password'=>Hash::make($request->password)
    //     ]);

    //     // $client->sendEmailVerificationNotification();

    //     Auth::guard('client')->login($client);

    //     return redirect()->route('frontEnd.pages.home')->with('success','Account created! Verify your email.');
    // }

    // // Login
    // public function clientlogin(Request $request)
    // {
    //     if(Auth::guard('client')->attempt($request->only('email','password'))){
    //         return redirect()->route('frontEnd.pages.home');
    //     }

    //     return back()->with('error','Invalid credentials');
    // }



    // Show registration form
    public function showRegistrationForm()
    {
        return view('frontEnd.pages.register'); // Your Blade file
    }
public function showLoginForm()
    {
        return view('frontEnd.pages.login'); // Your Blade file
    }
    // Handle registration
    public function clientregister(Request $request)
    {
        // Validate input
        $request->validate([
            'name'                  => 'required|string|max:255',
            'email'                 => 'required|email|max:255|unique:users',
            'phone'                 => 'required|string|max:20',
            'location'              => 'required|string|max:255',
            'password'              => 'required|string|min:6|confirmed',
        ]);

        // Create user
        $user = Client::create([
            'name'                  => $request->name,
            'email'                 => $request->email,
            'phone'                 => $request->phone,
            'location'              => $request->location,
            'password'              => Hash::make($request->password),
            'realpassword'          => $request->password, // optional, for admin view
            'status'                => 1,
        ]);

        // Log in user immediately
        auth()->login($user);

        // Redirect to dashboard or homepage
          return redirect("/login")
            ->with('success', 'Register Page successfully.');

    }

public function clientlogin(Request $request)
{
    // 1. Validate input
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    // 2. Get credentials
    $credentials = $request->only('email', 'password');

    // 3. Attempt login
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate(); // Prevent session fixation
        $user = Auth::clients();

        // 4. Check if user is active
        if ($user->status != 1) {
            Auth::logout();
            $message = 'Access denied. Your account is inactive.';
            return $request->ajax()
                ? response()->json(['errors' => [$message]], 422)
                : back()->withErrors(['email' => $message])->withInput();
        }

        // 5. Redirect after successful login
        $redirect = route('profile'); // make sure you have a route named 'profile'

        return $request->ajax()
            ? response()->json(['redirect' => $redirect])
            : redirect($redirect)->with('success', 'Logged in successfully.');
    }

    // 6. Invalid credentials
    $message = 'Invalid credentials';
    return $request->ajax()
        ? response()->json(['errors' => [$message]], 422)
        : back()->withErrors(['email' => $message])->withInput();
}


}
