<?php

namespace App\Services;

use App\Repositories\MedidaRepository;
use LaravelAux\BaseService;

class MedidaService extends BaseService
{
    /**
     * UserService constructor.
     *
     * @param MedidaRepository $repository
     */
    public function __construct(MedidaRepository $repository)
    {
        parent::__construct($repository);
    }
}