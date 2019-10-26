<?php

/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 08/10/2019
 * Time: 08:02
 */

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
}
