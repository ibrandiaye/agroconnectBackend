<?php
/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 08/10/2019
 * Time: 08:03
 */

namespace App\Repositories;


use App\Entreprise;

class EntrepriseRepository {

    public function __construct(Entreprise $entreprise){
        $this->model = $entreprise;
    }
}