<?php

namespace App\Http\Controllers\Auth;

use App\Paysan;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Repositories\EntrepriseRepository;
use App\Repositories\ParticulierRepository;
use App\Repositories\PaysanRepository;
use App\Repositories\RoleRepository;

class RegisterController extends Controller
{
    protected $paysanRepository;
    protected $particulierRepository;
    protected $entrepriseRepository;
    protected $roleRepository;

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
    public function __construct(PaysanRepository $paysanRepository, ParticulierRepository $particulierRepository,
                                EntrepriseRepository $entrepriseRepository, RoleRepository $roleRepositor)
    {
        $this->middleware('guest');
        $this->particulierRepository = $particulierRepository;
        $this->entrepriseRepository = $entrepriseRepository;
        $this->paysanRepository = $paysanRepository;
        $this->roleRepository = $roleRepositor;
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'telephone' => 'required',
            'adresse'=> 'required',
            'role_id' => 'required'
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
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'telephone' => $data['telephone'],
            'adresse'=> $data['adresse'],
            'role_id'=> $data['role_id']
        ]);
        if($data['role_id']==1){

        //$user->save();
        //$idUser =  DB::table('users')->where('email', $request->input('emailet'))->value('id');
        //$request->merge(['password' => bcrypt($request->password)]);
        //$request->password
        //$user = $this->userRepository->store($request->all());
            Paysan::create([
                'user_id' => $user->id,
                'matricule' => time().$user->id,
                'cni' => $data['cni']
            ]);
        /*$data->merge(['user_id' => $user->id]);
        $paysan = $this->paysanRepository->store($data->all());*/

    }
        return $user;

    }
}
