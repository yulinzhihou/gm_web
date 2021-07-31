<?php

namespace App\Admin\Repositories;

use App\Models\Account as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Account extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
