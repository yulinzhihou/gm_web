<?php

namespace App\Admin\Repositories;

use App\Models\EventType as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class EventType extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
