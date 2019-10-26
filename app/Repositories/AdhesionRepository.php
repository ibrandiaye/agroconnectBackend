<?php



namespace App\Repositories;

use App\Adhesion;

class AdhesionRepository extends RessourceRepository
{
    public function __construct(Adhesion $adhesion)
    {
        $this->model = $adhesion;
    }
}
