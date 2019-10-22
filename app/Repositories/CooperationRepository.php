<?php

/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 15/10/2019
 * Time: 12:15
 */

namespace App\Repositories;


use App\Cooperation;

class CooperationRepository extends RessourceRepository
{
    public function __construct(Cooperation $cooperation)
    {
        $this->model = $cooperation;
    }

    public function getAllCooperative()
    {
        return Cooperation::with(['user'])
            ->orderBy('id', 'desc')
            ->get();
    }
}
