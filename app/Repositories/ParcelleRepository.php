<?php

/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 15/10/2019
 * Time: 12:15
 */

namespace App\Repositories;

use App\Parcelle;

class ParcelleRepository extends RessourceRepository
{
    public function __construct(Parcelle $parcelle)
    {
        $this->model = $parcelle;
    }

    public function getAllParcelle()
    {
        return Parcelle::with(['cooperation'])
            ->orderBy('id', 'desc')
            ->get();
    }
}
