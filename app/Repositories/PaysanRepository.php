<?php


namespace App\Repositories;


use App\Paysan;
use Illuminate\Support\Facades\DB;

class PaysanRepository extends RessourceRepository
{
    public function __construct(Paysan $paysan)
    {
        $this->model = $paysan;
    }

    public function getPaysanByUser($id)
    {
        return DB::table('paysans')->where('user_id', $id)->first();
    }
    public function countPaysan(){
        return DB::table('paysans')->count();
    }
}
