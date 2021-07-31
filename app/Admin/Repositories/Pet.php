<?php

namespace App\Admin\Repositories;

use App\Models\Pet as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Pet extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
