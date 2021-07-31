<?php

namespace App\Admin\Repositories;

use App\Models\Char as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Char extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
