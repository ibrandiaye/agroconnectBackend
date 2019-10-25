<?php

namespace App\Http\Controllers;

use App\Repositories\CooperationRepository;
use App\Repositories\GrenierRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GrenierController extends Controller
{
    protected $grenierRepository;
    protected $cooperativeRepository;
    public function __construct(GrenierRepository $grenierRepository, CooperationRepository $cooperationRepository)
    {
        $this->grenierRepository = $grenierRepository;
       $this->cooperativeRepository = $cooperationRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $greniers = $this->grenierRepository->getAllGrenier();
        return view('grenier.show',compact('greniers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("grenier.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cooperative = $this->cooperativeRepository->getCooperativeByUser(Auth::id());
        $request->merge(['cooperation_id' => $cooperative->id]);
        $grenier = $this->grenierRepository->store($request->all());
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

    public function getAllGrenierAdmin()
    {
        $grenier = $this->grenierRepository->getAllGrenier();
        return  view('grenier.show', compact('grenier'));
    }
}
