<?php

namespace App\Repositories;

use App\Models\Dobra;
use LaravelAux\BaseRepository;

class DobraRepository extends BaseRepository
{
    /**
     * UserService constructor.
     *
     * @param Dobra $model
     */
    public function __construct(Dobra $model)
    {
        parent::__construct($model);
    }
}