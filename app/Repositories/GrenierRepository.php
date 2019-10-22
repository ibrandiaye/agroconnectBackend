<?php


namespace App\Repositories;

use App\Grenier;

class GrenierRepository extends RessourceRepository
{
    public function __construct(Grenier $grenier)
    {
        $this->model = $grenier;
    }

    public function getAllGrenier()
    {
        return Grenier::with(['cooperation'])
            ->orderBy('id', 'desc')
            ->get();
    }
}
