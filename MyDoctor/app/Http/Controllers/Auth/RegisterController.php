<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;
use App\Models\Doctor;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:doctor');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
                'fiscal_code'        => ['required', 'string', 'min:16', 'max:16','unique:users'],
                'name' 		         => ['required', 'string', 'max:20'],
                'surname'            => ['required', 'string', 'max:20'],
                'email'              => ['required', 'string', 'email', 'max:50', 'unique:users'],
                'dob'                => ['required', 'date'],
                'phone_number'       => ['required', 'string', 'max:15', 'unique:users'],
                'gender'             => ['required', 'string', 'max:1'],
                'street_address'     => ['required', 'string', 'max:50'],
                'street_number'      => ['required', 'string', 'max:8'],
                'postal_code'        => ['required', 'string', 'max:5'],
                'city'               => ['required', 'string', 'max:30'],
                'fiscal_code_doctor' => ['required', 'string', 'min:16', 'max:16'],
                'password'           => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'fiscal_code'        => $data['fiscal_code'],
            'name'               => $data['name'],
            'surname'            => $data['surname'],
            'email'              => $data['email'],
            'dob'                => $data['dob'],
            'phone_number'       => $data['phone_number'],
            'gender'             => $data['gender'],
            'street_address'     => $data['street_address'],
            'street_number'      => $data['street_number'],
            'postal_code'        => $data['postal_code'],
            'city'               => $data['city'],
            'fiscal_code_doctor' => $data['fiscal_code_doctor'],
            'password'           => Hash::make($data['password']),
        ]);
    }

    protected function validatorAdmin(array $data)
    {
        return Validator::make($data, [
                'name' 		         => ['required', 'string', 'max:20'],
                'email'              => ['required', 'string', 'email', 'max:50', 'unique:admins'],
                'password'           => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function showAdminRegisterForm()
    {
        return view('auth.register_admin', ['url' => 'admin']);
    }

    /**
     * @param Request $request
     *
     * @return RedirectResponse
     */
    protected function createAdmin(Request $request)
    {
        $this->validatorAdmin($request->all())->validate();
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->intended('login/admin');
    }

    protected function validatorDoctor(array $data)
    {
        return Validator::make($data, [
                'fiscal_code'        => ['required', 'string', 'min:16', 'max:16','unique:doctors'],
                'name' 		         => ['required', 'string', 'max:20'],
                'surname'            => ['required', 'string', 'max:20'],
                'email'              => ['required', 'string', 'email', 'max:50', 'unique:doctors'],
                'dob'                => ['required', 'date'],
                'phone_number'       => ['required', 'string', 'max:15', 'unique:doctors'],
                'gender'             => ['required', 'string', 'max:1'],
                'id_building'        => ['required', 'integer'],
                'password'           => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * @return Factory|View
     */
    public function showDoctorRegisterForm()
    {
        return view('auth.register_doctor', ['url' => 'doctor']);
    }

    /**
     * @param Request $request
     *
     * @return RedirectResponse
     */
    protected function createDoctor(Request $request)
    {
        $this->validatorDoctor($request->all())->validate();
        Doctor::create([
            'fiscal_code'  => $request->fiscal_code,
            'name'         => $request->name,
            'surname'      => $request->surname,
            'email'        => $request->email,
            'gender'       => $request->gender,
            'dob'          => $request->dob,
            'phone_number' => $request->phone_number,
            'id_building'  => $request->id_building,
            'password'     => Hash::make($request->password),


        ]);
        return redirect()->intended('login/doctor');
    }

}