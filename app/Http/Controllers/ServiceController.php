<?php

namespace App\Http\Controllers;

use App\Repositories\CategorieRepository;
use App\Repositories\ServiceRepository;
use App\Repositories\SousCategorieRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    /**
     * controlleur qui permet de gerer les requêtes de service
     */
    protected $serviceRepository;
    protected $sousCategorieRepository;
    protected $categorieRepository;
    public function __construct(
        ServiceRepository $serviceRepository,
        SousCategorieRepository $sousCategorieRepository,
        CategorieRepository $categorieRepository
    ) {
        $this->serviceRepository = $serviceRepository;
        $this->sousCategorieRepository = $sousCategorieRepository;
        $this->categorieRepository = $categorieRepository;
    }
    public function index()
    {
        $services = $this->serviceRepository->getAllServiceWithRelation();
        $categories = $this->categorieRepository->getCategorieWithSousCategorie();
        return view('service.liste', compact('services', 'categories'));
    }

    public function getServiceByCategorie($id)
    {
        $categories = $this->categorieRepository->getCategorieWithSousCategorie();
        $services = $this->serviceRepository->getAllServiceWithCegorie($id);
        return view('service.liste', compact('services', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sousCategories = $this->sousCategorieRepository->getAll();
        return view('service.add', compact('sousCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge(['user_id' => Auth::id(), 'etat' => false]);
        $service = $this->serviceRepository->store($request->all());
        return  redirect()->back();
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

    public function getServiceByUser()
    {
        $services = $this->serviceRepository->getAllServiceByUser(Auth::id());
        return view('utilisateur.mesServices', compact('services'));
    }
    public function getAllServices()
    {
        $services = $this->serviceRepository->getAllServiceWithRelation();
        return response()->json($services);
    }
}
