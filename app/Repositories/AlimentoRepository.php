<?php

namespace App\Repositories;

use App\Models\Alimento;
use LaravelAux\BaseRepository;

class AlimentoRepository extends BaseRepository
{
    /**
     * UserService constructor.
     *
     * @param Alimento $model
     */
    public function __construct(Alimento $model)
    {
        parent::__construct($model);
    }
}