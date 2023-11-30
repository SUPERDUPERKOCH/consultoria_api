<?php

namespace App\Services;

use App\Repositories\AlunoRepository;
use LaravelAux\BaseService;

class AlunoService extends BaseService
{
    /**
     * UserService constructor.
     *
     * @param AlunoRepository $repository
     */
    public function __construct(AlunoRepository $repository)
    {
        parent::__construct($repository);
    }
}