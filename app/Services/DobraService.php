<?php

namespace App\Services;

use App\Repositories\DobraRepository;
use LaravelAux\BaseService;

class DobraService extends BaseService
{
    /**
     * UserService constructor.
     *
     * @param DobraRepository $repository
     */
    public function __construct(DobraRepository $repository)
    {
        parent::__construct($repository);
    }
}