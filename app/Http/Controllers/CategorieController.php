<?php

namespace App\Http\Controllers;

use App\Repositories\CategorieRepository;
use Illuminate\Http\Request;
use Image;
class CategorieController extends Controller
{
    /**
     * controlleur qui permet de gerer categories accessible seulement dans la partie admin
     */
    protected $categorieRepository;
    public function __construct(CategorieRepository $categorieRepository){
        $this->categorieRepository = $categorieRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= $this->categorieRepository->getAll();
        return view('categorie.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorie.add');
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
        $categorie = $this->categorieRepository->store($request->all());
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

    // Affichage des Categories pour le mobile
    public function getAllCategories()
    {
        $categories = $this->categorieRepository->getCategorieWithSousCategorie();
        return response()->json($categories);
    }

}
