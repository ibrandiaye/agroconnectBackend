<?php

namespace App\Http\Controllers;

use App\Repositories\CultureRepository;
use Illuminate\Http\Request;
use Image;

class CultureController extends Controller
{

    protected $cultureRepository;

    public function __construct(CultureRepository $cultureRepository)
    {
        $this->cultureRepository = $cultureRepository;
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
        return view("culture.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /* $this->validate($request, [
            'filename' => 'image|required|mimes:jpeg,png,jpg,gif,svg',
            'libelle'=>'required'
        ]);

        if ($request->hasFile('filename')) {
            $fileNameWithExtention = $request->file('filename')->getClientOriginalName();

            $filename = pathinfo($fileNameWithExtention, PATHINFO_FILENAME);

            $extension = $request->file('filename')->getClientOriginalExtension();

            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $request->file('filename')->storeAs('public/dossier', $fileNameToStore);
            $request->file('filename')->storeAs('public/dossier/thumbnail', $fileNameToStore);
            $request->merge(['image' => $fileNameToStore]);
        }*/
        $request->merge(['image' => 'fdxfxgf']);
        $this->cultureRepository->store($request->all());
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
    public function getAllCultureAdmin()
    {
        $culture = $this->cultureRepository->getAllCulture();
        return  view('culture.show', compact('culture'));
    }
}
