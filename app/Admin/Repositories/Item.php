<?php

namespace App\Admin\Repositories;

use App\Models\Item as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Item extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
