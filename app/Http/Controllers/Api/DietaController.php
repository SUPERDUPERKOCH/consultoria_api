<?php

namespace App\Http\Controllers\Api;

use App\Services\DietaService;
use App\Http\Requests\DietaRequest;
use LaravelAux\BaseController;

class DietaController extends BaseController
{
    /**
     * UserController constructor.
     *
     * @param DietaService $service
     * @param DietaRequest $request
     */
    public function __construct(DietaService $service)
    {
        parent::__construct($service, new DietaRequest);
    }
}