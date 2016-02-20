<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Session;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         $this->middleware('guest', ['except' => 'doLogout']);
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'character_name' => $data['character_name'],
            'status' => 'A',
            'gender'=>$data['gender'],
            'playlyfecode'=>$data['playlyfecode']
        ]);
    }
	
	public function getLogin()
	{
		return view('auth.login');
	}
	
	public function postLogin(Request $request)
	{
		$credentials = array('email'=>$request->input('email'), 'password'=>$request->input('password'));
		$remember = $request->input('remember',0);
		if (Auth::attempt($credentials, $remember)) {
            $success = 1;
        } else {
        	$success = 0;
        }
		return response()->json(array('success'=>$success));
	}
	
	public function doLogout() 
	{
		Session::flush();
		Auth::logout();
		return redirect('welcome');
	}
}
