<?php

namespace App\Services;

use App\Repositories\DietaRepository;
use LaravelAux\BaseService;

class DietaService extends BaseService
{
    /**
     * UserService constructor.
     *
     * @param DietaRepository $repository
     */
    public function __construct(DietaRepository $repository)
    {
        parent::__construct($repository);
    }
}