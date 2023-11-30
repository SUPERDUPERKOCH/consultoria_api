<?php

namespace App\Services;

use App\Repositories\AlimentoRepository;
use LaravelAux\BaseService;

class AlimentoService extends BaseService
{
    /**
     * UserService constructor.
     *
     * @param AlimentoRepository $repository
     */
    public function __construct(AlimentoRepository $repository)
    {
        parent::__construct($repository);
    }
}