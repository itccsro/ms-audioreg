<?php

namespace App\Http\Controllers\Auth;

use App\Institution;
use App\Role;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $institution;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @param Institution $institution
     */
    public function __construct(Institution $institution)
    {
        $this->institution = $institution;
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $institutions = $this->institution->pluck('id');
        $institutionRules = 'required_if:role,'. Role::DOCTOR . '|in:' . implode(',', $institutions->toArray());
        $cnpRules = 'required_if:role,' . Role::DOCTOR . '|numeric|digits:13';
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'role' => 'in:' . Role::ADMIN . ',' . Role::DOCTOR,
            'institution_id' => $institutionRules,
            'cnp' => $cnpRules
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = [
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => $data['role'],
            'cnp' => $data['cnp'],
            'password' => bcrypt($data['password']),
        ];
        if($data['role'] == Role::DOCTOR) {
            $user['institution_id'] = $data['institution_id'];
        }
        if($data['role'] == Role::ADMIN) {
            unset($user['cnp']);
        }
        return User::create($user);
    }

    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        $user = $this->guard()->user();

        return $user->isAdmin() ? '/admin' : '/uploads';
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('auth.register',
            ['roles' => [Role::DOCTOR, Role::ADMIN], 'institutions' => $this->institution->pluck('name', 'id')]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $this->create($request->all());

        return redirect(route('users'));
    }

}
