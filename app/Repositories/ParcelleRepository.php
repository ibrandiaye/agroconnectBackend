<?php


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
        return Parcelle::with(['cooperation', 'cooperation.user'])
            ->orderBy('id', 'desc')
            ->get();
    }
}
