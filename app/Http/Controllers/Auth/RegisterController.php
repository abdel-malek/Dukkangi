<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use App\Http\Services\MailService;
use Illuminate\Http\Request;
use \Datetime;
use App;
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
    protected $redirectTo = '/';

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
    /*public function register($data){
        self::validator(data);
        self::create(data);

        return redirect($redirectTo);
    }*/
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'address' => 'string'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function showRegistrationForm()
    {
            $lang = session('lang');
        App::setLocale($lang);
        return view('client.pages.signup');
    }
    protected function create(array $data)
    {
        $users = User::all() ;
        if ($users->count() == 0 )
        {
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'user_category_id' => 2,
                'gender' => $data['gender'],
                'birth_date' => new DateTime($data['dateofbirth']),
                'address' => $data['address'],
            ]);
        }
        else{
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'user_category_id' => 2,
                'gender' => $data['gender'],
                'birth_date' => new DateTime($data['dateofbirth']),
                'address' => $data['address'],
            ]);
        }
    }


   public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));
        $this->guard()->login($user);

        MailService::send('emails.signup', [],'register@dukkangi.com', $request->email, 'register successed');

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }


}
