<?php

namespace App\Repositories;

use App\Models\Aluno;
use LaravelAux\BaseRepository;

class AlunoRepository extends BaseRepository
{
    /**
     * UserService constructor.
     *
     * @param Aluno $model
     */
    public function __construct(Aluno $model)
    {
        parent::__construct($model);
    }
}