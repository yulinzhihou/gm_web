<?php

namespace App\Admin\Repositories;

use App\Models\Zone as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Zone extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
