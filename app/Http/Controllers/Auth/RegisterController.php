<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Carbon\Carbon;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstName' => ['required', 'string', 'between:3,100'],
            'lastName' => ['required', 'string', 'between:3,100'],
            'address' => ['required', 'string', 'between:5,200' ],
            'phone' => ['required', 'string','regex:/(01)[0-9]{9}+/', 'between:11,14', 'unique:users,phone'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'birthDate'=>['required','date'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
        ],[
            'firstName.between'=>'First name must be between 3 to 100 characters',
            'lastName.between'=>'Last name must be between 3 to 100 characters',
            'address.between'=>'Address must be between 5 to 200 characters',
            'phone.regex'=>'Phone number will be for ex:019xxxxxxxx',
            'email.unique'=>'Sorry, this email is not valid',
            'birthDate.date'=>'Sorry, Birth date is not valid',
            'password.min'=>'Password should be minimum 6 characters',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['firstName'],

            'last_name' => $data['lastName'],
            'address'=>$data['address'],
            'phone'=>$data['phone'],
            'email' => $data['email'],
            'birth'=>Carbon::parse($data['birthDate']),

            'password' => Hash::make($data['password']),
        ]);
    }
}
