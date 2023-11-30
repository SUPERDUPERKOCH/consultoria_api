<?php

namespace App\Http\Controllers\Api;

use App\Services\AlunoService;
use App\Http\Requests\AlunoRequest;
use LaravelAux\BaseController;

class AlunoController extends BaseController
{
    /**
     * UserController constructor.
     *
     * @param AlunoService $service
     * @param AlunoRequest $request
     */
    public function __construct(AlunoService $service)
    {
        parent::__construct($service, new AlunoRequest);
    }
}