<?php

namespace App\Http\Controllers\Api;

use App\Services\DobraService;
use App\Http\Requests\DobraRequest;
use LaravelAux\BaseController;

class DobraController extends BaseController
{
    /**
     * UserController constructor.
     *
     * @param DobraService $service
     * @param DobraRequest $request
     */
    public function __construct(DobraService $service)
    {
        parent::__construct($service, new DobraRequest);
    }
}