<?php

namespace App\Http\Controllers;

use App\Repositories\CooperationRepository;
use App\User;
use Illuminate\Http\Request;

class CooperationController extends Controller
{
    protected $cooperativeRepository;

    public function __construct(CooperationRepository $cooperationRepository){
        $this->cooperativeRepository = $cooperationRepository;
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
        return view("cooperative.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
         $user =User::create([
        'name' => $request['name'],
        'email' => $request['email'],
        'password' => bcrypt($request['password_confirmation']),
        'telephone' => $request['telephone'],
        'adresse'=> $request['adresse'],
        'role_id'=> $request['role_id']
    ]);
        $request->merge(['user_id' => $user->id,'matricule'=> time().$user->id]);

        if($request->hasFile('doc')) {
            $fileNameWithExtention = $request->file('doc')->getClientOriginalName();

            $filename =pathinfo($fileNameWithExtention, PATHINFO_FILENAME);

            $extension = $request->file('doc')->getClientOriginalExtension();

            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $request->file('doc')->storeAs('public/dossier', $fileNameToStore);
            $request->file('doc')->storeAs('public/dossier/thumbnail', $fileNameToStore);
            $request->merge(['dossier'=>$fileNameToStore]);
        }
        $this->cooperativeRepository->store($request->all());
        return redirect()->back();


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
}
