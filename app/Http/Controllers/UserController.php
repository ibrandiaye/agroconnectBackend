<?php

namespace App\Http\Controllers;

use App\Repositories\EntrepriseRepository;
use App\Repositories\ParticulierRepository;
use App\Repositories\PaysanRepository;
use App\Repositories\RoleRepository;
use App\Repositories\UserRepository;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $paysanRepository;
    protected $particulierRepository;
    protected $entrepriseRepository;
    protected $roleRepository;
    protected $userRepository;

    public function __construct(PaysanRepository $paysanRepository, ParticulierRepository $particulierRepository,
                    EntrepriseRepository $entrepriseRepository, RoleRepository $roleRepositor, UserRepository $userRepository){
        $this->particulierRepository = $particulierRepository;
        $this->entrepriseRepository = $entrepriseRepository;
        $this->paysanRepository = $paysanRepository;
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepositor;
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = $this->roleRepository->getAll();
        return view('utilisateur.inscription',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->role_id==1){

            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = bcrypt(bcrypt($request['password1']));
            $user->telephone = $request['telephone'];
            $user->adresse= $request['adresse'];
            $user->role_id= $request['role_id'];
            $request->merge(['user_id' => $user->id]);
            $paysan = $this->paysanRepository->store($request->all());
            return back();
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function profil(){
        $user = $this->userRepository->getById(Auth::id());
        return view('auth.profil',compact('user'));
    }



    //function for, API

    public function storeAPI(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|max:255',
            'password' => 'required',
            'password_confirmation' => 'required',
            'telephone' => 'required|unique:users',
            'adresse' => 'required',
            'role_id' => 'required',
        ]);


        if($request->role_id==1){

            /*$user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = bcrypt(bcrypt($request['password1']));
            $user->telephone = $request['telephone'];
            $user->adresse= $request['adresse'];
            $user->role_id= $request['role_id'];*/
            $user = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => bcrypt($request['password_confirmation']),
                'telephone' => $request['telephone'],
                'adresse' => $request['adresse'],
                'role_id' => $request['role_id']
            ]);
            $request->merge(['user_id' => $user->id,'matricule' => time().$user->id]);
            $paysan = $this->paysanRepository->store($request->all());
            return response()->json("ok");
        }
        return response()->json("ko");
    }
}
