<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Account;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Schema;

use DB;
use Mail;
use Illuminate\Http\Request;

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
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'birthdayDate' => 'required|string|max:255',
            'birthdayMonth' => 'required|string|max:255',
            'birthdayYear' => 'required|string|max:255',
            'contactnumber' => 'required|string|max:255',
            'streetaddress' => 'required|string|max:255',
            'cityaddress' => 'required|string|max:255',
            'provinceaddress' => 'required|string|max:255',     
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data){
        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
            'birthdayDate' => $data['birthdayDate'],
            'birthdayMonth' => $data['birthdayMonth'],
            'birthdayYear' => $data['birthdayYear'],
            'contactnumber' => $data['contactnumber'],
            'streetaddress' => $data['streetaddress'],
            'cityaddress' => $data['cityaddress'],
            'provinceaddress' => $data['provinceaddress'],  
            'status' => 'Pending'
        ]);
  
    }

    public function register(Request $request){
        $input = $request->all();
        $validator = $this->validator($input);

        if($validator->passes()){
            $user = $this->create($input)->toArray();
            $user['link'] = str_random(30);

            DB::table('users_activitations')->insert(['id_user'=> $user['id'], 'token' => $user['link']]);
            Mail::send('mail.activation', $user, function($message) use ($user) {
                $message->to($user['email']);
                $message->subject('testing- Activation Code');
            });
            return redirect()->to('login')->with('Success', "We sent activation code, please check your email");
        }
        return back()->with('Error', $validator->errors());
    }
    public function userActivation($token){
        $check = DB::table('users_activitations')->where('token', $token)->first();
        if(!is_null($check)){
            $user = User::find($check->id_user);
            if($user->status == 'Active'){
                return redirect()->to('login')->with('Success', "User already activated");
            }
            $user->update(['status' => 'Active']);

            DB::table('users_activitations')->where('token', $token)->delete();
            return redirect()->to('login')->with('Success', "User active successfully");
    
        }
        return redirect()->to('login')->with('Warning', "Your token is invalid");       
    }
}
