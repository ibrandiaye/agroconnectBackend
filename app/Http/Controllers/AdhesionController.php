<?php

namespace App\Http\Controllers;

use App\adhesion;
use App\Repositories\AdhesionRepository;
use App\Repositories\CooperationRepository;
use App\Repositories\PaysanRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdhesionController extends Controller
{
    protected $adhesionRepository;
    protected $cooperationRepository;
    protected $paysanRepository;


    public function __construct(AdhesionRepository $adhesionRepository, PaysanRepository $paysanRepository, CooperationRepository $cooperationRepository)
    {
        $this->adhesionRepository = $adhesionRepository;
        $this->cooperationRepository = $cooperationRepository;
        $this->paysanRepository = $paysanRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cooperative = $this->cooperationRepository->getAllCooperative();
        return  view('adhesion.show', compact('cooperative'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paysan = $this->paysanRepository->getPaysanByUser(Auth::id());
        $paysan = $this->paysanRepository->getById($paysan->id);
        $paysan->adherer = true;
        $paysan->save();
        $request->merge(['paysan_id' => Auth::id()]);
        $adhesion = $this->adhesionRepository->store($request->all());


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\adhesion  $adhesion
     * @return \Illuminate\Http\Response
     */
    public function show(adhesion $adhesion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\adhesion  $adhesion
     * @return \Illuminate\Http\Response
     */
    public function edit(adhesion $adhesion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\adhesion  $adhesion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, adhesion $adhesion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\adhesion  $adhesion
     * @return \Illuminate\Http\Response
     */
    public function destroy(adhesion $adhesion)
    {
        //
    }
}
