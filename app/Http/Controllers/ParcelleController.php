<?php

namespace App\Http\Controllers;

use App\Repositories\ParcelleRepository;
use Illuminate\Http\Request;

class ParcelleController extends Controller
{
    protected $parcelleRepository;

    public function __construct(ParcelleRepository $parcelleRepository)
    {
        $this->parcelleRepository = $parcelleRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        $request->merge(['cooperation_id' => Auth::id()]);
        $parcelle = $this->parcelleRepository->store($request->all());
        // TODO: add fonctionalites.

        if ($request->hasFile('image')) {
            $fileNameWithExtention = $request->file('image')->getClientOriginalName();

            $filename = pathinfo($fileNameWithExtention, PATHINFO_FILENAME);

            $extension = $request->file('image')->getClientOriginalExtension();

            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $request->file('image')->storeAs('public/dossier', $fileNameToStore);
            $request->file('image')->storeAs('public/dossier/thumbnail', $fileNameToStore);
            $request->merge(['dossier' => $fileNameToStore]);
        }
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
