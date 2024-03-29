<?php

namespace App\Http\Controllers;

use App\Repositories\ProduitRepository;
use App\Repositories\SousCategorieRepository;
use Illuminate\Http\Request;
use Image;

class ProduitController extends Controller
{
    /**
     * controlleur qui permet de gerer les requêtes de produit accessible seulement dans la partie admin
     */
    protected $produitReposiory;
    protected $sousCategorieRepository;
    public function __construct(ProduitRepository $produitRepository, SousCategorieRepository $sousCategorieRepository){
        $this->produitReposiory = $produitRepository;
        $this->sousCategorieRepository = $sousCategorieRepository;
    }
    public function index()
    {
        $produits = $this->produitReposiory->getAllProduitsWithRelation();
        return view('produit.liste',compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sousCategories = $this->sousCategorieRepository->getAll();
        return view('produit.add',compact('sousCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'filename' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $originalImage= $request->file('filename');
        $thumbnailImage = Image::make($originalImage);
        $thumbnailPath = public_path().'/thumbnail/';
        $originalPath = public_path().'/categorie/';
        $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());
        $thumbnailImage->resize(600,600);
        $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName());
        $request->merge(['image'=>time().$originalImage->getClientOriginalName()]);
        $produit = $this->produitReposiory->store($request->all());
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
