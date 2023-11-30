<?php

namespace App\Repositories;

use App\Models\Medida;
use LaravelAux\BaseRepository;

class MedidaRepository extends BaseRepository
{
    /**
     * UserService constructor.
     *
     * @param Medida $model
     */
    public function __construct(Medida $model)
    {
        parent::__construct($model);
    }
}