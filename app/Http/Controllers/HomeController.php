<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $email=Auth::user()->email;
        $userDetails = DB::select('select first_name,last_name,address,phone,email,birth from users where email = ?',[$email]);
        $y="%Y-%m-%d";
        $usersInfo = DB::select("SELECT CONCAT(first_name, ' ',last_name) AS name , DATEDIFF(CURDATE(),STR_TO_DATE(birth, '$y') )/365 AS age ,email,phone FROM users WHERE role= 'user'");

        return view('home',['userDetails'=>$userDetails,'usersInfo'=>$usersInfo]);
    }
    public function PasswordIndex(){
        return view('auth.reset');
    }
    public function resetPassword(Request $request)
    {
        $request->validate([
            'password' => ['required','string','min:5','confirmed'],
            
        ],[
            'password.min'=>'Password should have minimum of 6 characters or numbers',
        ]);
        //
        $check=Auth::user()->id;

        $check=User::findOrFail($check);
        
        if(Hash::check($request->prevPassword,$check->password)){

            if (Hash::check($request->password, $check->password)) {
                return back()->with('success','Password can not be same as the previous one');       
            }else{
                $check->password = Hash::make($request['password']);
                $check->save();
                return redirect('home')->with('success','Password changed successfully');
            }   
        }else{
            return back()->with('success','Wrong password');
        }
    }
}
