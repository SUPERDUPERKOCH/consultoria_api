<?php

namespace App\Http\Controllers\Api;

use App\Services\MedidaService;
use App\Http\Requests\MedidaRequest;
use LaravelAux\BaseController;

class MedidaController extends BaseController
{
    /**
     * UserController constructor.
     *
     * @param MedidaService $service
     * @param MedidaRequest $request
     */
    public function __construct(MedidaService $service)
    {
        parent::__construct($service, new MedidaRequest);
    }
}