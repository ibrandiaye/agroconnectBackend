<?php

namespace App\Http\Controllers;



use App\Repositories\ConseilRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
class ConseilController extends Controller
{
    protected $conseilRepository;

    public function __construct(ConseilRepository $conseilRepository){
       $this->conseilRepository = $conseilRepository;
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
        return view('conseil.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->has('filename')){
            $originalImage= $request->file('filename');
            $thumbnailImage = Image::make($originalImage);
            $thumbnailPath = public_path().'/thumbnail/';
            $originalPath = public_path().'/categorie/';
            $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());
            $thumbnailImage->resize(600,600);
            $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName());
            $request->merge(['image'=>time().$originalImage->getClientOriginalName()]);
        }
        if ($request->hasFile('audios')) {

            $audio = $request->file('audios');

            $name=$audio->getClientOriginalName();
            $audio->move(public_path().'/audio/', $name);
            $data[] = $name;
            $request->merge(['audio'=>$name]);

        }
        $request->merge(['user_id'=>Auth::id(),'etat'=> false]);
        $this->conseilRepository->store($request->all());

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

    public function getConselsAndUser(){
        $conseils = $this->conseilRepository->getConseilsWithUser();
        return view('conseil.list',compact('conseils'));
    }
    public function getOneConseil($id){
        $conseil = $this->conseilRepository->getConseilOneUser($id);
        return view('conseil.list',compact('conseil'));
    }
}
