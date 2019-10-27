<?php

namespace App\Http\Controllers;

use App\Repositories\AnnonceRepository;
use App\Repositories\CooperationRepository;
use App\Repositories\PaysanRepository;
use App\Repositories\PosterRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected  $paysanRepository;
    protected $annonceRepository;
    protected $cooperativeRepository;
    protected  $posterRepository;
    public function __construct(PaysanRepository $paysanRepository, AnnonceRepository $annonceRepository,
            CooperationRepository $cooperationRepository, PosterRepository $posterRepository)
    {
        $this->middleware('auth');
        $this->cooperativeRepository = $cooperationRepository;
        $this->paysanRepository = $paysanRepository;
        $this->annonceRepository = $annonceRepository;
        $this->posterRepository = $posterRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nbPaysan = $this->paysanRepository->countPaysan();
        $nbCooperative = $this->cooperativeRepository->countCooperation();
        $nbAnnonce = $this->annonceRepository->countAnnonce();
        $nbPoster = $this->posterRepository->countAnnonce();
        return view('home',compact('nbPaysan','nbCooperative','nbAnnonce','nbPoster'));
    }
}
