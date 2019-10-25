<?php


namespace App\Repositories;

use App\Culture;

class CultureRepository extends RessourceRepository
{
    public function __construct(Culture $culture)
    {
        $this->model = $culture;
    }

    public function getAllCulture()
    {
        return Culture::with(['cooperation'])
            ->orderBy('id', 'desc')
            ->get();
    }
}
