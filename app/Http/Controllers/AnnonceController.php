<?php

namespace App\Http\Controllers;

use App\Repositories\AnnonceRepository;
use App\Repositories\ProduitRepository;
use App\Repositories\SousCategorieRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnonceController extends Controller
{
    protected $annonceRepository;
    protected  $produitRepository;
    protected $sousCategorieRepository;
    public function __construct(
        AnnonceRepository $annonceRepository,
        ProduitRepository $produitRepository,
        SousCategorieRepository $sousCategorieRepository
    ) {
        $this->annonceRepository = $annonceRepository;
        $this->produitRepository = $produitRepository;
        $this->sousCategorieRepository = $sousCategorieRepository;
    }
    public function index()
    { }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produits = $this->produitRepository->getAll();
        return view('annonces.add', compact('produits'));
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
    public function getLastAnnonces()
    {
        $annonces = $this->annonceRepository->getLastsAnnonce(6);
        return view('acceuil', compact('annonces'));
    }
    public function getOneAnnonce($id)
    {
        $annonce = $this->annonceRepository->getOneAnnonce($id);
        return view('annonces.detailAnnonce', compact('annonce'));
    }
    public function getAllannonce()
    {
        $sousCategories = $this->sousCategorieRepository->getAll();
        $annonces = $this->annonceRepository->getAllAnnonce();

        return  view('annonces.listeAnnonces', compact('annonces', 'sousCategories'));
    }
    public function getAllannonceAdmin()
    {
        $annonces = $this->annonceRepository->getAllAnnonce();
        return  view('annonces.listeAnnoncesAdmin', compact('annonces'));
    }
    public function validerAnnonce($id)
    {
        $annonce = $this->annonceRepository->getById($id);
        $annonce->etat = true;
        $annonce->save();
        return redirect()->back();
    }
    public function getAnnoncesByCategorie($id)
    {
        $sousCategories = $this->sousCategorieRepository->getAll();
        $annonces = $this->annonceRepository->getAnnonceByCategorie($id);
        return  view('annonces.listeAnnonces', compact('annonces', 'sousCategories'));
    }
    public function getAnnonceToValidate()
    {
        $annonces = $this->annonceRepository->getAnnonceNoValidate();
        return view('annonces.listeAnnoncesAValider', compact('annonces'));
    }
    public function  getAnnonceByUser()
    {
        $annonces = $this->annonceRepository->getAnnonceByUser(Auth::id());
        return view('utilisateur.mesAnnonces', compact('annonces'));
    }
    public function getAnnonceUserById($id)
    {
        $annonce = $this->annonceRepository->getAnnonceUserById($id);
        return view('utilisateur.uneAnnonce', compact('annonce'));
    }
    // function for application mobile
    public function getAllannonceApi()
    {
        $annonces = $this->annonceRepository->getAllAnnonce();
        return response()->json($annonces);
    }

    public function getAnnonceById($id)
    {
        $annonce = $this->annonceRepository->getOneAnnonce($id);
        return response()->json($annonce);
    }
}
