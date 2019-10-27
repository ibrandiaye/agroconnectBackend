<?php



namespace App\Repositories;

use App\Adhesion;

class AdhesionRepository extends RessourceRepository
{
    /**
     * Repository qui permet d les adhesions des paysans
     */
    private $idUser;
    public function __construct(Adhesion $adhesion)
    {
        $this->model = $adhesion;
    }

    public function getAdhesionByUser($id)
    {
        $this->idUser = $id;
        return Adhesion::with(['cooperation', 'paysan', 'paysan.user' => function ($query) {
            $query->where('user_id', $this->idUser);
        }]);
    }
}
