<?php

namespace App\Http\Controllers;

use App\Repositories\CategorieRepository;
use App\Repositories\InteresseRepository;
use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InteresseController extends Controller
{
    /**
     * controlleur qui permet de gerer les requetes pour la classe interresé
     */

    protected $interesseRepository;
    protected $serviceRepository;
    protected $categorieRepository;
    public function __construct(InteresseRepository $interesseRepository, ServiceRepository $serviceRepository,
                                CategorieRepository $categorieRepository){
        $this->interesseRepository = $interesseRepository;
        $this->serviceRepository =$serviceRepository;
        $this->categorieRepository = $categorieRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = $this->serviceRepository->getAllServiceWithRelation();
        $categories = $this->categorieRepository->getCategorieWithSousCategorie();
        return view('service.liste',compact('services','categories'));
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
        $request->merge(['user_id'=>Auth::id(),'etat'=>false]);
        $this->interesseRepository->store($request->all());
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
