<?php

namespace App\Repositories;

use App\Models\Dieta;
use LaravelAux\BaseRepository;

class DietaRepository extends BaseRepository
{
    /**
     * UserService constructor.
     *
     * @param Dieta $model
     */
    public function __construct(Dieta $model)
    {
        parent::__construct($model);
    }
}