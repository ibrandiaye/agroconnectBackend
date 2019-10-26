<?php
/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 25/10/2019
 * Time: 02:34
 */

namespace App\Repositories;


use App\Publication;
use Illuminate\Support\Facades\DB;

class PublicationRepository extends RessourceRepository{
    public function __construct(Publication $publication){
        $this->model = $publication;

    }

    public function getBulletionMeteo(){
    return DB::table('publications')
        ->orderBy('id','desc')
        ->get();
}
    public function getLastBulletionMeteo(){
        return DB::table('publications')
            ->orderBy('id','desc')
            ->get();
    }

}