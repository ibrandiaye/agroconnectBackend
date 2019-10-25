<?php

namespace App\Http\Controllers;

use App\Repositories\CooperationRepository;
use App\Repositories\ParcelleRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParcelleController extends Controller
{
    protected $parcelleRepository;
    protected $cooperativeRepository;

    public function __construct(ParcelleRepository $parcelleRepository, CooperationRepository $cooperationRepository)
    {
        $this->parcelleRepository = $parcelleRepository;
        $this->cooperativeRepository = $cooperationRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parcelles= $this->parcelleRepository->getAllParcelle();
        return view('parcelle.show',compact('parcelles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("parcelle.add");
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
        // TODO: add fonctionalites.

        if ($request->hasFile('filename')) {
            $fileNameWithExtention = $request->file('filename')->getClientOriginalName();

            $filename = pathinfo($fileNameWithExtention, PATHINFO_FILENAME);

            $extension = $request->file('filename')->getClientOriginalExtension();

            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $request->file('filename')->storeAs('public/dossier', $fileNameToStore);
            $request->file('filename')->storeAs('public/dossier/thumbnail', $fileNameToStore);
            $request->merge(['image' => $fileNameToStore]);
        }
        $parcelle = $this->parcelleRepository->store($request->all());
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

    public function getAllParcelleAdmin()
    {
        $parcelle = $this->parcelleRepository->getAllParcelle();
        return  view('parcelle.show', compact('parcelle'));
    }
}
