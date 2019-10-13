<?php

namespace App\Http\Controllers;

use App\Repositories\AnnonceRepository;
use App\Repositories\ProduitRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnonceController extends Controller
{
    protected $annonceRepository;
    protected  $produitRepository;
    public function __construct(AnnonceRepository $annonceRepository, ProduitRepository $produitRepository){
        $this->annonceRepository = $annonceRepository;
        $this->produitRepository = $produitRepository;
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
        $produits = $this->produitRepository->getAll();
        return view('annonces.add',compact('produits'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge(['user_id'=>Auth::id(),'etat'=> false]);
        $annonce = $this->annonceRepository->store($request->all());
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
    public function getLastAnnonces(){
        $annonces = $this->annonceRepository->getLastsAnnonce(6);
        return view('acceuil',compact('annonces'));
    }
    public function getOneAnnonce($id){
        $annonce = $this->annonceRepository->getOneAnnonce($id);
        return view('annonces.detailAnnonce',compact('annonce'));
    }
    public function getAllannonce(){
        $annonces = $this->annonceRepository->getAllAnnonce();
        return  view('annonces.listeAnnonces',compact('annonces'));
    }
    // function for application mobile
    public function getAllannonceApi(){
        $annonces = $this->annonceRepository->getAll();
        return response()->json($annonces);
    }
}
