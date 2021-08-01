<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $connection = 'web';
    protected $table = 'account';
    public $timestamps = false;
}
