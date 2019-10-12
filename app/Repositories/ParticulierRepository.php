<?php
/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 08/10/2019
 * Time: 08:03
 */

namespace App\Repositories;


use App\Particulier;

class ParticulierRepository {

    public function __construct(Particulier $particulier){
        $this->model = $particulier;
    }
}