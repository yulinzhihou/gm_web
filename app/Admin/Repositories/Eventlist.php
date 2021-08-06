<?php

namespace App\Admin\Repositories;

use App\Models\Eventlist as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Eventlist extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
