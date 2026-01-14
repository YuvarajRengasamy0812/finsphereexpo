<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Helper;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/admin';

    public function __construct()
    {
        $this->middleware('guest');
    }

    // Show register page
    public function showRegistrationForm()
    {
        return view('frontEnd.pages.register');
    }

    // Validation
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'phone'    => ['required'],
            'location' => ['required'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    // THIS is where Laravel saves the user
    protected function create(array $data)
    {
        return User::create([
            'name'          => $data['name'],
            'email'         => $data['email'],
            'phone'         => $data['phone'],
            'location'      => $data['location'],
            'realpassword'  => $data['password'],   // not secure but per your requirement
            'password'      => Hash::make($data['password']),
            'status'        => 1,
            'permissions_id'=> Helper::GeneralWebmasterSettings("permission_group"),
        ]);
    }
}
