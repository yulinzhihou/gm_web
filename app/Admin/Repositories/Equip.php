<?php

namespace App\Admin\Repositories;

use App\Models\Equip as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Equip extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
