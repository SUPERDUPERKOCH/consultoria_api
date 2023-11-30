<?php

namespace App\Http\Controllers\Api;

use App\Services\AlimentoService;
use App\Http\Requests\AlimentoRequest;
use LaravelAux\BaseController;

class AlimentoController extends BaseController
{
    /**
     * UserController constructor.
     *
     * @param AlimentoService $service
     * @param AlimentoRequest $request
     */
    public function __construct(AlimentoService $service)
    {
        parent::__construct($service, new AlimentoRequest);
    }
}